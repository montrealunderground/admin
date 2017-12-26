<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/logout'] = 'user/logout';
$route['admin_fr/logout'] = 'user/logout';
$route['admin_cn/logout'] = 'user/logout';

$route['admin/sync'] = 'stores/swiftype_sync/0';
$route['admin_fr/sync'] = 'stores/swiftype_sync/1';
$route['admin_cn/sync'] = 'stores/swiftype_sync/2';

$route['admin/dashboard'] = 'shopping_malls/index/0';
$route['admin_fr/dashboard'] = 'shopping_malls/index/1';
$route['admin_cn/dashboard'] = 'shopping_malls/index2';

//Api Controller Routing
$route['api/(:any)'] = 'api/$1/0';
$route['api_fr/(:any)'] = 'api/$1/1';
$route['api_cn/(:any)'] = 'api/$1/2';

$route['admin/notifications'] = 'notifications/index/0';
$route['admin_fr/notifications'] = 'notifications/index/1';
$route['admin_cn/notifications'] = 'notifications/index/2';

$route['admin/notifications/sendnotification'] = 'notifications/sendnotification/0';
$route['admin_fr/notifications/sendnotification'] = 'notifications/sendnotification/1';
$route['admin_cn/notifications/sendnotification'] = 'notifications/sendnotification/2';

//Shopping Malls Controller Routing
$route['admin/shopping_malls'] = 'shopping_malls/index/0';
$route['admin/shopping_malls/shoppingmalldatasubmit'] = 'shopping_malls/shoppingmalldatasubmit/0';
$route['admin/shopping_malls/deleteShoppingmall/(:any)'] = 'shopping_malls/deleteShoppingmall/0/$1';
$route['admin/shopping_malls/(:any)'] = 'shopping_malls/updateShoppingMall/0/$1';

$route['admin_fr/shopping_malls'] = 'shopping_malls/index/1';
$route['admin_fr/shopping_malls/shoppingmalldatasubmit'] = 'shopping_malls/shoppingmalldatasubmit/1';
$route['admin_fr/shopping_malls/deleteShoppingmall/(:any)'] = 'shopping_malls/deleteShoppingmall/1/$1';
$route['admin_fr/shopping_malls/(:any)'] = 'shopping_malls/updateShoppingMall/1/$1';

$route['admin_cn/shopping_malls'] = 'shopping_malls/index/2';
$route['admin_cn/shopping_malls/shoppingmalldatasubmit'] = 'shopping_malls/shoppingmalldatasubmit/2';
$route['admin_cn/shopping_malls/deleteShoppingmall/(:any)'] = 'shopping_malls/deleteShoppingmall/2/$1';
$route['admin_cn/shopping_malls/(:any)'] = 'shopping_malls/updateShoppingMall/2/$1';

//Metros Controller Routing
$route['admin/metros'] = 'metros/index/0';
$route['admin/metros/metrodatasubmit'] = 'metros/metrodatasubmit/0';
$route['admin/metros/deleteMetro/(:any)'] = 'metros/deleteMetro/0/$1';
$route['admin/metros/(:any)'] = 'metros/updateMetro/0/$1';

$route['admin_fr/metros'] = 'metros/index/1';
$route['admin_fr/metros/metrodatasubmit'] = 'metros/metrodatasubmit/1';
$route['admin_fr/metros/deleteMetro/(:any)'] = 'metros/deleteMetro/1/$1';
$route['admin_fr/metros/(:any)'] = 'metros/updateMetro/1/$1';

$route['admin_cn/metros'] = 'metros/index/2';
$route['admin_cn/metros/metrodatasubmit'] = 'metros/metrodatasubmit/2';
$route['admin_cn/metros/deleteMetro/(:any)'] = 'metros/deleteMetro/2/$1';
$route['admin_cn/metros/(:any)'] = 'metros/updateMetro/2/$1';

