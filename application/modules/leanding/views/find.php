<!-- Banner================================================== -->


<div id="titlebar" style="background: #515151;padding-top: 0px;margin-bottom: -1px;"></div>
<div id="map-container" class="fullwidth-home-map">

	<div id="map" data-map-zoom="15">
		<!-- map goes here -->
	</div>

	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url('leanding/get_lat_long') ?>" method="post">
						<div class="main-search-input">
							<div class="main-search-input-item location">
								<div id="autocomplete-container">
									<input id="autocomplete-input" name="address" type="text" placeholder="Location" style="height: 33px;">
								</div>
								<a href="#"><i class="fa fa-map-marker"></i></a>
							</div>

							<button class="button" style="height: 36px;">Search</button>

						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<!-- Scroll Enabling Button -->
	<a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Enable Scrolling</a>
</div>


<!-- Content================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">

			<!-- Sorting - Filtering Section -->
			<div class="row margin-bottom-25 margin-top-40">

			</div>
			<!-- Sorting - Filtering Section / End -->


			<div class="row">
				<?php if (!empty($maps)) { ?>
					<?php foreach ($maps as $data) { ?>
						<!-- Listing Item -->
						<div class="col-lg-12">
							<div class="listing-item-container list-layout">
								<a href="listings-single-page.html" class="listing-item">

									<!-- Image -->
									<div class="listing-item-image">
										<img src="<?php echo $data->foto_1 ?>" alt="">
										<span class="tag">Detail</span>
									</div>

									<!-- Content -->
									<div class="listing-item-content">
										<div class="listing-badge now-open">Now Open</div>

										<div class="listing-item-inner">
											<h3><?php echo $data->nama_agent ?> <i class="verified-icon"></i></h3>
											<span><?php echo $data->alamat_agent ?></span>
											<div class="star-rating" data-rating="3.5">
												<div class="rating-counter">(12 reviews)</div>
											</div>
										</div>

										<!-- <span class="like-icon"></span> -->
									</div>
								</a>
							</div>
						</div>
					<?php } ?>
				<?php } ?>

				<!-- Listing Item / End -->
			</div>
		</div>
	</div>
</div>

<br>


<!-- Info Section -->
<section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="headline centered headline-extra-spacing">
					<strong class="headline-with-separator">Contact Us</strong>
					<span class="margin-top-25">You know you can ask everything</span>
				</h3>
			</div>
		</div>

		<div class="row icons-container">
			<!-- Stage -->
			<div class="col-md-3">
				<div class="icon-box-2 with-line">
					<!-- <i class="im im-icon-Map2"></i> -->
					<img src="<?php echo base_url('assets/leandingpage/images/contact-01.png') ?>" alt="">
					<h3>Business Inquiries</h3>
					<p>Email : sales@lionparcel.com</p>
					<p>Phone : +62-21-22580868</p>
					<p>+62-21-80820072</p>
				</div>
			</div>
			<!-- Stage -->
			<div class="col-md-3">
				<div class="icon-box-2 with-line">
					<!-- <i class="im im-icon-Map2"></i> -->
					<img src="<?php echo base_url('/assets/leandingpage/images/contact-02.png') ?>" alt="">
					<h3>Pendaftaran Agen</h3>
					<p>Email : sales@lionparcel.com</p>
					<p>Phone : +62-21-22580868</p>
					<p>+62-21-80820072</p>
				</div>
			</div>
			<!-- Stage -->
			<div class="col-md-3">
				<div class="icon-box-2 with-line">
					<!-- <i class="im im-icon-Map2"></i> -->
					<img src="<?php echo base_url('/assets/leandingpage/images/contact-03.png') ?>" alt="">
					<h3>Customer Service</h3>
					<p>Email : sales@lionparcel.com</p>
					<p>Phone : +62-21-22580868</p>
					<p>+62-21-80820072</p>
				</div>
			</div>
			<!-- Stage -->
			<div class="col-md-3">
				<div class="icon-box-2 with-line">
					<!-- <i class="im im-icon-Map2"></i> -->
					<img src="<?php echo base_url('/assets/leandingpage/images/contact-04.png') ?>" alt="">
					<h3>Lion Parcel</h3>
					<p>Email : sales@lionparcel.com</p>
					<p>Phone : +62-21-22580868</p>
					<p>+62-21-80820072</p>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Info Section / End -->




<!-- client list -->
<section class="fullwidth border-top margin-top-40 margin-bottom-0 padding-top-60 padding-bottom-65" data-background-color="#ffffff">
	<!-- Logo Carousel -->
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-40 margin-top-10">Our Client<span></span></h3>
			</div>

			<!-- Carousel -->
			<div class="col-md-12">
				<div class="logo-slick-carousel dot-navigation">

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-01.jpg" alt="">
					</div>

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-02.jpg" alt="">
					</div>

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-03.jpg" alt="">
					</div>

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-04.jpg" alt="">
					</div>

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-05.jpg" alt="">
					</div>

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-06.jpg" alt="">
					</div>

					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-07.jpg" alt="">
					</div>
					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-08.jpg" alt="">
					</div>
					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-09.jpg" alt="">
					</div>
					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-10.jpg" alt="">
					</div>
					<div class="item">
						<img src="http://lionparcel.com/assets/pages/images/home/partner-11.jpg" alt="">
					</div>


				</div>
			</div>
			<!-- Carousel / End -->

		</div>
	</div>
	<!-- Logo Carousel / End -->
</section>
<!-- client List / End-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSwqPE41Woyf7qzkjsaujSjIMXy8VAp9Q&amp;libraries=places&amp;callback=initAutocomplete"></script>

		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/infobox.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/markerclusterer.js') ?>"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/maps.js') ?>"></script> -->

