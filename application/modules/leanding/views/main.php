		<!-- Banner================================================== -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

		<style>
			* {
				box-sizing: border-box;
			}
			
			body {
				font: 14px Arial;
			}

			/*the container must be positioned relative:*/
			.autocomplete {
				position: relative;
				display: inline-block;
			}

			input {
				border: 1px solid transparent;
				background-color: #f1f1f1;
				padding: 10px;
				font-size: 16px;
			}

			input[type=text] {
				background-color: #fff;
				width: 100%;
				border-radius:0;
			}

			input[type=submit] {
				background-color: red;
				color: red;
				cursor: pointer;
			}

			.autocomplete-items {
				position: inherit;
				border: 1px solid #fff;
				border-bottom: none;
				border-top: none;
				z-index: 99;
				top: 100%;
			}

			b {
				color: red;
			}

			.autocomplete-items div {
				/* padding: 10px; */
				cursor: pointer;
				background-color: #fff;
				border-bottom: 1px solid #d4d4d4;
			}

			/*when hovering an item:*/
			.autocomplete-items div:hover {
				background-color: #e9e9e9;
			}

			/*when navigating through the items using the arrow keys:*/
			.autocomplete-active {
				background-color: yellow !important;
				color: #ffffff;
			}
		</style>


		<div class="main-search-container centered" data-background-image="assets/leandingpage/images/lion_man.png">
			<div class="main-search-inner">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>
								Menjangkau Ke seluruh Pelosok indonesia
								<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
								<span class="typed-words"></span>
							</h2>
							<!-- <h4>Expolore top-rated attractions, activities and more</h4> -->
							<form action="<?php echo base_url('leanding/cektarif') ?>" method="post">
								<div class="main-search-input">


									<div class="main-search-input-item">
										<!-- <select class="itemName" name="origin" placeholder="Select Origin" style="font-size:20px;"></select> -->
										<input id="myInput" type="text" name="myCountry" placeholder=" Origin" style="height: 29px; width:300px;" required autocomplete="off">
										<input id="myHiddenInput" type="hidden" name="origin">
									</div>
									<div class="main-search-input-item">
										<!-- <select class="itemName1" name="destination" placeholder="Select Destination"></select> -->
										<input id="myInput2" type="text" name="myCountry2" placeholder=" Destination" style="height: 29px;" required autocomplete="off">
										<input id="myHiddenInput2" type="hidden" name="destination">
									</div>


									<div class="main-search-input-item">
										<input type="number" name="kg" placeholder=" Kg" min="1" style="height: 29px; border-radius:0;" required autocomplete="off">
									</div>

									<button type="submit" class="button" style="height: 35px;">Search</button>

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
		<div class="fullwidth-carousel-container margin-top-25 margin-bottom-75">
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


		<!-- <div class="parallax" data-background="<?php echo base_url('assets/leandingpage/images/promo/slider-03.jpg') ?>" data-color="#36383e" data-color-opacity="0.6" data-img-width="800" data-img-height="505">

		
			<div class="text-content white-font">
				<div class="container">

					<div class="row">
						<div class="col-lg-6 col-sm-8">
							<h2>Streamline Your Business</h2>
							<p>We’re full-service, local agents who know how to find people and home each together. We use online tools with an unmatched search capability to make you smarter and faster.</p>
							<a href="listings-list-with-sidebar.html" class="button margin-top-25">Get Started</a>
						</div>
					</div>

				</div>
			</div>

			

		</div> -->


		<!-- Info Section -->
		<section class="fullwidth padding-top-75 padding-bottom-70" style="background-image: url('assets/dist/img/bg.png');">
			<!-- <section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#edecec"> -->
			<div class="container">

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h3 class="headline centered headline-extra-spacing">
							<strong class="headline-with-separator">Contact Us</strong>
							<!-- <span class="margin-top-25">You know you can ask everything</span> -->
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
							<p><span class="fa fa-envelope fa-2x" style="font-size:16px; color:#e33c40;"></span> sales@lionparcel.com</p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-22580868</p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-80820072</p>
						</div>
					</div>
					<!-- Stage -->
					<div class="col-md-3">
						<div class="icon-box-2 with-line">
							<!-- <i class="im im-icon-Map2"></i> -->
							<img src="<?php echo base_url('/assets/leandingpage/images/contact-02.png') ?>" alt="">
							<h3>Pendaftaran Agen</h3>
							<p><span class="fa fa-envelope fa-2x" style="font-size:16px; color:#e33c40;"></span> agent.info@lionparcel.com</p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-22580868</p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-80820072</p>
						</div>
					</div>
					<!-- Stage -->
					<div class="col-md-3">
						<div class="icon-box-2 with-line">
							<!-- <i class="im im-icon-Map2"></i> -->
							<img src="<?php echo base_url('/assets/leandingpage/images/contact-03.png') ?>" alt="">
							<h3>Customer Service</h3>
							<p><span class="fa fa-envelope fa-2x" style="font-size:16px; color:#e33c40;"></span> customer.care@lionparcel.com </p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-22580868</p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-80820072</p>
						</div>
					</div>
					<!-- Stage -->
					<div class="col-md-3">
						<div class="icon-box-2 with-line">
							<!-- <i class="im im-icon-Map2"></i> -->
							<img src="<?php echo base_url('/assets/leandingpage/images/contact-04.png') ?>" alt="">
							<h3>Lion Parcel</h3>
							<p><span class="fa fa-envelope fa-2x" style="font-size:16px; color:#e33c40;"></span> sales@lionparcel.com</p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-22580868 </p>
							<p><span class="fa fa-phone fa-2x" style="font-size:16px; color:#e33c40;"></span> +62-21-80820072</p>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- Info Section / End -->
		<br>
		<section>
			<div>
				<a href="<?php echo base_url('login') ?>"> <img src="<?php echo base_url('assets/leandingpage/images/promo/parallax1.jpg') ?>" width="100%" height="50%"></a>
			</div>
		</section>


		<!-- client list -->
		<section class="fullwidth border-top margin-top-40 margin-bottom-0 padding-top-60 padding-bottom-65" data-background-color="#fff">
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



		<!-- 		
