		<!-- Banner================================================== -->

		<style>
			ul.timeline {
				list-style-type: none;
				position: relative;
			}

			ul.timeline:before {
				content: ' ';
				background: #47484891;
				display: inline-block;
				position: absolute;
				left: 29px;
				width: 2px;
				height: 100%;
				z-index: 400;
			}

			ul.timeline>li {
				margin: 20px 0;
				padding-left: 44px;
			}

			ul.timeline>li:before {
				content: ' ';
				background: white;
				display: inline-block;
				position: absolute;
				border-radius: 50%;
				border: 3px solid #ff0000;
				left: 20px;
				width: 20px;
				height: 20px;
				z-index: 400;
			}
		</style>
		<div class="main-search-container centered" data-background-image="<?php echo base_url('assets/leandingpage/images/lion_man.png') ?>">
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
							<form action="<?php echo base_url('leanding/tracking') ?>" method="post">
								<div class="main-search-input">
								
									<div class="main-search-input-item location">
										<div id="autocomplete-container">
											<center>
											<input type="text" placeholder=" Input Your STT No" name="sst_no" style="height: 35px; width:500px;">
											</center>
										</div>
<<<<<<< HEAD
										<!-- <a href="#"><i class="fa fa-map-marker"></i></a> -->
=======
										<a href="#" style="right:230px;"><i class="fa fa-map-marker"></i></a>
>>>>>>> e68ae9dc57e5c9c9d7fba84db1f148258a1dd6a5
									</div>
										<div>
											<button type="submit" class="button" style="height:39px;right:200px;">Search</button>
										</div>
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
		<?php if (!empty( $tracking)) { ?>
		
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h4 style="font-size: 20px;"><strong>Tracking Update</strong></h4>
					<ul class="timeline">
						<?php foreach ($tracking as $data) {

							if (is_array($data)) {
								//  Scan through inner loop
								foreach ($data as $value) { ?>
									<li>
										<strong><a style="color: #ff0000;font-size: 12px;"><?php echo $value->description ?></a></strong>
										<!-- <a style="color: #4d4d4d;" class="float-right"><?php echo $value->description ?></a> -->
										<p><?php echo $value->title ?></p>
									</li>
								<?php }
						}
					} ?>

					</ul>

				</div>
			</div>
		</div>
	<?php } ?>