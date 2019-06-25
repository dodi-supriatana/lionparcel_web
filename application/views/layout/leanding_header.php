<!DOCTYPE html>
<title>LionParcel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/leandingpage/css/style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/leandingpage/css/main-color.css') ?>" id="colors">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link rel="shortcut icon" href="<?php echo base_url('assets/leandingpage/images/logonoupper.png') ?>" type="image/x-icon">
</head>

<body class="transparent-header">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header Container ================================================== -->
		<header id="header-container">

			<!-- Header -->
			<div id="header" class="not-sticky">
				<div class="container">

					<!-- Left Side Content -->
					<div class="left-side">

						<!-- Logo -->
						<div id="logo">
							<a href="<?php echo base_url('') ?>"><img src="<?php echo base_url('assets/leandingpage/images/logopanjangputih.png') ?>" data-sticky-logo="<?php echo base_url('assets/leandingpage/images/logopanjangmerah.png') ?>" alt=""></a>
						</div>

						<!-- Mobile Navigation -->
						<div class="mmenu-trigger">
							<button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>

						<!-- Main Navigation -->
						<nav id="navigation" class="style-1">
							<ul id="responsive">

								<li><a href="<?php echo base_url('') ?>"><b>Tarif</b></a></li>
								<li><a href="<?php echo base_url('leanding/tracking') ?>"><b>Tracking</b></a></li>
								<li><a href="<?php echo base_url('leanding/find') ?>"><b>Find Agen</b></a></li>
								<!-- <li><a href="<?php echo base_url('leanding/promo') ?>"><b>Promo</b></a></li> -->
								<li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><b>Agen</b></a></li>

							</ul>
						</nav>
						<div class="clearfix"></div>
						<!-- Main Navigation / End -->

					</div>
					<!-- Left Side Content / End -->
					<!-- Sign In Popup -->
					<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

						<div class="small-dialog-header">
							<h3>Sign In</h3>
						</div>

						<!--Tabs -->
						<div class="sign-in-form style-1">

							<ul class="tabs-nav">
								<li class=""><a href="#tab1">Log In</a></li>
								<li><a href="#tab2">Register</a></li>
							</ul>

							<div class="tabs-container alt">

								<!-- Login -->
								<div class="tab-content" id="tab1" style="display: none;">
									<form method="post" class="login">

										<p class="form-row form-row-wide">
											<label for="username">Username:
												<i class="im im-icon-Male"></i>
												<input type="text" class="input-text" name="username" id="username" value="" />
											</label>
										</p>

										<p class="form-row form-row-wide">
											<label for="password">Password:
												<i class="im im-icon-Lock-2"></i>
												<input class="input-text" type="password" name="password" id="password" />
											</label>
											<span class="lost_password">
												<a href="#">Lost Your Password?</a>
											</span>
										</p>

										<div class="form-row">
											<input type="submit" class="button border margin-top-5" name="login" value="Login" />
											<div class="checkboxes margin-top-10">
												<input id="remember-me" type="checkbox" name="check">
												<label for="remember-me">Remember Me</label>
											</div>
										</div>

									</form>
								</div>

								<!-- Register -->
								<div class="tab-content" id="tab2" style="display: none;">

									<form method="post" class="register">

										<p class="form-row form-row-wide">
											<label for="username2">Username:
												<i class="im im-icon-Male"></i>
												<input type="text" class="input-text" name="username" id="username2" value="" />
											</label>
										</p>

										<p class="form-row form-row-wide">
											<label for="email2">Email Address:
												<i class="im im-icon-Mail"></i>
												<input type="text" class="input-text" name="email" id="email2" value="" />
											</label>
										</p>

										<p class="form-row form-row-wide">
											<label for="password1">Password:
												<i class="im im-icon-Lock-2"></i>
												<input class="input-text" type="password" name="password1" id="password1" />
											</label>
										</p>

										<p class="form-row form-row-wide">
											<label for="password2">Repeat Password:
												<i class="im im-icon-Lock-2"></i>
												<input class="input-text" type="password" name="password2" id="password2" />
											</label>
										</p>

										<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />

									</form>
								</div>

							</div>
						</div>
					</div>
					<!-- Sign In Popup / End -->

				</div>
			</div>
			<!-- Header / End -->



		</header>
		<div class="clearfix"></div>
		<!-- Header Container / End -->