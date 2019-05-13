<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title> STP BAST ONLINE</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-production-plugins.min.css')?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-production.min.css')?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-skins.min.css')?>">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-rtl.min.css')?>"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/demo.min.css')?>">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon/favicon.ico')?>" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url('assets/img/favicon/favicon.ico')?>" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">


	</head>
	
	<body class="animated fadeInDown">

		<header id="header" style="background: #ffffff!important;">

			<div id="logo-group">
				<span id="logo"> <img src="<?php echo base_url('assets/img/login/spt_logo1.png')?>" style="margin-top: -55px;" alt="SmartAdmin"> </span>
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an help ?</span> <a href="register.html" class="btn btn-danger">Click Me ?</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container" style="background: #f4f4f4;margin-left: 0px;margin-right: 0px;width: 100%;top: -20px;">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big"><b> BAST ONLINE</b></h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">Best application to get information and monitoring your BEST project, easy, user friendly, accurate and up-to-date.</h4>
								<div class="login-app-icons">
									<!-- <a href="https://www.stptower.com/" target="_blank" class="btn btn-danger btn-sm">STP Official Website</a> -->
									<!-- <a href="http://www.cudocomm.com/" target="_blank" class="btn btn-danger btn-sm">CUDO Official Website</a> -->
								</div>
							</div>
							
							<img src="<?php echo base_url('assets/img/demo/iphoneview.png')?>" class="pull-right display-image" alt="" style="width:210px">

						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">STP OFFICE</h5>
								<p>
								Perkantoran Permata Senayan Blok C1 Jl. Tentara Pelajar Jakarta 12210 24hours help desk 0-800-140-1380 (toll free)
							</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="display: none;">
								<h5 class="about-heading">Not just your average template!</h5>
								<p>
									Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
								</p>
							</div>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
							<form action="<?php echo base_url('login/login_validation') ?>" id="login-form" class="smart-form client-form" method="POST">
								<header>
									Sign In
								</header>

								<fieldset>
									
									<section>
										<label class="label">E-mail</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="email" name="email">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
									</section>

									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password">
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
										<div class="note">
											<a href="forgotpassword.html">Forgot password?</a>
										</div>
									</section>

									<section>
										<label class="checkbox">
											<input type="checkbox" name="remember" checked="">
											<i></i>Stay signed in</label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										Sign in
									</button>
								</footer>
							</form>

						</div>
						
                        <h5 class="text-center"> - Powered By -</h5>    
															
							<ul class="list-inline text-center">
								<li>
                                    <img src="<?php echo base_url('assets/img/login/cudo.png') ?>" style="width: 40px;">
                                   
								</li>
								<!-- <li>
									<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
								</li> -->
								<!-- <li>
									<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                                </li> -->
                                
                            </ul>
                           
						
					</div>
				</div>
			</div>

		</div>

		<!--================================================== -->	

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script src="<?php echo base_url('assets/js/plugin/pace/pace.min.js')?>"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-3.2.1.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');} </script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="<?php echo base_url('assets/js/app.config.js')?>"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="<?php echo base_url('assets/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')?>"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>

		<!-- JQUERY VALIDATE -->
		<script src="<?php echo base_url('assets/js/plugin/jquery-validate/jquery.validate.min.js')?>"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src="<?php echo base_url('assets/js/plugin/masked-input/jquery.maskedinput.min.js')?>"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="<?php echo base_url('assets/js/app.min.js')?>"></script>

		<script>
			runAllForms();

			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
		</script>

	</body>
</html>