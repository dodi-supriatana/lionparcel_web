<!DOCTYPE html>
<title>LionParcel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/leandingpage/css/style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/leandingpage/css/main-color.css') ?>" id="colors">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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


								<li><a href="<?php echo base_url('') ?>"><strong>Tarif</strong></a></li>
								<li><a href="<?php echo base_url('leanding/tracking') ?>"><strong>Tracking</strong></a></li>
								<li><a href="<?php echo base_url('leanding/find') ?>"><strong>Find Agen</strong></a></li>
								<li><a href="<?php echo base_url('login') ?>"><strong>Agen</strong></a></li>
								<!-- <li><a href="<?php echo base_url('leanding/promo') ?>"><strong>Promo</strong></a></li> -->
								<!-- <li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><strong>Agen</strong></a></li> -->
 

							</ul>
						</nav>
						<div class="clearfix"></div>
						<!-- Main Navigation / End -->

					</div>
					<!-- Left Side Content / End -->
					<!-- Sign In Popup -->
					<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

						<div class="small-dialog-header">
							<img src="<?php echo base_url('assets/icon/logonew.png')?>" width="299px">
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
									<form>
										<div>
											<img src="<?php echo base_url('assets/leandingpage/images/loginagen.png')?>" >
										</div>
										<br>
										<div>
											<div class="col-md-12">
												<a class="btn btn-warning btn-block btn-flat" href="<?php echo base_url('login') ?>" style=" background:#d7282d; border-color:#d7282d; border-width: 2px; color: #fff; font-size:18px; border-radius: 40px;">Masuk sebagai agen Lionparcel</a>
											</div>
										</div>

									</form>
								</div>

								<!-- Register -->
								<div class="tab-content" id="tab2" style="display: none;">

								<form>
										<div>
											<img src="<?php echo base_url('assets/leandingpage/images/registerlion.png')?>" >
										</div>
										<br>
										<div>
											<div class="col-md-12">
												<a class="btn btn-warning btn-block btn-flat" href="<?php echo base_url('register') ?>" style=" background:#d7282d; border-color:#d7282d; border-width: 2px; color: #fff; font-size:18px; border-radius: 40px;">Daftar Baru sebagai agen Lion Parcel</a>
											</div>
										</div>

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