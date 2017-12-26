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
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form ">
          <section class="login_content">
          	<?php echo form_open('admin/create_member'); ?>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="required" name="username"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="required" name="email"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="required" name="password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="signup" value="signup">Sign Up</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="admin/login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <div>
                  <!-- <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1> -->
                  <p>©2017 All Rights Reserved.</p>
                  <p><a href="http://canadaworldapps.com/">Vortexapp.Inc</a> Privacy and Terms</p>
                </div>
              </div>
            <?php echo form_close(); ?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
