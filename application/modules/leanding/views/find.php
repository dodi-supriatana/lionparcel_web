		<!-- Banner================================================== -->
		<div id="titlebar"  style="background: #515151;padding-top: 0px;margin-bottom: -1px;"></div>
		<div id="map-container" class="fullwidth-home-map">

			<div id="map" data-map-zoom="5.5">
				<!-- map goes here -->
			</div>

			<div class="main-search-inner">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="main-search-input">

								<div class="main-search-input-item location">
									<div id="autocomplete-container">
										<input id="autocomplete-input" type="text" placeholder="Location">
									</div>
									<a href="#"><i class="fa fa-map-marker"></i></a>
								</div>

								<button class="button">Search</button>

							</div>
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

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="#" class="grid active"><i class="fa fa-th"></i></a>
						<a href="listings-list-full-width.html" class="list"><i class="fa fa-align-justify"></i></a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="fullwidth-filters">
						
						<!-- Panel Dropdown -->
						<div class="panel-dropdown wide float-right">
							<a href="#">More Filters</a>
							<div class="panel-dropdown-content checkboxes">

								<!-- Checkboxes -->
								<div class="row">
									<div class="col-md-6">
										<input id="check-a" type="checkbox" name="check">
										<label for="check-a">Elevator in building</label>

										<input id="check-b" type="checkbox" name="check">
										<label for="check-b">Friendly workspace</label>

										<input id="check-c" type="checkbox" name="check">
										<label for="check-c">Instant Book</label>

										<input id="check-d" type="checkbox" name="check">
										<label for="check-d">Wireless Internet</label>
									</div>	

									<div class="col-md-6">
										<input id="check-e" type="checkbox" name="check" >
										<label for="check-e">Free parking on premises</label>

										<input id="check-f" type="checkbox" name="check" >
										<label for="check-f">Free parking on street</label>

										<input id="check-g" type="checkbox" name="check">
										<label for="check-g">Smoking allowed</label>	

										<input id="check-h" type="checkbox" name="check">
										<label for="check-h">Events</label>
									</div>
								</div>
								
								<!-- Buttons -->
								<div class="panel-buttons">
									<button class="panel-cancel">Cancel</button>
									<button class="panel-apply">Apply</button>
								</div>

							</div>
						</div>
						<!-- Panel Dropdown / End -->

						<!-- Panel Dropdown-->
						<div class="panel-dropdown float-right">
							<a href="#">Distance Radius</a>
							<div class="panel-dropdown-content">
								<input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
								<div class="panel-buttons">
									<button class="panel-cancel">Disable</button>
									<button class="panel-apply">Apply</button>
								</div>
							</div>
						</div>
						<!-- Panel Dropdown / End -->

						<!-- Sort by -->
						<div class="sort-by">
							<div class="sort-by-select">
								<select data-placeholder="Default order" class="chosen-select-no-single">
									<option>Default Order</option>	
									<option>Highest Rated</option>
									<option>Most Reviewed</option>
									<option>Newest Listings</option>
									<option>Oldest Listings</option>
								</select>
							</div>
						</div>
						<!-- Sort by / End -->

					</div>
				</div>

			</div>
			<!-- Sorting - Filtering Section / End -->


			<div class="row">

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-01.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Now Open</div>

								<div class="listing-item-inner">
									<h3>Tom's Restaurant <i class="verified-icon"></i></h3>
									<span>964 School Street, New York</span>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(12 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-02.jpg" alt="">
								<span class="tag">Events</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Sticky Band</h3>
								<span>Bishop Avenue, New York</span>
									<div class="star-rating" data-rating="5.0">
										<div class="rating-counter">(23 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>

								<div class="listing-item-details">Friday, August 10</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-03.jpg" alt="">
								<span class="tag">Hotels</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Hotel Govendor</h3>
								<span>778 Country Street, New York</span>
									<div class="star-rating" data-rating="2.0">
										<div class="rating-counter">(17 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>

								<div class="listing-item-details">Starting from $59 per night</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-04.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-open">Now Open</div>
								
								<div class="listing-item-inner">
								<h3>Burger House <i class="verified-icon"></i></h3>
								<span>2726 Shinn Street, New York</span>
									<div class="star-rating" data-rating="5.0">
										<div class="rating-counter">(31 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-05.jpg" alt="">
								<span class="tag">Other</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">

								<div class="listing-item-inner">
								<h3>Airport</h3>
								<span>1512 Duncan Avenue, New York</span>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(46 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="col-lg-12 col-md-12">
					<div class="listing-item-container list-layout">
						<a href="listings-single-page.html" class="listing-item">
							
							<!-- Image -->
							<div class="listing-item-image">
								<img src="images/listing-item-06.jpg" alt="">
								<span class="tag">Eat & Drink</span>
							</div>
							
							<!-- Content -->
							<div class="listing-item-content">
								<div class="listing-badge now-closed">Now Closed</div>

								<div class="listing-item-inner">
								<h3>Think Coffee</h3>
								<span>215 Terry Lane, New York</span>
									<div class="star-rating" data-rating="5.0">
										<div class="rating-counter">(31 reviews)</div>
									</div>
								</div>

								<span class="like-icon"></span>
							</div>
						</a>
					</div>
				</div>
				<!-- Listing Item / End -->

			</div>

		</div>

	</div>
</div>




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
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>

		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/infobox.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/markerclusterer.js') ?>"></script> -->
		<!-- <script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/maps.js') ?>"></script> -->

			

	