<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lionparcel IOT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/assets-login/fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="icon" href="<?php echo base_url('assets/icon/lion-parcel-logo.png') ?>" type="image/x-icon" />

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets-login/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body >
  <div id="bg">
  <img src="<?php echo base_url();?>assets/dist/img/Login.png" alt="">
</div>
<div class="login-box" style="float: right; margin-right: 100px;">
  <!-- /.login-logo -->
  <div class="col-xs-12">
      <center><p style="color:'#9d0004';padding-bottom:8%;"><font size="5px" color="#9d0004"><b>Welcome to Lionparcel</b></font><br>
        <font size="4px" color="#9d0004">Login to Continue the Agent Dashboard</font></p></center>

  <div class="login-box-bod">
     <div class="row">
        <!-- <div class="col-xs-5">
         <img src="<?php echo base_url();?>assets/dist/img/logoupperwhite.png" align="right" width="400%">
        </div> -->
        <!-- /.col -->
        <div class="col-md-12">
         <form action="<?php echo base_url('/login/login_validation');?>" method="post">

        <div class="form-group">
            <label for="your_name"><img src="<?php echo base_url();?>assets/icon/outline_email_white_18dp.png" width="25px"></label>
            <input autocomplete="off" type="email" name="username"  placeholder="Email Address" required style="background:transparent;border-color:#d7282d;font-size:16px;color:#d7282d;"/>
        </div>
         <div class="form-group">
            <label for="re-pass"><img src="<?php echo base_url();?>assets/icon/outline_https_white_18dp.png" width="25px"></label>
             <input autocomplete="off" type="password" name="password"  placeholder="Password" required style="background:transparent;border-color:#d7282d;font-size:16px;color:#d7282d;"/>
          </div>
          <br>
        <div class="row">
          <div class="col-xs-8">
            
          </div>
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-warning btn-block btn-flat" style=" background:transparent; border-color:#d7282d; border-width: 2px; color: #d7282d; font-size:18px; border-radius: 40px;">Sign In</button>
          </div>
          <center><p style="color:white;padding-bottom:8%;"><font size="3px"><b><?php //echo $error; ?></b></font><br>
          
          <!-- /.col -->
        </div>
    </form>
        </div>
        <!-- /.col -->
      </div>
    
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
