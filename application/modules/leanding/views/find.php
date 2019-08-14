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

<!-- Info Section / End -->




<!-- client list -->

<!-- client List / End-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSwqPE41Woyf7qzkjsaujSjIMXy8VAp9Q&amp;libraries=places&amp;callback=initAutocomplete"></script>

		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/infobox.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/markerclusterer.js') ?>"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/maps.js') ?>"></script> -->

