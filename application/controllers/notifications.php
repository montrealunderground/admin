<?php

class Notifications extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('devicetoken_model');

        if( !$this->session->userdata('is_logged_in') ) {
            redirect('admin/login');
        }
    }

    public function index($lang=0) {
        $data['main_content'] = 'admin/notifications/list';
        $data['activatedMenu'] = 'notifications';
        $data['data']['devicecount'] = $this->devicetoken_model->getDeviceTokensCount($lang);
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    public $pemImportPassword = "Cwa9008515";
    public function sendnotification($lang=0) {
    	//Post data Recieved
	    $postDataJson = file_get_contents('php://input') ;
	    //Decoded post json into Php Array
	    $decodedJsonArray=json_decode($postDataJson,true);
	    
	    //Get Message To be posted from JSON posted
	    
	    $msg = $_POST['message'];
	    
	    $tokens = $this->devicetoken_model->getDeviceTokens($lang);
	    //FetchDeviceId's For iOS
	    $log = "Sending Notification : \n";
	    foreach($tokens as $token):
            //echo $token['devicetype'].' '.$token['devicetoken'].'<br/>';
            if (strcasecmp($token['devicetype'], "android") == 0) {
                $this->sendPushNotificationToGCMSever($token['devicetoken'], $msg);
            } else if (strcasecmp($token['devicetype'], "iOS") == 0) {
                //echo $token['devicetoken'].'<br/>';
                $log = $log.$this->apns($msg, __DIR__.'/apns-dev.pem', $token['devicetoken'], $this->pemImportPassword);
            }
	    endforeach;
        //$this->sendPushNotificationToGCMSever($token11, $msg);
        //echo $log;
	    $data['data']['language'] = $lang;
	    if ($lang == 0)
            redirect(base_url().'admin/notifications');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/notifications');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/notifications');
    }

    public function sendPushNotificationToGCMSever($token, $message){
        $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
        
        $fields = array(
            'to' => $token,
            'notification' => array('title' => 'Montreal Underground City', 'body' => $message),
            'data' => array('message' => $message)
        );
 
        $headers = array(
            'Authorization:key=' . "AAAA49ylpjI:APA91bFOeugIHlPj31LKMvI_2pIxZdLvRCVdWpIvjdsnMYHFIhvkgPchyeOrwMpnlOQhVOqDX14Z5DlCsUQpFTBm4Kooo5LsDnrrFWTw4GOqItwHAYxUL6CmA2RC5EkKr9HZvDe67K3p",
            'Content-Type:application/json'
        );      
        $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm); 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    
        $result = curl_exec($ch);
       
        curl_close($ch);

        return $result;
    }

    function apns($message, $keypath, $devID, $keypassword){
    	$log = "";
        $log = $log."\n in apns ". $devID;
        
        $ctx = stream_context_create();
        stream_context_set_option($ctx, 'ssl', 'local_cert', $keypath);
        stream_context_set_option($ctx, 'ssl', 'passphrase', $keypassword);
        // Open a connection to the APNS server
        $production = false;
        if ($production) {
            $gateway = 'ssl://gateway.push.apple.com:2195';
        } else {
            $gateway = 'ssl://gateway.sandbox.push.apple.com:2195';
        }
  
        $fp = stream_socket_client(
                                   $gateway, $err,
                                   $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
        if (!$fp)
            exit("Failed to connect: $err $errstr" . PHP_EOL);
        $log = $log."\n Connected to APNS" . PHP_EOL;
        // Create the payload body
        $body['aps'] = array(
                             'alert' => $message,
                             'sound' => 'default'
                             );
        // Encode the payload as JSON
        $payload = json_encode($body);
        // Build the binary notification
        $msg = chr(0) . pack('n', 32) . pack('H*',$devID) . pack('n', strlen($payload)) . $payload;
        // Send it to the server
        $result = fwrite($fp, $msg, strlen($msg));
        
        if (!$result)
            $log = $log."\n Message not delivered" . PHP_EOL;
        else
            $log = $log."\n Message successfully delivered" . PHP_EOL;
        
        // Close the connection to the server
        fclose($fp);

        return $log;
    }
}