<script type="text/javascript">
      $('.itemName').select2({
		placeholder: ' Select Origin',
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
	  
	  $('.itemName1').select2({
		placeholder: ' Select Destination',
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
</script> -->


		<script>
			function autocomplete(inp, arr) {
				/*the autocomplete function takes two arguments,
				the text field element and an array of possible autocompleted values:*/
				var currentFocus;
				/*execute a function when someone writes in the text field:*/
				inp.addEventListener("input", function(e) {
					var myHiddenInput = document.getElementById('myHiddenInput');
					var a, b, i, val = this.value;
					/*close any already open lists of autocompleted values*/
					closeAllLists();
					if (!val) {
						return false;
					}
					currentFocus = -1;
					/*create a DIV element that will contain the items (values):*/
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					/*append the DIV element as a child of the autocomplete container:*/
					this.parentNode.appendChild(a);
					/*for each item in the array...*/
					for (i = 0; i < arr.length; i++) {
						var regex = new RegExp('(' + val + ')', 'gi');
						var found = arr[i]['nama'].match(regex);
						/*check if the item starts with the same letters as the text field value:*/
						if (found) {
							var str = arr[i]['nama'].replace(found, `/${val}/`);
							var x = str.split('/');
							var newStr = '';
							for (let xVal of x) {
								if (xVal == val) {
									newStr += `<b>${xVal}</b>`;
								} else {
									newStr += xVal;
								}
							}
							/*create a DIV element for each matching element:*/
							b = document.createElement("DIV");
							/*make the matching letters bold:*/
							b.innerHTML = newStr;
							/*insert a input field that will hold the current array item's value:*/
							b.innerHTML += "<input name='inputNama' type='hidden' value='" + arr[i]['nama'] + "'>";
							b.innerHTML += "<input class='taufiq' name='hiddenInput' type='hidden' value='" + arr[i]['id'] + "'>";
							/*execute a function when someone clicks on the item value (DIV element):*/
							b.addEventListener("click", function(e) {
								/*insert the value for the autocomplete text field:*/
								inp.value = this.getElementsByTagName("input")[0].value;
								myHiddenInput.value = this.getElementsByClassName('taufiq')[0].value;
								console.log(myHiddenInput.value);
								/*close the list of autocompleted values,
								(or any other open lists of autocompleted values:*/
								// alert(inp.value);
								closeAllLists();
							});
							a.appendChild(b);
						}
					}
				});
				/*execute a function presses a key on the keyboard:*/
				inp.addEventListener("keydown", function(e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						/*If the arrow DOWN key is pressed,
						increase the currentFocus variable:*/
						currentFocus++;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 38) { //up
						/*If the arrow UP key is pressed,
						decrease the currentFocus variable:*/
						currentFocus--;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 13) {
						/*If the ENTER key is pressed, prevent the form from being submitted,*/
						e.preventDefault();
						if (currentFocus > -1) {
							/*and simulate a click on the "active" item:*/
							if (x) x[currentFocus].click();
						}
					}
				});

				function addActive(x) {
					/*a function to classify an item as "active":*/
					if (!x) return false;
					/*start by removing the "active" class on all items:*/
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					/*add class "autocomplete-active":*/
					x[currentFocus].classList.add("autocomplete-active");
				}

				function removeActive(x) {
					/*a function to remove the "active" class from all autocomplete items:*/
					for (var i = 0; i < x.length; i++) {
						x[i].classList.remove("autocomplete-active");
					}
				}

				function closeAllLists(elmnt) {
					/*close all autocomplete lists in the document,
					except the one passed as an argument:*/
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
						if (elmnt != x[i] && elmnt != inp) {
							x[i].parentNode.removeChild(x[i]);
						}
					}
				}
				/*execute a function when someone clicks in the document:*/
				document.addEventListener("click", function(e) {
					closeAllLists(e.target);
				});
			}

			/*An array containing all the country names in the world:*/
			// var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

		// console.log('data', datas);

			var arr = null;
			$.ajax({
				'async': false,
				'global': false,
				'url': "json_data/data_wlayah.json",
				'dataType': "json",
				'success': function(data) {
					arr = data;
				}
			});
			// return json;
			console.log('data', arr);

			// 'url': "json_data/data_wlayah.json",
			// console.log('data dari json', data_parkir);


			// data = JSON.parse(arr);


			/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
			autocomplete(document.getElementById("myInput"), arr);
		</script>


<script>
	function autocomplete(inp, arr) {
				/*the autocomplete function takes two arguments,
				the text field element and an array of possible autocompleted values:*/
				var currentFocus;
				/*execute a function when someone writes in the text field:*/
				inp.addEventListener("input", function(e) {
					var myHiddenInput2 = document.getElementById('myHiddenInput2');
					var a, b, i, val = this.value;
					/*close any already open lists of autocompleted values*/
					closeAllLists();
					if (!val) {
						return false;
					}
					currentFocus = -1;
					/*create a DIV element that will contain the items (values):*/
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					/*append the DIV element as a child of the autocomplete container:*/
					this.parentNode.appendChild(a);
					/*for each item in the array...*/
					for (i = 0; i < arr.length; i++) {
						var regex = new RegExp('(' + val + ')', 'gi');
						var found = arr[i]['nama'].match(regex);
						/*check if the item starts with the same letters as the text field value:*/
						if (found) {
							var str = arr[i]['nama'].replace(found, `/${val}/`);
							var x = str.split('/');
							var newStr = '';
							for (let xVal of x) {
								if (xVal == val) {
									newStr += `<b>${xVal}</b>`;
								} else {
									newStr += xVal;
								}
							}
							/*create a DIV element for each matching element:*/
							b = document.createElement("DIV");
							/*make the matching letters bold:*/
							b.innerHTML = newStr;
							/*insert a input field that will hold the current array item's value:*/
							b.innerHTML += "<input name='inputNama' type='hidden' value='" + arr[i]['nama'] + "'>";
							b.innerHTML += "<input class='taufiq' name='hiddenInput' type='hidden' value='" + arr[i]['id'] + "'>";
							/*execute a function when someone clicks on the item value (DIV element):*/
							b.addEventListener("click", function(e) {
								/*insert the value for the autocomplete text field:*/
								inp.value = this.getElementsByTagName("input")[0].value;
								myHiddenInput2.value = this.getElementsByClassName('taufiq')[0].value;
								console.log(myHiddenInput2.value);
								/*close the list of autocompleted values,
								(or any other open lists of autocompleted values:*/
								// alert(inp.value);
								closeAllLists();
							});
							a.appendChild(b);
						}
					}
				});
				/*execute a function presses a key on the keyboard:*/
				inp.addEventListener("keydown", function(e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						/*If the arrow DOWN key is pressed,
						increase the currentFocus variable:*/
						currentFocus++;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 38) { //up
						/*If the arrow UP key is pressed,
						decrease the currentFocus variable:*/
						currentFocus--;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 13) {
						/*If the ENTER key is pressed, prevent the form from being submitted,*/
						e.preventDefault();
						if (currentFocus > -1) {
							/*and simulate a click on the "active" item:*/
							if (x) x[currentFocus].click();
						}
					}
				});

				function addActive(x) {
					/*a function to classify an item as "active":*/
					if (!x) return false;
					/*start by removing the "active" class on all items:*/
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					/*add class "autocomplete-active":*/
					x[currentFocus].classList.add("autocomplete-active");
				}

				function removeActive(x) {
					/*a function to remove the "active" class from all autocomplete items:*/
					for (var i = 0; i < x.length; i++) {
						x[i].classList.remove("autocomplete-active");
					}
				}

				function closeAllLists(elmnt) {
					/*close all autocomplete lists in the document,
					except the one passed as an argument:*/
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
						if (elmnt != x[i] && elmnt != inp) {
							x[i].parentNode.removeChild(x[i]);
						}
					}
				}
				/*execute a function when someone clicks in the document:*/
				document.addEventListener("click", function(e) {
					closeAllLists(e.target);
				});
			}

			/*An array containing all the country names in the world:*/
			// var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

		// console.log('data', datas);

			var arr = null;
			$.ajax({
				'async': false,
				'global': false,
				'url': "json_data/data_wlayah.json",
				'dataType': "json",
				'success': function(data) {
					arr = data;
				}
			});
			// return json;
			console.log('data', arr);

			// 'url': "json_data/data_wlayah.json",
			// console.log('data dari json', data_parkir);


			// data = JSON.parse(arr);


			/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
			autocomplete(document.getElementById("myInput2"), arr);
</script>