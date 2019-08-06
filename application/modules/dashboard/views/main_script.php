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
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
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
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5]
        }, {
            name: 'Approved',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2]
        }]
    });


    // Radialize the colors
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    exporting: {
            enabled: false
        },
        credits: {
            enabled: false
        },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    // plotOptions: {
    //     pie: {
    //         allowPointSelect: true,
    //         cursor: 'pointer',
    //         dataLabels: {
    //             enabled: true,
    //             format: '<b>{point.name}</b>: {point.percentage:.1f} %',
    //             connectorColor: 'silver'
    //         }
    //     }
    // },
    series: [{
        name: 'User',
        data: [
            { name: 'Non Agent', y: 712 },
            { name: 'Agent', y: 201 }
        ]
    }]
});


Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    exporting: {
            enabled: false
        },
        credits: {
            enabled: false
        },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Transactions',
        data: [49, 71, 106, 129, 144, 176, 135],
        color: '#00CA8A'

    }]
});


</script>