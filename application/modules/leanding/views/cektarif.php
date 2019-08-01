<div id="titlebar" style="background: #515151;padding-top: 0px;"></div>
<!-- Titlebar
================================================== -->


<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		<!-- Search -->
		<div class="col-md-12">
			<form action="<?php echo base_url('leanding/cektarif') ?>" method="post">
				<div class="main-search-input gray-style margin-top-0 margin-bottom-10">
					<div class="main-search-input-item">
						<!-- <select name="asal"  data-placeholder="Asal" > -->
						<select class="itemName " name="origin"></select>
						<!-- Hours added via JS (this is only for demo purpose) -->
						</select>


					</div>
					<div class="main-search-input-item">
						<select class="itemName" name="destination"></select>
						<!-- Hours added via JS (this is only for demo purpose) -->
					

						</select>
					</div>


					<div class="main-search-input-item">
						<input type="number" class="form-control" name="kg" placeholder="Kg" min="1">
					</div>
					<button type="submit" class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>

				</div>
			</form>
		</div>
		<!-- Search Section / End -->
		<div class="col-lg-9 col-md-8 padding-right-30">

			<!-- Sorting / Layout Switcher -->
			<div class="row margin-bottom-25">

				<div class="col-md-6 col-xs-6">
					<!-- Layout Switcher -->
					
				</div>

				<div class="col-md-6 col-xs-6">
					<!-- Sort by -->
					<!-- <div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single">
								<option>Default Order</option>	
								<option>Highest Rated</option>
								<option>Most Reviewed</option>
								<option>Newest Listings</option>
								<option>Oldest Listings</option>
							</select>
						</div>
					</div> -->
				</div>
			</div>
			<!-- Sorting / Layout Switcher / End -->

			<div class="row">

				<!-- Listing Item -->
				<?php foreach ($harga as $hargas) { ?>

					<div class="col-lg-12 col-md-12">
						<div class="listing-item-container list-layout">
							<a href="listings-single-page.html" class="listing-item">

								<!-- Image -->
								<div class="listing-item-image">
									<img src="<?php echo base_url('assets/leandingpage/images/promo/duit_horisontal2.jpg') ?>" alt="">
									<span class="tag">Eat & Drink</span>
								</div>

								<!-- Content -->
								<div class="listing-item-content">
									<div class="listing-badge now-open">Hot Promo</div>

									<div class="listing-item-inner">
										<h3><?php echo $hargas->product ?> <i class="verified-icon"></i></h3>
										<span><?php echo $hargas->dari . " - " . $hargas->ke ?></span>
										<h4><b style="color: green;"><?php echo "Rp " . number_format($hargas->final_price, 0, ',', '.') ?></b></h4>
										<div class="star-rating" data-rating="5">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>

									<span class="like-icon"></span>
								</div>
							</a>
						</div>
					</div>
				<?php } ?>
				<!-- Listing Item / End -->
			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				
			</div>
			<!-- Pagination / End -->

		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-3 col-md-4">
			<div class="sidebar">

				<!-- Widget -->
				<div class="widget margin-bottom-40">
					<h3 class="margin-top-0 margin-bottom-30">Competitor Price</h3>

					<!-- Row -->
					<?php foreach ($competitor as $data) { ?>
					
					<div class="row with-forms">
						<!-- Cities -->
						<div class="col-md-12">
							<?php if ($data->company=='JNE') { ?>
								<input type="text" style="background-color: #2E3B9A;color:white" placeholder="" value="<?php echo $data->product." - ". $data->price ?>" readonly/>
							<?php }else{ ?>
								<input type="text" style="background-color: #FF6F00;color:white" placeholder="" value="<?php echo $data->product." - ". $data->price ?>" readonly/>
							<?php } ?>
						</div>
					</div>
					<?php } ?>
					<!-- <button class="button fullwidth margin-top-25">Update</button> -->

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->
	</div>
</div>




<script type="text/javascript">
	$('.itemName').select2({
		placeholder: '--- Select Item ---',
		ajax: {
			url: '<?php echo base_url('leanding/getcity') ?>',
			dataType: 'json',
			delay: 250,
			processResults: function(data) {
				return {
					results: data
				};
			},
			cache: true
		}
	});
</script>