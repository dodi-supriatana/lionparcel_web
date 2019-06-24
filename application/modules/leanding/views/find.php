		<!-- Banner================================================== -->
		<div id="map-container" class="fullwidth-home-map">

			<div id="map" data-map-zoom="9">
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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/infobox.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/markerclusterer.js') ?>"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/maps.js') ?>"></script> -->
	

		<script>
			var infoBox_ratingType = 'star-rating';
			(function($) {
				"use strict";

				function mainMap() {
					var ib = new InfoBox();

					function locationData(locationURL, locationImg, locationTitle, locationAddress, locationRating, locationRatingCounter) {
						return ('' +
							'<a href="' + locationURL + '" class="listing-img-container">' +
							'<div class="infoBox-close"><i class="fa fa-times"></i></div>' +
							'<img src="' + locationImg + '" alt="">' +
							'<div class="listing-item-content">' +
							'<h3>' + locationTitle + '</h3>' +
							'<span>' + locationAddress + '</span>' +
							'</div>' +
							'</a>' +
							'<div class="listing-content">' +
							'<div class="listing-title">' +
							'<div class="' + infoBox_ratingType + '" data-rating="' + locationRating + '"><div class="rating-counter">(' + locationRatingCounter + ' reviews)</div></div>' +
							'</div>' +
							'</div>')
					}
					var locations = [
						[locationData('listings-single-page.html', 'images/listing-item-01.jpg', "Tom's Restaurant", '964 School Street, New York', '3.5', '12'), 40.94401669296697, -74.16938781738281, 1, '<i class="im im-icon-Chef-Hat"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-02.jpg', 'Sticky Band', 'Bishop Avenue, New York', '5.0', '23'), 40.77055783505125, -74.26002502441406, 2, '<i class="im im-icon-Electric-Guitar"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-03.jpg', 'Hotel Govendor', '778 Country Street, New York', '2.0', '17'), 40.7427837, -73.11445617675781, 3, '<i class="im im-icon-Home-2"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-04.jpg', 'Burger House', '2726 Shinn Street, New York', '5.0', '31'), 40.70437865245596, -73.98674011230469, 4, '<i class="im im-icon-Hamburger"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-05.jpg', 'Airport', '1512 Duncan Avenue, New York', '3.5', '46'), 40.641311, -73.778139, 5, '<i class="im im-icon-Plane"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-06.jpg', 'Think Coffee', '215 Terry Lane, New York', '4.5', '15'), 41.080938, -73.535957, 6, '<i class="im im-icon-Coffee"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-04.jpg', 'Burger House', '2726 Shinn Street, New York', '5.0', '31'), 41.079386, -73.519478, 7, '<i class="im im-icon-Hamburger"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-04.jpg', 'Burger House', '2726 Shinn Street, New York', '5.0', '31'), 52.368630, 4.895782, 7, '<i class="im im-icon-Hamburger"></i>'],
						[locationData('listings-single-page.html', 'images/listing-item-04.jpg', 'Burger House', '2726 Shinn Street, New York', '5.0', '31'), 52.350179, 4.634857, 7, '<i class="im im-icon-Hamburger"></i>'],
					];
					google.maps.event.addListener(ib, 'domready', function() {
						if (infoBox_ratingType = 'numerical-rating') {
							numericalRating('.infoBox .' + infoBox_ratingType + '');
						}
						if (infoBox_ratingType = 'star-rating') {
							starRating('.infoBox .' + infoBox_ratingType + '');
						}
					});
					var mapZoomAttr = $('#map').attr('data-map-zoom');
					var mapScrollAttr = $('#map').attr('data-map-scroll');
					if (typeof mapZoomAttr !== typeof undefined && mapZoomAttr !== false) {
						var zoomLevel = parseInt(mapZoomAttr);
					} else {
						var zoomLevel = 5;
					}
					if (typeof mapScrollAttr !== typeof undefined && mapScrollAttr !== false) {
						var scrollEnabled = parseInt(mapScrollAttr);
					} else {
						var scrollEnabled = false;
					}
					var map = new google.maps.Map(document.getElementById('map'), {
						zoom: zoomLevel,
						scrollwheel: scrollEnabled,
						center: new google.maps.LatLng(118.0149, -73.70),
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						zoomControl: false,
						mapTypeControl: false,
						scaleControl: false,
						panControl: false,
						navigationControl: false,
						streetViewControl: false,
						gestureHandling: 'cooperative',
						styles: [{
							"featureType": "poi",
							"elementType": "labels.text.fill",
							"stylers": [{
								"color": "#747474"
							}, {
								"lightness": "23"
							}]
						}, {
							"featureType": "poi.attraction",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#f38eb0"
							}]
						}, {
							"featureType": "poi.government",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ced7db"
							}]
						}, {
							"featureType": "poi.medical",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ffa5a8"
							}]
						}, {
							"featureType": "poi.park",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#c7e5c8"
							}]
						}, {
							"featureType": "poi.place_of_worship",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#d6cbc7"
							}]
						}, {
							"featureType": "poi.school",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#c4c9e8"
							}]
						}, {
							"featureType": "poi.sports_complex",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#b1eaf1"
							}]
						}, {
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [{
								"lightness": "100"
							}]
						}, {
							"featureType": "road",
							"elementType": "labels",
							"stylers": [{
								"visibility": "off"
							}, {
								"lightness": "100"
							}]
						}, {
							"featureType": "road.highway",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ffd4a5"
							}]
						}, {
							"featureType": "road.arterial",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ffe9d2"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "all",
							"stylers": [{
								"visibility": "simplified"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "geometry.fill",
							"stylers": [{
								"weight": "3.00"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "geometry.stroke",
							"stylers": [{
								"weight": "0.30"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "labels.text",
							"stylers": [{
								"visibility": "on"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "labels.text.fill",
							"stylers": [{
								"color": "#747474"
							}, {
								"lightness": "36"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "labels.text.stroke",
							"stylers": [{
								"color": "#e9e5dc"
							}, {
								"lightness": "30"
							}]
						}, {
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [{
								"visibility": "on"
							}, {
								"lightness": "100"
							}]
						}, {
							"featureType": "water",
							"elementType": "all",
							"stylers": [{
								"color": "#d2e7f7"
							}]
						}]
					});
					$('.listing-item-container').on('mouseover', function() {
						var listingAttr = $(this).data('marker-id');
						if (listingAttr !== undefined) {
							var listing_id = $(this).data('marker-id') - 1;
							var marker_div = allMarkers[listing_id].div;
							$(marker_div).addClass('clicked');
							$(this).on('mouseout', function() {
								if ($(marker_div).is(":not(.infoBox-opened)")) {
									$(marker_div).removeClass('clicked');
								}
							});
						}
					});
					var boxText = document.createElement("div");
					boxText.className = 'map-box'
					var currentInfobox;
					var boxOptions = {
						content: boxText,
						disableAutoPan: false,
						alignBottom: true,
						maxWidth: 0,
						pixelOffset: new google.maps.Size(-134, -55),
						zIndex: null,
						boxStyle: {
							width: "270px"
						},
						closeBoxMargin: "0",
						closeBoxURL: "",
						infoBoxClearance: new google.maps.Size(25, 25),
						isHidden: false,
						pane: "floatPane",
						enableEventPropagation: false,
					};
					var markerCluster, overlay, i;
					var allMarkers = [];
					var clusterStyles = [{
						textColor: 'white',
						url: '',
						height: 50,
						width: 50
					}];
					var markerIco;
					for (i = 0; i < locations.length; i++) {
						markerIco = locations[i][4];
						var overlaypositions = new google.maps.LatLng(locations[i][1], locations[i][2]),
							overlay = new CustomMarker(overlaypositions, map, {
								marker_id: i
							}, markerIco);
						allMarkers.push(overlay);
						google.maps.event.addDomListener(overlay, 'click', (function(overlay, i) {
							return function() {
								ib.setOptions(boxOptions);
								boxText.innerHTML = locations[i][0];
								ib.close();
								ib.open(map, overlay);
								currentInfobox = locations[i][3];
								google.maps.event.addListener(ib, 'domready', function() {
									$('.infoBox-close').click(function(e) {
										e.preventDefault();
										ib.close();
										$('.map-marker-container').removeClass('clicked infoBox-opened');
									});
								});
							}
						})(overlay, i));
					}
					var options = {
						imagePath: 'images/',
						styles: clusterStyles,
						minClusterSize: 2
					};
					markerCluster = new MarkerClusterer(map, allMarkers, options);
					google.maps.event.addDomListener(window, "resize", function() {
						var center = map.getCenter();
						google.maps.event.trigger(map, "resize");
						map.setCenter(center);
					});
					var zoomControlDiv = document.createElement('div');
					var zoomControl = new ZoomControl(zoomControlDiv, map);

					function ZoomControl(controlDiv, map) {
						zoomControlDiv.index = 1;
						map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
						controlDiv.style.padding = '5px';
						controlDiv.className = "zoomControlWrapper";
						var controlWrapper = document.createElement('div');
						controlDiv.appendChild(controlWrapper);
						var zoomInButton = document.createElement('div');
						zoomInButton.className = "custom-zoom-in";
						controlWrapper.appendChild(zoomInButton);
						var zoomOutButton = document.createElement('div');
						zoomOutButton.className = "custom-zoom-out";
						controlWrapper.appendChild(zoomOutButton);
						google.maps.event.addDomListener(zoomInButton, 'click', function() {
							map.setZoom(map.getZoom() + 1);
						});
						google.maps.event.addDomListener(zoomOutButton, 'click', function() {
							map.setZoom(map.getZoom() - 1);
						});
					}
					var scrollEnabling = $('#scrollEnabling');
					$(scrollEnabling).click(function(e) {
						e.preventDefault();
						$(this).toggleClass("enabled");
						if ($(this).is(".enabled")) {
							map.setOptions({
								'scrollwheel': true
							});
						} else {
							map.setOptions({
								'scrollwheel': false
							});
						}
					})
					$("#geoLocation, .input-with-icon.location a").click(function(e) {
						e.preventDefault();
						geolocate();
					});

					function geolocate() {
						if (navigator.geolocation) {
							navigator.geolocation.getCurrentPosition(function(position) {
								var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
								map.setCenter(pos);
								map.setZoom(12);
							});
						}
					}
				}
				var map = document.getElementById('map');
				if (typeof(map) != 'undefined' && map != null) {
					google.maps.event.addDomListener(window, 'load', mainMap);
				}

				function singleListingMap() {
					var myLatlng = new google.maps.LatLng({
						lng: $('#singleListingMap').data('longitude'),
						lat: $('#singleListingMap').data('latitude'),
					});
					var single_map = new google.maps.Map(document.getElementById('singleListingMap'), {
						zoom: 15,
						center: myLatlng,
						scrollwheel: false,
						zoomControl: false,
						mapTypeControl: false,
						scaleControl: false,
						panControl: false,
						navigationControl: false,
						streetViewControl: false,
						styles: [{
							"featureType": "poi",
							"elementType": "labels.text.fill",
							"stylers": [{
								"color": "#747474"
							}, {
								"lightness": "23"
							}]
						}, {
							"featureType": "poi.attraction",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#f38eb0"
							}]
						}, {
							"featureType": "poi.government",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ced7db"
							}]
						}, {
							"featureType": "poi.medical",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ffa5a8"
							}]
						}, {
							"featureType": "poi.park",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#c7e5c8"
							}]
						}, {
							"featureType": "poi.place_of_worship",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#d6cbc7"
							}]
						}, {
							"featureType": "poi.school",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#c4c9e8"
							}]
						}, {
							"featureType": "poi.sports_complex",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#b1eaf1"
							}]
						}, {
							"featureType": "road",
							"elementType": "geometry",
							"stylers": [{
								"lightness": "100"
							}]
						}, {
							"featureType": "road",
							"elementType": "labels",
							"stylers": [{
								"visibility": "off"
							}, {
								"lightness": "100"
							}]
						}, {
							"featureType": "road.highway",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ffd4a5"
							}]
						}, {
							"featureType": "road.arterial",
							"elementType": "geometry.fill",
							"stylers": [{
								"color": "#ffe9d2"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "all",
							"stylers": [{
								"visibility": "simplified"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "geometry.fill",
							"stylers": [{
								"weight": "3.00"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "geometry.stroke",
							"stylers": [{
								"weight": "0.30"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "labels.text",
							"stylers": [{
								"visibility": "on"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "labels.text.fill",
							"stylers": [{
								"color": "#747474"
							}, {
								"lightness": "36"
							}]
						}, {
							"featureType": "road.local",
							"elementType": "labels.text.stroke",
							"stylers": [{
								"color": "#e9e5dc"
							}, {
								"lightness": "30"
							}]
						}, {
							"featureType": "transit.line",
							"elementType": "geometry",
							"stylers": [{
								"visibility": "on"
							}, {
								"lightness": "100"
							}]
						}, {
							"featureType": "water",
							"elementType": "all",
							"stylers": [{
								"color": "#d2e7f7"
							}]
						}]
					});
					$('#streetView').click(function(e) {
						e.preventDefault();
						single_map.getStreetView().setOptions({
							visible: true,
							position: myLatlng
						});
					});
					var zoomControlDiv = document.createElement('div');
					var zoomControl = new ZoomControl(zoomControlDiv, single_map);

					function ZoomControl(controlDiv, single_map) {
						zoomControlDiv.index = 1;
						single_map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(zoomControlDiv);
						controlDiv.style.padding = '5px';
						var controlWrapper = document.createElement('div');
						controlDiv.appendChild(controlWrapper);
						var zoomInButton = document.createElement('div');
						zoomInButton.className = "custom-zoom-in";
						controlWrapper.appendChild(zoomInButton);
						var zoomOutButton = document.createElement('div');
						zoomOutButton.className = "custom-zoom-out";
						controlWrapper.appendChild(zoomOutButton);
						google.maps.event.addDomListener(zoomInButton, 'click', function() {
							single_map.setZoom(single_map.getZoom() + 1);
						});
						google.maps.event.addDomListener(zoomOutButton, 'click', function() {
							single_map.setZoom(single_map.getZoom() - 1);
						});
					}
					var singleMapIco = "<i class='" + $('#singleListingMap').data('map-icon') + "'></i>";
					new CustomMarker(myLatlng, single_map, {
						marker_id: '1'
					}, singleMapIco);
				}
				var single_map = document.getElementById('singleListingMap');
				if (typeof(single_map) != 'undefined' && single_map != null) {
					google.maps.event.addDomListener(window, 'load', singleListingMap);
				}

				function CustomMarker(latlng, map, args, markerIco) {
					this.latlng = latlng;
					this.args = args;
					this.markerIco = markerIco;
					this.setMap(map);
				}
				CustomMarker.prototype = new google.maps.OverlayView();
				CustomMarker.prototype.draw = function() {
					var self = this;
					var div = this.div;
					if (!div) {
						div = this.div = document.createElement('div');
						div.className = 'map-marker-container';
						div.innerHTML = '<div class="marker-container">' +
							'<div class="marker-card">' +
							'<div class="front face">' + self.markerIco + '</div>' +
							'<div class="back face">' + self.markerIco + '</div>' +
							'<div class="marker-arrow"></div>' +
							'</div>' +
							'</div>'
						google.maps.event.addDomListener(div, "click", function(event) {
							$('.map-marker-container').removeClass('clicked infoBox-opened');
							google.maps.event.trigger(self, "click");
							$(this).addClass('clicked infoBox-opened');
						});
						if (typeof(self.args.marker_id) !== 'undefined') {
							div.dataset.marker_id = self.args.marker_id;
						}
						var panes = this.getPanes();
						panes.overlayImage.appendChild(div);
					}
					var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
					if (point) {
						div.style.left = (point.x) + 'px';
						div.style.top = (point.y) + 'px';
					}
				};
				CustomMarker.prototype.remove = function() {
					if (this.div) {
						this.div.parentNode.removeChild(this.div);
						this.div = null;
						$(this).removeClass('clicked');
					}
				};
				CustomMarker.prototype.getPosition = function() {
					return this.latlng;
				};
			})(this.jQuery);
		</script>