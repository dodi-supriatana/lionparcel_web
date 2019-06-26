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
		<!-- Search Section / End -->


		<div class="col-md-12">

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
										<span><?php echo $hargas->dari." - ".$hargas->ke ?></span>
										<h4><b style="color: green;"><?php echo "Rp " . number_format($hargas->final_price,0	,',','.') ?></b></h4>
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

			<!-- Pagination / End -->

		</div>

	</div>
</div>



		
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