<?php
if (isset($activatedMenu)) { 
	if (strcmp( $activatedMenu, "dashboard" ) == 0) $headerdata['dashboard'] = true;
	else if (strcmp( $activatedMenu, "shopping_malls" ) == 0) $headerdata['shopping_malls'] = true;
	else if (strcmp( $activatedMenu, "restaurants" ) == 0) {
		$headerdata['restaurants'] = true;	
		$data['storetype'] = "restaurants";
		$data['typename'] = "Restaruant";
	} else if (strcmp( $activatedMenu, "boutiques" ) == 0) {
		$headerdata['boutiques'] = true;
		$data['storetype'] = "boutiques";
		$data['typename'] = "Boutique";
	} else if (strcmp( $activatedMenu, "beautyhealths" ) == 0) {
		$headerdata['beautyhealths'] = true;
		$data['storetype'] = "beautyhealths";
		$data['typename'] = "Beauty & Health";
	} else if (strcmp( $activatedMenu, "attractions" ) == 0) {
		$headerdata['attractions'] = true;
		$data['storetype'] = "attractions";
		$data['typename'] = "Attraction";
	} else if (strcmp( $activatedMenu, "servicesjobs" ) == 0) {
		$headerdata['servicesjobs'] = true;
		if (isset($servicetype)) {
			$data['typename'] = $servicetype;
		}
	} else if (strcmp( $activatedMenu, "metros" ) == 0) $headerdata['metros'] = true;
	else if (strcmp( $activatedMenu, "events" ) == 0) $headerdata['events'] = true;
	else if (strcmp( $activatedMenu, "promotions" ) == 0) $headerdata['promotions'] = true;
	else if (strcmp( $activatedMenu, "undercoinstore" ) == 0) $headerdata['undercoinstore'] = true;
	else if (strcmp( $activatedMenu, "notifications" ) == 0) $headerdata['notifications'] = true;
	else if (strcmp( $activatedMenu, "bannerimages" ) == 0) $headerdata['bannerimages'] = true;
	else if (strcmp( $activatedMenu, "interstitialads" ) == 0) $headerdata['interstitialads'] = true;
} else {
	$headerdata['dashboard'] = true;
}
$headerdata['language'] = $data['language'];
?>


<?php $this->load->view('includes/header', $headerdata); ?>

<?php 
if (isset($data)) {
	$this->load->view($main_content, $data); 
}
else
	$this->load->view($main_content); 
?>

<?php $this->load->view('includes/footer'); ?>