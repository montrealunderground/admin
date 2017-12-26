<?php

class Stores extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('stores_model');

        if( !$this->session->userdata('is_logged_in') ) {
            redirect('admin/login');
        }
    }

    /**
     * This is the controller method that drives the application.
     * After a user logs in, show_main() is called and the main
     * application screen is set up.
     */
    function index($lang, $storetype="restaurants") {
        $this->load->model('shoppingmalls_model');
        $this->load->model('metros_model');
        
        $stores = $this->stores_model->getStores($lang, $this->getTypenamefromType($lang, $storetype));
        for ($i=0; $i<count($stores); $i++) {
            $stores[$i]['mallname'] = $this->shoppingmalls_model->getShoppingmallById($lang, $stores[$i]['mallid'])['name'];
            $stores[$i]['metroname'] = $this->metros_model->getMetroById($lang, $stores[$i]['metroid'])['name'];
        }
        $data['data']['stores'] = $stores;
        $data['main_content'] = 'admin/stores/list';
        $data['activatedMenu'] = $storetype;
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

    function updateStore($lang=0, $storetype="restaurants") {
        $id = $this->uri->segment(3);

        $store = $this->stores_model->getStoreById($lang, $id);

        $this->load->model('shoppingmalls_model');
        $this->load->model('metros_model');

        if (isset($store['mallid']))
            $store['mallname'] = $this->shoppingmalls_model->getShoppingmallById($lang, $store['mallid'])['name'];
        if (isset($store['metroid']))
            $store['metroname'] = $this->metros_model->getMetroById($lang, $store['metroid'])['name'];

        $data['data']['store'] = $store;
        if (strcmp($id, 'new') == 0)
            $data['data']['store']['id'] = -1;
        
        $data['data']['malls'] = $this->shoppingmalls_model->getMallnamelist($lang);
        $data['data']['metros'] = $this->metros_model->getMetronamelist($lang);

        $data['main_content'] = 'admin/stores/edit';
        $data['activatedMenu'] = $storetype;
        $data['data']['language'] = $lang;
        $this->load->view('includes/template', $data);
    }

// function random_string($length) {
//     $key = '';
//     $keys = array_merge(range(0, 9), range('a', 'z'));

//     for ($i = 0; $i < $length; $i++) {
//         $key .= $keys[array_rand($keys)];
//     }

//     return $key;
// }

    function storedatasubmit($lang=0, $storetype="restaurants") {
        $id = $_POST['id'];

        $this->load->library('upload');

//upload cover photo
        if ($id >= 0 && strlen(str_replace(" ", "", $_POST['coverphoto_filename'])) != 0) 
            $coverphoto_filename = $_POST['coverphoto_filename'];
        else
            $coverphoto_filename = $this->random_string(30);
        $config['upload_path'] = './assets/uploaded/stores/coverphoto/';
        $config['file_name'] = $coverphoto_filename;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size']     = '10000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';
        
        $this->upload->initialize($config);

        $error1 = null;
        if ( ! $this->upload->do_upload('coverphoto_imagename')) {
            $error1 = array('error' => $this->upload->display_errors());
        } else {
            $data['coverphoto_filename'] = $this->upload->data()['file_name'];
        }

//upload logo
        if ($id >= 0 && strlen(str_replace(" ", "", $_POST['imagename'])) != 0)
            $imagename = $_POST['imagename'];
        else
            $imagename = $this->random_string(32);

        $config['upload_path'] = './assets/uploaded/stores/';
        $config['file_name'] = $imagename;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size']     = '10000';
        $config['max_width'] = '512';
        $config['max_height'] = '512';
        
        $this->upload->initialize($config);

        $error = null;
        if ( ! $this->upload->do_upload('storeimagefile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data['imagename'] = $this->upload->data()['file_name'];
        }

//upload datas
        $mallname = $_POST['mallname'];
        $metroname = $_POST['metroname'];

        $this->load->model('shoppingmalls_model');
        $this->load->model('metros_model');

        $data['mallid'] = $this->shoppingmalls_model->getIdByname($lang, $mallname);
        $data['metroid'] = $this->metros_model->getIdByname($lang, $metroname);

        $data['name'] = $_POST['name'];

        $data['type'] = $this->getTypenamefromType(0, $storetype);
        $data['type_fr'] = $this->getTypenamefromType(1, $storetype);
        $data['type_cn'] = $this->getTypenamefromType(2, $storetype);

        $data['featured'] = $_POST['featured'];
        $data['aboutus'] = $_POST['aboutus'];
        $data['contact'] = $_POST['contact'];
        $data['facebook'] = $_POST['facebook'];
        $data['link'] = $_POST['link'];
        if ($id >= 0) {
            $data['id'] = $id;
            $this->stores_model->updateStore($lang, $data);
            $this->swiftype_updateStore($data);
        } else {
            $data['id'] = $this->stores_model->addStore($lang, $data);
            $this->swiftype_createStore($data);
        }

        //if ($error == null) {
        if ($lang == 0) {
            redirect(base_url().'admin/'.$storetype);
        } else if ($lang == 1) {
            redirect(base_url().'admin_fr/'.$storetype);
        } else if ($lang == 2) {
            redirect(base_url().'admin_cn/'.$storetype);
        }
    }
    function getTypenamefromType($lang, $storetype) {
        $types = array('restaurants', 'boutiques', 'beautyhealths', 'attractions');
        $typename_en = array('Restaurant', 'Boutique', 'Beauty & Health', 'Attraction');
        $typename_fr = array('Restaurant', 'Boutique', 'Beauté et santé', 'Attraction');
        $typename_cn = array('饭店', '精品店', '美容院', '旅游景点');

        for ($i=0; $i<count($types); $i++) {
            if (strcasecmp($storetype, $types[$i]) == 0) {
                if ($lang == 0)
                    return $typename_en[$i];
                else if ($lang == 1)
                    return $typename_fr[$i];
                else if ($lang == 2)
                    return $typename_cn[$i];
            }
        }
    }
    function deletestore($lang=0, $storetype="restaurants", $id) {
        $id = $this->uri->segment(4);
        $filename = $this->stores_model->deleteStore($lang, $id);
        if ($filename != null) {
            unlink('./assets/uploaded/stores/'.$filename);
        }
        $this->swiftype_deleteStore($id);
        if ($lang == 0)
            redirect(base_url().'admin/'.$storetype);
        else if ($lang == 1)
            redirect(base_url().'admin_fr/'.$storetype);
        else if ($lang == 2)
            redirect(base_url().'admin_cn/'.$storetype);
    }


//Swifttype sync part
    public $swiftype_baseurl = 'https://api.swiftype.com/api/v1/engines/montreal-souterrain/document_types/stores';
    public $swiftype_auth_token = '_gv7RtZF4NzJxvtn11by';

    function swiftype_sync($lang=0)
    {
        $this->swiftype_deleteStoreDocumentType();
        $this->swiftype_createStoreDocumentType();
        $this->swiftype_syncDatasToSwiftype();

        if ($lang == 0)
            redirect(base_url().'admin/shopping_malls');
        else if ($lang == 1)
            redirect(base_url().'admin_fr/shopping_malls');
        else if ($lang == 2)
            redirect(base_url().'admin_cn/shopping_malls');
    }

    function swiftype_createStoreDocumentType() {
        $url = 'https://api.swiftype.com/api/v1/engines/montreal-souterrain/document_types.json';
        $method = 'POST';
        $postdata = array('auth_token' => $this->swiftype_auth_token, 'document_type' => array('name' => 'stores'));

        $res = $this->swiftype_sendSwiftypeAPIRequest($url, $method, json_encode($postdata));
    }

    function swiftype_deleteStoreDocumentType() {
        $url = $this->swiftype_baseurl."?auth_token=".$this->swiftype_auth_token;
        $method = 'DELETE';
        $postdata = "";

        $res = $this->swiftype_sendSwiftypeAPIRequest($url, $method, json_encode($postdata));
    }  

    function swiftype_syncDatasToSwiftype() {
        $this->load->model('shoppingmalls_model');
        $this->load->model('metros_model');

        $type = isset($_POST['type']) ? $_POST['type'] : null;
        $mall = isset($_POST['mallid']) ? $_POST['mallid'] : null;
        $metro = isset($_POST['metroid']) ? $_POST['metroid'] : null;

        $stores = $this->stores_model->getStores(3, $type, $mall, $metro);
        $documentdata = array();
        for ($i=0; $i<count($stores); $i++) {
          $mall = $this->shoppingmalls_model->getShoppingmallById(3, $stores[$i]['mallid']);
          $stores[$i]['mallname'] = $mall['name'];
          $stores[$i]['mallname_fr'] = $mall['name_fr'];
          $stores[$i]['mallname_cn'] = $mall['name_cn'];

          $metro = $this->metros_model->getMetroById(3, $stores[$i]['metroid']);
          $stores[$i]['metroname'] = $metro['name'];
          $stores[$i]['metroname_fr'] = $metro['name_fr'];
          $stores[$i]['metroname_cn'] = $metro['name_cn'];

          $stores[$i]['logourl'] = $this->config->item('download_prefix_store').$stores[$i]['imagename'];
          $stores[$i]['coverphotourl'] = $this->config->item('download_prefix_store_coverphoto').$stores[$i]['coverphoto_filename'];

          unset($stores[$i]['mallid']);
          unset($stores[$i]['metroid']);
          unset($stores[$i]['imagename']);
          unset($stores[$i]['coverphoto_filename']);

          array_push($documentdata, array("external_id" => $stores[$i]['id'], 'fields' => $this->swiftype_getFieldsFromStore($stores[$i])));
        }
        
        $url = $this->swiftype_baseurl.'/documents/bulk_create';
        $method = 'POST';
        $postdata = array("auth_token" => $this->swiftype_auth_token, "documents" => $documentdata);
        $res = $this->swiftype_sendSwiftypeAPIRequest($url, $method, json_encode($postdata));
    }

    function swiftype_getFieldsFromStore($store) {
        $fields = array();
        array_push($fields, array('name' => 'name', 'value' => $store['name'], 'type' => 'string'));
        array_push($fields, array('name' => 'name_fr', 'value' => $store['name_fr'], 'type' => 'string'));
        array_push($fields, array('name' => 'name_cn', 'value' => $store['name_cn'], 'type' => 'string'));
        array_push($fields, array('name' => 'type_en', 'value' => $store['type'], 'type' => 'string'));
        array_push($fields, array('name' => 'type_fr', 'value' => $store['type_fr'], 'type' => 'string'));
        array_push($fields, array('name' => 'type_cn', 'value' => $store['type_cn'], 'type' => 'string'));
        array_push($fields, array('name' => 'mallname_en', 'value' => $store['mallname'], 'type' => 'string'));
        array_push($fields, array('name' => 'mallname_fr', 'value' => $store['mallname_fr'], 'type' => 'string'));
        array_push($fields, array('name' => 'mallname_cn', 'value' => $store['mallname_cn'], 'type' => 'string'));
        array_push($fields, array('name' => 'metroname_en', 'value' => $store['metroname'], 'type' => 'string'));
        array_push($fields, array('name' => 'metroname_fr', 'value' => $store['metroname_fr'], 'type' => 'string'));
        array_push($fields, array('name' => 'metroname_cn', 'value' => $store['metroname_cn'], 'type' => 'string'));
        array_push($fields, array('name' => 'featured', 'value' => $store['featured'], 'type' => 'string'));
        array_push($fields, array('name' => 'url', 'value' => ' ', 'type' => 'string'));
        array_push($fields, array('name' => 'link', 'value' => $store['link'], 'type' => 'string'));
        array_push($fields, array('name' => 'logourl', 'value' => $store['logourl'], 'type' => 'string'));
        array_push($fields, array('name' => 'coverphotourl', 'value' => $store['coverphotourl'], 'type' => 'string'));
        array_push($fields, array('name' => 'aboutus', 'value' => $store['aboutus'], 'type' => 'string'));

        return $fields;
    }

    function swiftype_createStore($store) {
        if ($store == null) return;

        $url = $this->swiftype_baseurl.'/documents.json';
        $method = 'POST';
        $postdata = array("auth_token" => $this->swiftype_auth_token, "document" => array('external_id' => $store["id"], 'fields' => $this->swiftype_getFieldsFromStore($store)));

        $res = $this->swiftype_sendSwiftypeAPIRequest($url, $method, json_encode($postdata));
    }

    function swiftype_updateStore($store){
        if ($store == null) return;
        $temp = $store;
        unset($temp['id']);
        //unset($temp['id']);

        $url = $this->swiftype_baseurl.'/documents/'.$store['id'].'/update_fields';
        $method = 'PUT';
        $postdata = array("auth_token" => $this->swiftype_auth_token, "fields" => $temp);

        $res = $this->swiftype_sendSwiftypeAPIRequest($url, $method, json_encode($postdata)); 
    }

    function swiftype_deleteStore($storeid) {
        $url = $this->swiftype_baseurl.'/documents/'.$storeid.'?auth_token='.$this->swiftype_auth_token;
        $method = 'DELETE';
        $postdata = "";

        $res = $this->swiftype_sendSwiftypeAPIRequest($url, $method, json_encode($postdata));
    }

    function swiftype_sendSwiftypeAPIRequest($url, $method, $data_string) {
        $context = stream_context_create(array(
        'http' => array(
            'method' => $method,
            'header' => "Content-Type: application/json\r\n",
            'content' => $data_string
        )
        ));

        // Send the request
        try {
          $response = file_get_contents($url, FALSE, $context);
        } catch(Exception $e) {
          return 'Caught Exception'.$e->getMessage();
        }

        // Check for errors
        if($response == FALSE){
          return 'Server is not responding';
        } else {
          return $response;
        }
    }
}
