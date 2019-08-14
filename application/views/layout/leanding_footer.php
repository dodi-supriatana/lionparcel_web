<!-- Footer================================================== -->
<div id="footer" class="sticky-footer">
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img class="footer-logo" src="<?php echo base_url('assets/leandingpage/images/logopanjangmerah.png') ?>" alt="">
                <br><br>
                <p>Bersama Lion Parcel, anda bisa menjangkau ke seluruh pelosok Indonesia, karena Lion Parcel didukung oleh armada Lion Air.</p>
            </div>

            <div class="col-md-4 col-sm-6 ">
                <h4>Get Mobile Apps</h4>
                <img src="<?php echo base_url('assets/leandingpage/images/download_play.png') ?>" style="width: 150px;">
                <img src="<?php echo base_url('assets/leandingpage/images/download_app.png') ?>" style="width: 150px;">

                <div class="clearfix"></div>
            </div>

            <div class="col-md-3  col-sm-12">
                <h4>Contact Us</h4>
                <div class="text-widget">
                    <span>Head Office: Jl. Agave Raya No. 55,
                        Kedoya Selatan, Jakarta Barat, 11520</span> <br>
                    Phone: <span>+62-21-580939</span><br>
                    <!-- E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="94fbf2f2fdf7f1d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</span></a> </span><br> -->
                </div>

                <ul class="social-icons margin-top-20">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                </ul>

            </div>

        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">Copyright © 2013-2019 Lion Parcel. All rights reserved.</div>
            </div>
        </div>

    </div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="https://code.jquery.com/jquery-1.9.0.min.js"></script>
<script data-cfasync="false" src="<?php echo base_url('assets/leandingpage/scripts/email-decode.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/jquery-1.9.0.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/mmenu.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/chosen.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/slick.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/rangeslider.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/magnific-popup.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/waypoints.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/counterup.min.js') ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/jquery-ui.min.js') ?>"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/tooltips.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/custom.js') ?>"></script>


<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }
        });

        if ($('.main-search-input-item')[0]) {
            setTimeout(function() {
                $(".pac-container").prependTo("#autocomplete-container");
            }, 300);
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&amp;libraries=places&amp;callback=initAutocomplete"></script>

<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/infobox.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/markerclusterer.js') ?>"></script>
<script type="text/javascript">
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
                // ini di looping
                <?php foreach ($maps as $data) { ?>
                    [locationData('listings-single-page.html', 'https://lh3.googleusercontent.com/z5-N3zRKO3yt_RAAQcjrGcTZ0UMqloIVa0GgjHCCLqNQ3NsaJMCLAaShe2a_LQjkk2_vauaelg=w1080-h608-p-no-v0', "<?php echo $data->nama_agent ?>", "<?php echo $data->no_telepon ?>", '3.5', '12'), <?php echo $data->latitude ?>, <?php echo $data->longitude ?>, 2, '<i class="im im-icon-Home-5"></i>'],
                <?php } ?>
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
                center: new google.maps.LatLng(<?php echo $lat ?>, <?php echo $lng ?>),
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









<!-- Typed Script -->
<script type="text/javascript" src="<?php echo base_url('assets/leandingpage/scripts/typed.js') ?>"></script>
<!-- <script>
    var typed = new Typed('.typed-words', {
        strings: ["Agen Disekirar Anda", " Resi Pesanan Anda", " Harga Paket"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script> -->





<!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2REJazQD7DCmwlyr7XDeZnuPgvv1WXdha11hS7thnL22zT7A6OH3GqbIUz%2beQz0aoYXDMpMUfRuFACC3Qk%2bvi%2b7wFccEIX9fCq8gaSD%2bUCJvRPD%2bd3o%2ftTB3%2fWefsW%2bUVxh%2bXtNsa6PgsHM2h2s6NFNWP%2fx1vDgqY4LJcZ25Y74ASDR0rDOKX0S4tZqdeur0k4bQsejXU2bl20xmpH3WMask8x20MpqnX%2b%2bzgRhn6LCx4sFPbG%2fEKCce3P%2bgCbT%2fRnhx%2bBfvOMwEbJk94QWte35M%2fGLSFUy9mk7deB4YoTYfx81kR8H%2bm%2bvWTOXVe10fPj7ukou9OQ878xi9M2K672F9fXvzo7W84KGkYYoCvU%2blf9oNe5aQcAcJGVmRYZsW2ORYHVcQSIcPo6WinxM%2fJmtOT2r6EX6%2fePlE6ViX8wZGxwLrKVQGJMYu3sBusxX4%2f1mLH052xeu8C0KZmg4rcwNbaViwXBiAq4fX%2b2t7KRT%2fvIDOMLuJjgg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body> -->

<!-- Mirrored from www.vasterad.com/themes/listeo2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2019 07:37:33 GMT -->

</html>