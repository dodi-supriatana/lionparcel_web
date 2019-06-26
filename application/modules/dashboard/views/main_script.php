</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->


<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?php echo base_url() ?>" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->


<!-- START PRELOADS -->
<audio id="audio-alert" src="<?php echo base_url('assets/apps/audio/alert.mp3') ?>" preload="auto"></audio>
<audio id="audio-fail" src="<?php echo base_url('assets/apps/audio/fail.mp3') ?>" preload="auto"></audio>
<!-- END PRELOADS -->
<script>
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: ''
            }
        },
        exporting: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true   
            }
        },
        series: [{
            name: 'Register',
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 0, 0, 0, 0, 0, 0]
        }, {
            name: 'Approved',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 0, 0, 0, 0, 0, 0]
        }]
    });
</script>