//Restaurants Controller Routing
$route['admin/restaurants'] = 'stores/index/0/restaurants';
$route['admin/restaurants/storedatasubmit'] = 'stores/storedatasubmit/0/restaurants';
$route['admin/restaurants/deletestore/(:any)'] = 'stores/deletestore/0/restaurants/$1';
$route['admin/restaurants/(:any)'] = 'stores/updateStore/0/restaurants/$1';

$route['admin_fr/restaurants'] = 'stores/index/1/restaurants';
$route['admin_fr/restaurants/storedatasubmit'] = 'stores/storedatasubmit/1/restaurants';
$route['admin_fr/restaurants/deletestore/(:any)'] = 'stores/deletestore/1/restaurants/$1';
$route['admin_fr/restaurants/(:any)'] = 'stores/updateStore/1/restaurants/$1';

$route['admin_cn/restaurants'] = 'stores/index/2/restaurants';
$route['admin_cn/restaurants/storedatasubmit'] = 'stores/storedatasubmit/2/restaurants';
$route['admin_cn/restaurants/deletestore/(:any)'] = 'stores/deletestore/2/restaurants/$1';
$route['admin_cn/restaurants/(:any)'] = 'stores/updateStore/2/restaurants/$1';

//Boutiques Controller Routing
$route['admin/boutiques'] = 'stores/index/0/boutiques';
$route['admin/boutiques/storedatasubmit'] = 'stores/storedatasubmit/0/boutiques';
$route['admin/boutiques/deletestore/(:any)'] = 'stores/deletestore/0/boutiques/$1';
$route['admin/boutiques/(:any)'] = 'stores/updateStore/0/boutiques/$1';

$route['admin_fr/boutiques'] = 'stores/index/1/boutiques';
$route['admin_fr/boutiques/storedatasubmit'] = 'stores/storedatasubmit/1/boutiques';
$route['admin_fr/boutiques/deletestore/(:any)'] = 'stores/deletestore/1/boutiques/$1';
$route['admin_fr/boutiques/(:any)'] = 'stores/updateStore/1/boutiques/$1';

$route['admin_cn/boutiques'] = 'stores/index/2/boutiques';
$route['admin_cn/boutiques/storedatasubmit'] = 'stores/storedatasubmit/2/boutiques';
$route['admin_cn/boutiques/deletestore/(:any)'] = 'stores/deletestore/2/boutiques/$1';
$route['admin_cn/boutiques/(:any)'] = 'stores/updateStore/2/boutiques/$1';

//Beauty & Healths Controller Routing
$route['admin/beautyhealths'] = 'stores/index/0/beautyhealths';
$route['admin/beautyhealths/storedatasubmit'] = 'stores/storedatasubmit/0/beautyhealths';
$route['admin/beautyhealths/deletestore/(:any)'] = 'stores/deletestore/0/beautyhealths/$1';
$route['admin/beautyhealths/(:any)'] = 'stores/updateStore/0/beautyhealths/$1';

$route['admin_fr/beautyhealths'] = 'stores/index/1/beautyhealths';
$route['admin_fr/beautyhealths/storedatasubmit'] = 'stores/storedatasubmit/1/beautyhealths';
$route['admin_fr/beautyhealths/deletestore/(:any)'] = 'stores/deletestore/1/beautyhealths/$1';
$route['admin_fr/beautyhealths/(:any)'] = 'stores/updateStore/1/beautyhealths/$1';

$route['admin_cn/beautyhealths'] = 'stores/index/2/beautyhealths';
$route['admin_cn/beautyhealths/storedatasubmit'] = 'stores/storedatasubmit/2/beautyhealths';
$route['admin_cn/beautyhealths/deletestore/(:any)'] = 'stores/deletestore/2/beautyhealths/$1';
$route['admin_cn/beautyhealths/(:any)'] = 'stores/updateStore/2/beautyhealths/$1';

