<!-- Banner================================================== -->

<script>
	$(document).ready(function() {
		get_location();
	});

	function get_location() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {

				var latitude = position.coords.latitude;
				var longitude = position.coords.longitude;

				setTimeout(function() {
					window.location.href = '<?php echo base_url('leanding/find')?>/'+latitude+'/'+longitude;
				}, 1000);
			});
		}
	}
</script>