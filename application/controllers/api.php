<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller
{
	function __construct()
    {
        parent::__construct();

    }

    function index($lang=0)
    {
        echo "Invalid Access!";
    }


    function getGlobalValues($lang=0) {
        $this->load->model('globals_model');

        $result['socialsharingbonus'] = $this->globals_model->getValueForKey('socialsharingbonus');
        $result['advideobonus'] = $this->globals_model->getValueForKey('advideobonus');
        $result['result'] = 'success';
        echo json_encode($result);
    }
    function getUCItems($lang=0) {
        $this->load->model('undercoinstore_model');
        $ucitems = $this->undercoinstore_model->getUCItems($lang);

        $result['ucitems'] = $ucitems;
        $result['download_prefix_undercoinstore'] = $this->config->item('download_prefix_undercoinstore');
        $result['result'] = 'success';
        echo json_encode($result);
    }

    /*
     * Register User with Facebook & google account
     */
    function registerUser($lang=0)
    {
        $this->load->model('customers_model');

        $data = array();
        $data['name'] = $_POST['name'];
        $data['userid'] = $_POST['userid'];
        $data['token'] = $_POST['token'];
        $data['pictureUrl'] = $_POST['pictureUrl'];
        $data['isfb'] = $_POST['isfb'];

        $res = $this->customers_model->loginUser($data);

        if ($res) {
            $result['name'] = $res['name'];
            $result['userid'] = $res['userid'];
            $result['pictureUrl'] = $res['pictureUrl'];
            $result['undercoin'] = $res['undercoin'];
            $result['result'] = 'success';
        } else {
            $result['result'] = 'failure';
        }
        
        echo json_encode($result);
    }

    /*
     * After I viewed the Rewarded Video
     */
    function awardVideo($lang=0) {
        $this->load->model('customers_model');
        $this->load->model('globals_model');

        $userid = $_POST['userid'];
        $data = $this->customers_model->getUserData($userid);
        //$result['socialsharingbonus'] = $this->globals_model->getValueForKey('socialsharingbonus');
        try {
            $advideobonus = (int) $this->globals_model->getValueForKey('advideobonus');
            $undercoin = (int) $data['undercoin'];
            $undercoin = $undercoin + $advideobonus;
            $data['undercoin'] = (string) $undercoin;
            $this->customers_model->updateData($data);

            $result['undercoin'] = $data['undercoin'];
            $result['result'] = 'success';
        } catch (Exception $e) {
            $result['result'] = 'failure';
        }
        echo json_encode($result);
    }

    /*
     * After I shared the app
     */
    function sharedApplication($lang=0) {
        $this->load->model('customers_model');
        $this->load->model('globals_model');

        $userid = $_POST['userid'];
        $data = $this->customers_model->getUserData($userid);
        //$result['socialsharingbonus'] = $this->globals_model->getValueForKey('socialsharingbonus');
        try {
            $socialsharingbonus = (int) $this->globals_model->getValueForKey('socialsharingbonus');        
            $undercoin = (int) $data['undercoin'];
            $undercoin = $undercoin + $socialsharingbonus;
            $data['undercoin'] = (string) $undercoin;
            $this->customers_model->updateData($data);

            $result['undercoin'] = $data['undercoin'];
            $result['result'] = 'success';
        } catch (Exception $e) {
            $result['result'] = 'failure';
        }
        echo json_encode($result);
    }

    /*
     *
     */
    function purchaseItem($lang=0) {
        $this->load->model('customers_model');
        $this->load->model('undercoinstore_model');

        $userid = $_POST['userid'];
        $userdata = $this->customers_model->getUserData($userid);

        $ucitemid = $_POST['ucitemid'];
        $itemdata = $this->undercoinstore_model->getUCItemById($lang, $ucitemid);

        try {
            $price = (int) $itemdata['price'];
            $undercoin = (int) $userdata['undercoin'];

            if ($price > $undercoin) {
                $result['result'] = 'failure';
            } else {
                $undercoin = $undercoin - $price;
                $userdata['undercoin'] = (string) $undercoin;
                $this->customers_model->updateData($userdata);

                $result['undercoin'] = $userdata['undercoin'];
                $result['result'] = 'success';
            }
        } catch (Exception $e) {
            print_r($e);
            $result['result'] = 'failure';
        }
        echo json_encode($result);
    }

    /*
     * Get all of the shopping malls in the database
     * @return : Result : the result of the query -> Success/Failed
     * @return : bannerimages : List of shopping malls
     * @return : download_prefix_bannerimage : prefix of the path
     */ 
    function getBannerImages($lang=0) {
        $this->load->model('bannerimages_model');

        $result['bannerimages'] = $this->bannerimages_model->getBannerImages($lang);
        $result['download_prefix_bannerimage'] = $this->config->item('download_prefix_bannerimage');
        $result['result'] = 'success';
        echo json_encode($result);
    }

    /*
     * Get all of the Interstitial Ads in the database
     * @return : Result : the result of the query -> Success/Failed
     * @return : interstitialads : List of Interstitial Ads
     */ 
    function getInterstitialAdsState($lang=0) {
        $this->load->model('interstitialads_model');

        $result['interstitialads'] = $this->interstitialads_model->getInterstitialAds($lang);
        $result['result'] = 'success';
        echo json_encode($result);
    }

	/*
	 * Get all of the shopping malls in the database
	 * @return : Result : the result of the query -> Success/Failed
	 * @return : Shopping_malls : List of shopping malls
	 * @return : download_prefix_logo : prefix of the path
	 */
    function getShoppingMalls($lang=0) {
    	$this->load->model('shoppingmalls_model');
        $this->load->model('promotions_model');

    	$malls = $this->shoppingmalls_model->getShoppingmalls($lang);

        for ($i=0; $i<count($malls); $i++) {
            $promotions = $this->promotions_model->getPromotionsByMallId($lang, $malls[$i]['id']);
            $malls[$i]['promotions'] = $promotions;
        }

        $result['shopping_malls'] = $malls;
    	$result['download_prefix_logo'] = $this->config->item('download_prefix_logo');
		$result['download_prefix_coverphoto'] = $this->config->item('download_prefix_coverphoto');
        $result['download_prefix_promotion'] = $this->config->item('download_prefix_promotion');
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get the shopping mall with specified id
     * @return : Result : the result of the query -> Success/Failed
     * @return : shopping_mall : shopping mall data
     */
    function getShoppingMallById($lang=0) {
    	$this->load->model('shoppingmalls_model');

    	$id = isset($_POST['id']) ? $_POST['id'] : "";

    	$result['shopping_mall'] = $this->shoppingmalls_model->getShoppingmallById($lang, $id);
    	$result['download_prefix_logo'] = $this->config->item('download_prefix_logo');
    	$result['download_prefix_coverphoto'] = $this->config->item('download_prefix_coverphoto');
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get the stores in a specified shopping mall
     * @return : Result : the result of the query -> Success/Failed
     * @return : stores : list of the store
     */
    function getStores($lang=0) {
    	$this->load->model('stores_model');
        $this->load->model('shoppingmalls_model');
        $this->load->model('metros_model');

        $type = isset($_POST['type']) ? $_POST['type'] : null;
    	$mall = isset($_POST['mallid']) ? $_POST['mallid'] : null;
        $metro = isset($_POST['metroid']) ? $_POST['metroid'] : null;

    	$stores = $this->stores_model->getStores($lang, $type, $mall, $metro);
        for ($i=0; $i<count($stores); $i++) {
            $stores[$i]['mallname'] = $this->shoppingmalls_model->getShoppingmallById($lang, $stores[$i]['mallid'])['name'];
            $stores[$i]['metroname'] = $this->metros_model->getMetroById($lang, $stores[$i]['metroid'])['name'];
        }

        $result['stores'] = $stores;
	    $result['download_prefix_store'] = $this->config->item('download_prefix_store');
        $result['download_prefix_store_coverphoto'] = $this->config->item('download_prefix_store_coverphoto');
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get the store by Id
     * @return : Resullt : the result of the query -> Success/Failed
     * @return : store : the store with specified Id
     */
    function getStoreById($lang=0) {
    	$this->load->model('stores_model');

    	$id = isset($_POST['id']) ? $_POST['id'] : "";
    	//$id = 2;

    	$result['store'] = $this->stores_model->getStoreById($lang, $id);
        $result['download_prefix_store'] = $this->config->item('download_prefix_store');
        $result['download_prefix_store_coverphoto'] = $this->config->item('download_prefix_store_coverphoto');
    	$result['result'] = 'success';
    	echo json_encode($result);
    }
    /*
     * Get Metros List for Store
     */
    function getMetroListForStore($lang=0) {
        $this->load->model('metros_model');
        $result['metros'] = $this->metros_model->getMetros($lang);
        $result['result'] = 'success';
        echo json_encode($result);
    }

    /*
     * Get Jobs List
     */
    function getJobs($lang=0) {
    	$this->load->model('jobs_model');

    	$result['jobs'] = $this->jobs_model->getJobs($lang);
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get Parkings List
     */
    function getParkings($lang=0) {
    	$this->load->model('services_model');

    	$result['parkings'] = $this->services_model->getServices($lang, $this->getTypenamefromType($lang, "parking"));
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get Free Wi-fis List
     */
    function getFreeWifis($lang=0) {
    	$this->load->model('services_model');

    	$result['free_wifis'] = $this->services_model->getServices($lang, $this->getTypenamefromType($lang, "freewifi"));
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get Daily Lockers List
     */
    function getDailyLockers($lang=0) {
    	$this->load->model('services_model');

    	$result['dailylockers'] = $this->services_model->getServices($lang, $this->getTypenamefromType($lang, "dailylockers"));
    	$result['result'] = 'success';
    	echo json_encode($result);
    }

    function getTypenamefromType($lang, $servicetype) {
        $types = array('parking', 'freewifi', 'dailylockers');
        $typename_en = array('Parking', 'Free Wi-Fi', 'Daily Lockers');
        $typename_fr = array('Parking', 'Wi-Fi Gratuit', 'Coffrets Quotidiens');
        $typename_cn = array('停車處', '免费Wi-Fi', '每日储物柜');

        for ($i=0; $i<count($types); $i++) {
            if (strcasecmp($servicetype, $types[$i]) == 0) {
                if ($lang == 0)
                    return $typename_en[$i];
                else if ($lang == 1)
                    return $typename_fr[$i];
                else if ($lang == 2)
                    return $typename_cn[$i];
            }
        }
    }

    /*
     * Get Events list
     */
    function getEvents($lang=0) {
    	$this->load->model('events_model');

    	$result['events'] = $this->events_model->getEvents($lang);
        $result['download_prefix_event'] = $this->config->item('download_prefix_event');
       	$result['result'] = 'success';
    	echo json_encode($result);
    }

    /*
     * Get Promotions List
     */
    function getPromotions($lang=0) {
    	$this->load->model('promotions_model');

    	$result['promotions'] = $this->promotions_model->getPromotions($lang);
        $result['download_prefix_promotion'] = $this->config->item('download_prefix_promotion');
       	$result['result'] = 'success';
    	echo json_encode($result);
    }

    function registerDeviceToken($lang=0) {
        $this->load->model('devicetoken_model');
        $result = array();
        if (!isset($_POST['devicetoken']) || !isset($_POST['devicetype'])) {
            $result['result'] = 'failure';
        } else {
            $newtoken = $_POST['devicetoken'];
            $devicetype = $_POST['devicetype'];
            if ($newtoken != null && $devicetype != null) {
                $this->devicetoken_model->addDeviceToken($lang, $newtoken, $devicetype);
                $result['result'] = 'success';
            } else {
                $result['result'] = 'failure';
            }
        }
        echo json_encode($result);
    }
}