//Attractions Controller Routing
$route['admin/attractions'] = 'stores/index/0/attractions';
$route['admin/attractions/storedatasubmit'] = 'stores/storedatasubmit/0/attractions';
$route['admin/attractions/deletestore/(:any)'] = 'stores/deletestore/0/attractions/$1';
$route['admin/attractions/(:any)'] = 'stores/updateStore/0/attractions/$1';

$route['admin_fr/attractions'] = 'stores/index/1/attractions';
$route['admin_fr/attractions/storedatasubmit'] = 'stores/storedatasubmit/1/attractions';
$route['admin_fr/attractions/deletestore/(:any)'] = 'stores/deletestore/1/attractions/$1';
$route['admin_fr/attractions/(:any)'] = 'stores/updateStore/1/attractions/$1';

$route['admin_cn/attractions'] = 'stores/index/2/attractions';
$route['admin_cn/attractions/storedatasubmit'] = 'stores/storedatasubmit/2/attractions';
$route['admin_cn/attractions/deletestore/(:any)'] = 'stores/deletestore/2/attractions/$1';
$route['admin_cn/attractions/(:any)'] = 'stores/updateStore/2/attractions/$1';

//Services & Jobs Controller Routing
$route['admin/servicesjobs'] = 'servicesjobs/index/0';

$route['admin/jobs/jobdatasubmit'] = 'servicesjobs/jobdatasubmit/0';
$route['admin/jobs/deletejob/(:any)'] = 'servicesjobs/deleteJob/0/$1';
$route['admin/jobs/(:any)'] = 'servicesjobs/updateJob/0/$1';

