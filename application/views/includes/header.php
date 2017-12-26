<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Montreal Underground Admin</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url(); ?>assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/build/css/maps/mycustom.css" rel="stylesheet">    

    <link href="<?php echo base_url(); ?>assets/vendors/jasny_bootstrap/css/jasny-bootstrap.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114x114-precomposed.png">
  </head>

<?php 
function getURLPrefix($lang) {
  switch($lang) {
    case 0:
      return base_url().'admin/';
    case 1:
      return base_url().'admin_fr/';
    case 2:
      return base_url().'admin_cn/';
  }
}
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php getURLPrefix(0).'shopping_malls'; ?>" class="site_title">
              <span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/img/user_en.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Montreal Underground</span>
                <h2>Vortexapp.Inc</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>     <!--general-->
                <ul class="nav side-menu">                  
                  <?php 
                  if (isset($shopping_malls) && $shopping_malls) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'shopping_malls"> Shopping Malls </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'shopping_malls"> Shopping Malls </a></li>';
                  ?>
                  
                  <?php 
                  if (isset($restaurants) && $restaurants) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'restaurants"> Restaurants </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'restaurants"> Restaurants </a></li>';
                  ?>

                  <?php 
                  if (isset($boutiques) && $boutiques) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'boutiques"> Boutiques </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'boutiques"> Boutiques </a></li>';
                  ?>

                  <?php 
                  if (isset($beautyhealths) && $beautyhealths) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'beautyhealths"> Beauty & Health </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'beautyhealths"> Beauty & Health </a></li>';
                  ?>

                  <?php 
                  if (isset($attractions) && $attractions) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'attractions"> Attractions </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'attractions"> Attractions </a></li>';
                  ?>

                  <?php 
                  if (isset($servicesjobs) && $servicesjobs) 
                    echo '<li class="active active-sm"><a href="'.base_url().'servicesjobs"> Services & Jobs </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'servicesjobs"> Services & Jobs </a></li>';
                  ?>

                  <?php 
                  if (isset($events) && $events) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'events"> Events </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'events"> Events </a></li>';
                  ?>

                  <?php 
                  if (isset($promotions) && $promotions) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'promotions"> Promotions </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'promotions"> Promotions </a></li>';
                  ?>

                  <?php 
                  if (isset($undercoinstore) && $undercoinstore) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'undercoinstore"> UnderCoin Store </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'undercoinstore"> UnderCoin Store </a></li>';
                  ?>

                  <?php 
                  if (isset($metros) && $metros) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'metros"> Metros </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'metros"> Metros </a></li>';
                  ?>

                  <?php 
                  if (isset($bannerimages) && $bannerimages) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'bannerimages"> Banner Images </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'bannerimages"> Banner Images </a></li>';
                  ?>

                  <?php 
                  if (isset($notifications) && $notifications) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'notifications"> Notifications </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'notifications"> Notifications </a></li>';
                  ?>

                  <?php 
                  if (isset($interstitialads) && $interstitialads) 
                    echo '<li class="active active-sm"><a href="'.getURLPrefix($language).'interstitialads"> Interstitial Ads </a></li>'; 
                  else 
                    echo '<li><a href="'.getURLPrefix($language).'interstitialads"> Interstitial Ads </a></li>';
                  ?>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/img/img.jpg" alt="">William
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url(); ?>admin/sync"> Sync from Swiftype </a></li>
                    <!-- <li><a onclick="onSync()"> Sync from Swiftype </a></li> -->
                    <li><a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out </a></li>
                  </ul>
                </li>
                <li>
                  <h4></h4>
                  <div id="language" class="btn-group" data-toggle="buttons">
                    <label id="engbtn" class="btn btn-default <?php if($language == 0) echo 'active'; ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" onclick="onEnglishClicked()">
                      <input type="radio" name="lang" value="0"> English
                    </label>
                    <label id="frebtn" class="btn btn-default <?php if($language == 1) echo 'active'; ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" onclick="onFrenchClicked()">
                      <input type="radio" name="lang" value="1"> French
                    </label>
                    <label id="chnbtn" class="btn btn-default <?php if($language == 2) echo 'active'; ?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" onclick="onChineseClicked()">
                      <input type="radio" name="lang" value="2"> Chinese
                    </label>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
<!-- 
        <div id="prealoder" class="preloader">
      <img src="<?php echo base_url(); ?>assets/img/spinner.svg" alt="Loading..." class="preloader__spinner">
    </div> -->
        <!-- /top navigation -->

        <script>

          function onEnglishClicked() {
            var newurl = window.location.href
            if (!newurl.includes("/admin/")) {
              newurl = newurl.replace("/admin_fr/", "/admin/")
              newurl = newurl.replace("/admin_cn/", "/admin/")
              location.href = newurl
            }
          }

          function onFrenchClicked() {
            var newurl = window.location.href
            console.log(newurl)
            if (!newurl.includes("/admin_fr/")) {
              newurl = newurl.replace("/admin/", "/admin_fr/")
              newurl = newurl.replace("/admin_cn/", "/admin_fr/")
              location.href = newurl
            }
          }

          function onChineseClicked() {
            var newurl = window.location.href
            if (!newurl.includes("/admin_cn/")) {
              newurl = newurl.replace("/admin/", "/admin_cn/")
              newurl = newurl.replace("/admin_fr/", "/admin_cn/")
              location.href = newurl
            }
          }
        </script>