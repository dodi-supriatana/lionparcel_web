		<!-- Banner================================================== -->
		

		
		<div class="main-search-container centered" data-background-image="assets/leandingpage/images/lion_man.png">
			<div class="main-search-inner">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>
								Ayo cek
								<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
								<span class="typed-words"></span>
							</h2>
							<!-- <h4>Expolore top-rated attractions, activities and more</h4> -->
							<form action="<?php echo base_url('leanding/cektarif') ?>" method="post">
							<div class="main-search-input">


								<div class="main-search-input-item">
									<!-- <select name="asal"  data-placeholder="Asal" > -->
									<select class="itemName form-control" name="origin"></select>
										<!-- Hours added via JS (this is only for demo purpose) -->
									</select>


								</div>
								<div class="main-search-input-item">
								<select class="itemName form-control" name="destination"></select>
										<!-- Hours added via JS (this is only for demo purpose) -->
										<option></option>

									</select>
								</div>


								<div class="main-search-input-item">
									<input type="number" name="kg" placeholder="Kg" min="1">
								</div>
								<button type="submit" class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>

							</div>
							</form>
						</div>
					</div>

					<!-- Features Categories -->
					<div class="row">
						<div class="col-md-12">
							<h4 class="highlighted-categories-headline">Get Mobile Apps</h4>

							<img src="<?php echo base_url('assets/leandingpage/images/download_play.png') ?>" style="width: 150px;">
							<img src="<?php echo base_url('assets/leandingpage/images/download_app.png') ?>" style="width: 150px;">

						</div>
					</div>
					<!-- Featured Categories - End -->

				</div>

			</div>
		</div>


		<!-- Content================================================== -->
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="headline centered margin-top-75">
						Promo
						<!-- <span>Browse <i>the most desirable</i> categories</span> -->
					</h3>
				</div>

			</div>
		</div>


		<!-- promo Carousel -->
		<div class="fullwidth-carousel-container margin-top-25">
			<div class="fullwidth-slick-carousel category-carousel">

				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<!-- <div class="listing-badge now-open">Hot Promo</div> -->
						<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="assets/leandingpage/images/promo/Promo_Partner_Copy_3-Lionparcel.jpg" style="height: 200px;">
						</a>
					</div>
				</div>

				<!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="assets/leandingpage/images/promo/Promo_Partner_lionparcel_seller.jpg" style="height: 200px;">
						</a>
					</div>
				</div> <!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="assets/leandingpage/images/promo/Promo_Partner_Copy_LIONPARCEL.jpg" style="height: 200px;">
						</a>
					</div>
				</div> <!-- Item -->

				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="assets/leandingpage/images/promo/slide-lion-parcel.jpg" style="height: 200px;">
						</a>
					</div>
				</div> <!-- Item -->
				<div class="fw-carousel-item">
					<div class="category-box-container">
						<a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="assets/leandingpage/images/promo/duit_horisontal2.jpg" style="height: 200px;">
						</a>
					</div>
				</div> <!-- Item -->


			</div>
		</div>
		<!-- promo Boxes / End -->

		<div class="parallax" data-background="<?php echo base_url('assets/leandingpage/images/promo/slider-03.jpg') ?>" data-color="#36383e" data-color-opacity="0.6" data-img-width="800" data-img-height="505">

			<!-- Infobox -->
			<div class="text-content white-font">
				<div class="container">

					<div class="row">
						<div class="col-lg-6 col-sm-8">
							<!-- <h2>Streamline Your Business</h2> -->
							<!-- <p>We’re full-service, local agents who know how to find people and home each together. We use online tools with an unmatched search capability to make you smarter and faster.</p> -->
							<a href="listings-list-with-sidebar.html" class="button margin-top-25">Get Started</a>
						</div>
					</div>

				</div>
			</div>

			<!-- Infobox / End -->

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



		
<script type="text/javascript">
      $('.itemName').select2({
        placeholder: '--- Select Item ---',
        ajax: {
          url: '<?php echo base_url('leanding/getcity') ?>',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
</script>