$route['admin/parking/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/0/parking';
$route['admin/parking/deleteservice/(:any)'] = 'servicesjobs/deleteService/0/parking/$1';
$route['admin/parking/(:any)'] = 'servicesjobs/updateService/0/parking/$1';

$route['admin/freewifi/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/0/freewifi';
$route['admin/freewifi/deleteservice/(:any)'] = 'servicesjobs/deleteService/0/freewifi/$1';
$route['admin/freewifi/(:any)'] = 'servicesjobs/updateService/0/freewifi/$1';

$route['admin/dailylockers/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/0/dailylockers';
$route['admin/dailylockers/deleteservice/(:any)'] = 'servicesjobs/deleteService/0/dailylockers/$1';
$route['admin/dailylockers/(:any)'] = 'servicesjobs/updateService/0/dailylockers/$1';

//French
$route['admin_fr/servicesjobs'] = 'servicesjobs/index/1';

$route['admin_fr/jobs/jobdatasubmit'] = 'servicesjobs/jobdatasubmit/1';
$route['admin_fr/jobs/deletejob/(:any)'] = 'servicesjobs/deleteJob/1/$1';
$route['admin_fr/jobs/(:any)'] = 'servicesjobs/updateJob/1/$1';

$route['admin_fr/parking/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/1/parking';
$route['admin_fr/parking/deleteservice/(:any)'] = 'servicesjobs/deleteService/1/parking/$1';
$route['admin_fr/parking/(:any)'] = 'servicesjobs/updateService/1/parking/$1';

$route['admin_fr/freewifi/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/1/freewifi';
$route['admin_fr/freewifi/deleteservice/(:any)'] = 'servicesjobs/deleteService/1/freewifi/$1';
$route['admin_fr/freewifi/(:any)'] = 'servicesjobs/updateService/1/freewifi/$1';

$route['admin_fr/dailylockers/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/1/dailylockers';
$route['admin_fr/dailylockers/deleteservice/(:any)'] = 'servicesjobs/deleteService/1/dailylockers/$1';
$route['admin_fr/dailylockers/(:any)'] = 'servicesjobs/updateService/1/dailylockers/$1';

//Chinese
$route['admin_cn/servicesjobs'] = 'servicesjobs/index/2';

$route['admin_cn/jobs/jobdatasubmit'] = 'servicesjobs/jobdatasubmit/2';
$route['admin_cn/jobs/deletejob/(:any)'] = 'servicesjobs/deleteJob/2/$1';
$route['admin_cn/jobs/(:any)'] = 'servicesjobs/updateJob/2/$1';


$route['admin_cn/parking/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/2/parking';
$route['admin_cn/parking/deleteservice/(:any)'] = 'servicesjobs/deleteService/2/parking/$1';
$route['admin_cn/parking/(:any)'] = 'servicesjobs/updateService/2/parking/$1';

$route['admin_cn/freewifi/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/2/freewifi';
$route['admin_cn/freewifi/deleteservice/(:any)'] = 'servicesjobs/deleteService/2/freewifi/$1';
$route['admin_cn/freewifi/(:any)'] = 'servicesjobs/updateService/2/freewifi/$1';

$route['admin_cn/dailylockers/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/2/dailylockers';
$route['admin_cn/dailylockers/deleteservice/(:any)'] = 'servicesjobs/deleteService/2/dailylockers/$1';
$route['admin_cn/dailylockers/(:any)'] = 'servicesjobs/updateService/2/dailylockers/$1';

// $route['admin_fr/services/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/1';
// $route['admin_fr/services/deleteservice/(:any)'] = 'servicesjobs/deleteService/1/$1';
// $route['admin_fr/services/(:any)'] = 'servicesjobs/updateService/1/$1';

// $route['admin_cn/services/servicedatasubmit'] = 'servicesjobs/servicedatasubmit/2';
// $route['admin_cn/services/deleteservice/(:any)'] = 'servicesjobs/deleteService/2/$1';
// $route['admin_cn/services/(:any)'] = 'servicesjobs/updateService/2/$1';

//Events Controller Routing
$route['admin/events'] = 'events/index/0';
$route['admin/events/eventdatasubmit'] = 'events/eventdatasubmit/0';
$route['admin/events/deleteevent/(:any)'] = 'events/deleteevent/0/$1';
$route['admin/events/(:any)'] = 'events/updateEvent/0/$1';

$route['admin_fr/events'] = 'events/index/1';
$route['admin_fr/events/eventdatasubmit'] = 'events/eventdatasubmit/1';
$route['admin_fr/events/deleteevent/(:any)'] = 'events/deleteevent/1/$1';
$route['admin_fr/events/(:any)'] = 'events/updateEvent/1/$1';

$route['admin_cn/events'] = 'events/index/2';
$route['admin_cn/events/eventdatasubmit'] = 'events/eventdatasubmit/2';
$route['admin_cn/events/deleteevent/(:any)'] = 'events/deleteevent/2/$1';
$route['admin_cn/events/(:any)'] = 'events/updateEvent/2/$1';

//Promotions Controller Routing
$route['admin/promotions'] = 'promotions/index/0';
$route['admin/promotions/promotiondatasubmit'] = 'promotions/promotiondatasubmit/0';
$route['admin/promotions/deletepromotion/(:any)'] = 'promotions/deletepromotion/0/$1';
$route['admin/promotions/(:any)'] = 'promotions/updatePromotion/0/$1';

$route['admin_fr/promotions'] = 'promotions/index/1';
$route['admin_fr/promotions/promotiondatasubmit'] = 'promotions/promotiondatasubmit/1';
$route['admin_fr/promotions/deletepromotion/(:any)'] = 'promotions/deletepromotion/1/$1';
$route['admin_fr/promotions/(:any)'] = 'promotions/updatePromotion/1/$1';

$route['admin_cn/promotions'] = 'promotions/index/2';
$route['admin_cn/promotions/promotiondatasubmit'] = 'promotions/promotiondatasubmit/2';
$route['admin_cn/promotions/deletepromotion/(:any)'] = 'promotions/deletepromotion/2/$1';
$route['admin_cn/promotions/(:any)'] = 'promotions/updatePromotion/2/$1';

//UnderCoin Store Routing
$route['admin/undercoinstore'] = 'undercoinstore/index/0';
$route['admin/undercoinstore/ucitemdatasubmit'] = 'undercoinstore/ucitemdatasubmit/0';
$route['admin/undercoinstore/deleteucitem/(:any)'] = 'undercoinstore/deleteucitem/0/$1';
$route['admin/undercoinstore/(:any)'] = 'undercoinstore/updateucitem/0/$1';
$route['admin/undercoinstore/globaldatasubmit'] = 'undercoinstore/globaldatasubmit/0';

$route['admin_fr/undercoinstore'] = 'undercoinstore/index/1';
$route['admin_fr/undercoinstore/ucitemdatasubmit'] = 'undercoinstore/ucitemdatasubmit/1';
$route['admin_fr/undercoinstore/deleteucitem/(:any)'] = 'undercoinstore/deleteucitem/1/$1';
$route['admin_fr/undercoinstore/(:any)'] = 'undercoinstore/updateucitem/1/$1';
$route['admin_fr/undercoinstore/globaldatasubmit'] = 'undercoinstore/globaldatasubmit/1';

$route['admin_cn/undercoinstore'] = 'undercoinstore/index/2';
$route['admin_cn/undercoinstore/ucitemdatasubmit'] = 'undercoinstore/ucitemdatasubmit/2';
$route['admin_cn/undercoinstore/deleteucitem/(:any)'] = 'undercoinstore/deleteucitem/2/$1';
$route['admin_cn/undercoinstore/(:any)'] = 'undercoinstore/updateucitem/2/$1';
$route['admin_cn/undercoinstore/globaldatasubmit'] = 'undercoinstore/globaldatasubmit/2';


//Banner images Controller Routing
$route['admin/bannerimages'] = 'bannerimages/index/0';
$route['admin/bannerimages/bannerimagedatasubmit'] = 'bannerimages/bannerimagedatasubmit/0';
$route['admin/bannerimages/deletebannerimage/(:any)'] = 'bannerimages/deletebannerimage/0/$1';
$route['admin/bannerimages/(:any)'] = 'bannerimages/updateBannerImage/0/$1';

$route['admin_fr/bannerimages'] = 'bannerimages/index/1';
$route['admin_fr/bannerimages/bannerimagedatasubmit'] = 'bannerimages/bannerimagedatasubmit/1';
$route['admin_fr/bannerimages/deletebannerimage/(:any)'] = 'bannerimages/deletebannerimage/1/$1';
$route['admin_fr/bannerimages/(:any)'] = 'bannerimages/updateBannerImage/1/$1';

$route['admin_cn/bannerimages'] = 'bannerimages/index/2';
$route['admin_cn/bannerimages/bannerimagedatasubmit'] = 'bannerimages/bannerimagedatasubmit/2';
$route['admin_cn/bannerimages/deletebannerimage/(:any)'] = 'bannerimages/deletebannerimage/2/$1';
$route['admin_cn/bannerimages/(:any)'] = 'bannerimages/updateBannerImage/2/$1';

//Interstitial Ads Routing
$route['admin/interstitialads'] = 'interstitialads/index';
$route['admin/interstitialads/screendatasubmit'] = 'interstitialads/screendatasubmit';
$route['admin/interstitialads/deletescreen/(:any)'] = 'interstitialads/deletescreen/$1';
$route['admin/interstitialads/new'] = 'interstitialads/newscreen';

$route['admin_fr/interstitialads'] = 'interstitialads/index';
$route['admin_fr/interstitialads/screendatasubmit'] = 'interstitialads/screendatasubmit';
$route['admin_fr/interstitialads/deletescreen/(:any)'] = 'interstitialads/deletescreen/$1';
$route['admin_fr/interstitialads/new'] = 'interstitialads/newscreen';

$route['admin_cn/interstitialads'] = 'interstitialads/index';
$route['admin_cn/interstitialads/screendatasubmit'] = 'interstitialads/screendatasubmit';
$route['admin_cn/interstitialads/deletescreen/(:any)'] = 'interstitialads/deletescreen/$1';
$route['admin_cn/interstitialads/new'] = 'interstitialads/newscreen';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
