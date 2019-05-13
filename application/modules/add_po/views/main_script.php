<script src="<?php echo base_url('assets/js/plugin/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.colVis.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.tableTools.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugin/datatables/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugin/datatable-responsive/datatables.responsive.min.js') ?>"></script>
<script>
	$(document).ready(function() {

		pageSetUp();

		/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/

		/* BASIC ;*/
		var responsiveHelper_datatable_fixed_column = undefined;
		var breakpointDefinition = {
			tablet: 1024,
			phone: 480
		};



		/* END BASIC */

		$('#timepicker').timepicker();

		$('#slcSupplier').change(function() {
			var id = $(this).val();

			$.ajax({
				url: '<?php echo base_url('get_vendor') ?>',
				type: 'POST',
				data: {
					id: id
				},
				success: function(data) {
					$('#txtAddress').text(data);
				}
			})
		});
	})
</script>