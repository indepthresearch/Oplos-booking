<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>OPLOS Booking-Your ultimate booking patner</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OPLOS Booking Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=icon href="images/milestone_3.png"  type="images/png">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">

<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sandstone/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  <script src= "https://cdnjs.cloudflare.com/ajax/libs/responsive-elements/1.0.2/responsive-elements.js"></script>
	
</head>

<body>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '296723854464006',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    

<div class="super_container">
	
	{{-- Header --}}

	<header class="header">

		{{-- Top Bar --}}

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+25470000000</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="{{route('listing')}}">list your property</a></div>
							<div class="user_box_login user_box_link"><a href="login">login</a></div>
							<div class="user_box_register user_box_link"><a href="register">register</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		{{-- Main Navigation --}}

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">OPLOS Booking</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="/">home</a></li>
								<li class="main_nav_item"><a href="test">about us</a></li>
								<li class="main_nav_item"><a href="deals">offers</a></li>
								<li class="main_nav_item"><a href="{{route('deals')}}">Deals</a></li>
								<li class="main_nav_item"><a href="book">Book Now</a></li>

							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	{{--<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">Home</a></li>
				<li class="menu_item"><a href="about.html">About Us</a></li>
				<li class="menu_item"><a href="offers.html">Offers</a></li>
				<li class="menu_item"><a href="blog.html">Deals</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div> --}}

	{{-- Home --}}

	<div class="home">
		
		{{-- Home Slider --}}

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				{{-- Slider Item --}}
				<div class="owl-item home_slider_item">
					{{-- Image by https://unsplash.com/@anikindimitry --}}
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>explore</h1>
							<h1>book.meet</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				{{-- Slider Item --}}
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>explore</h1>
							<h1>book.meet</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				{{-- Slider Item --}}
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>explore</h1>
							<h1>book.meet</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			{{-- Home Slider Nav - Prev --}}
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			{{-- Home Slider Nav - Next --}}
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			{{-- Home Slider Dots --}}

			{{--<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>--}}
			
		</div>

	</div>

	{{-- Search --}}

	<div class="search">
		

		{{-- Search Contents --}}
		

		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					{{-- Search Tabs --}}

					<div class="search_tabs_container">
					
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt="">
							
							<a href="index">Conferences $ Meetings</a>
							</div>
							
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
							<img src="images/island.png" alt=""><a href="rooms">Accommodation</a>
						    </div>
							
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
							<img src="images/cruise.png" alt=""><a href="product1">Table Booking</a></div>

							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt=""><a href="search">Book A Cab</a>
							</div>
							
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
							<img src="images/diving.png" alt=""><a href="deals">Tour Packages/Safaris</a></div>

                            <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
							<img src="images/cruise.png" alt=""><a href="deals">Hot Deals</a></div>

						</div>		
					</div>

					{{-- Search Panel --}}

					<div class="search_panel active">
						<form action="{{route('search')}}"method="GET" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>City</div>
								
								        
								                     {{-- HTML Markup --}}
										<div class="aa-input-container" id="aa-input-container">
										<i class="fa fa-search search-icon"></i>
											 <!-- <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Search for product" required> -->
											 	<input type="search" name="query" id="query" value="{{ request()->input('query') }}" class="destination search_input" placeholder="Your search begins here" autocomplete="on" required="required">
											    
											</div>
											<!-- <script>
											  var client = algoliasearch('ZR61N5O4S2', 'c5653f38f81693c77a302b86d26b5f64');
											  var index = client.initIndex('listeds_index');
											  //initialize autocomplete on search input (ID selector must match)
											  $('#aa-search-input').autocomplete(
											    {hint: true}, [
											    {
											      source: $.fn.autocomplete.sources.hits(index, { hitsPerPage: 10 }),
											      //value to be displayed in input control after user's suggestion selection
											      displayKey: 'location',
											      //hash of templates used when rendering dataset
											      templates: {
											        //'suggestion' templating function used to render a single suggestion
											        suggestion: function(suggestion) {
											          return '<span>' +
											            suggestion._highlightResult.name.value + '</span><span>' +
											            suggestion.Capacity+ '</span>'
											            //suggestion.Ratings.value + '</span>';
											        }
											      }
											    }
											  ]);
											</script> -->
																
							                 </div>

							<div class="search_item">
								<div>check in</div>
								<input class="date form-control"  type="text" placeholder="check-in date">  
								    <script type="text/javascript">  
								        $('.date').datepicker({  
								           format: 'mm-dd-yyyy'  
								         });  
								    </script>
							</div>
							<div class="search_item">
								<div>check out</div>
								    <input class="date form-control"  type="text" placeholder="check-out date">  
								    <script type="text/javascript">  
								        $('.date').datepicker({  
								           format: 'mm-dd-yyyy'  
								         });  
								    </script>
							</div>
							<div class="search_item">
								<div>Number of Pax</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>10+</option>
								</select>
							</div>
							<div class="search_item">
								<div>Period</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input" >
									<option>8:00AM - 5:00 PM</option>
									<option>8:00AM - 1:00 PM</option>
									<option>8:00AM - 3:00 PM</option>
									<option>8:00AM - 4:00 PM</option>
									<option>More than one day</option>
								</select>
							</div>
							{{--<button class="button search_button">search<span></span><span></span><span></span></button>--}}
                              
						 
					</div>
                   
                   
					{{-- Search Panel --}}

				{{--	<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_2" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_2" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>    

					{{-- Search Panel --}}

					{{--<div class="search_panel">
					<div class="search_panel">
						<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_3" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>   

					{{-- Search Panel --}}

					{{--<div class="search_panel">
					<div class="search_panel">
						<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>  

					{{-- Search Panel --}}

					{{--<div class="search_panel">
					<div class="search_panel">
						<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_5" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_5" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>  

					{{-- Search Panel --}}

					{{--<div class="search_panel">
					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>City</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							{{--<div class="search_item">
								<div>attendees</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>10+</option>
								</select>
							</div>--}}
							{{--<div class="search_item">
								<div>time out</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>8:00AM</option>
									<option>10:00AM </option>
									<option>12:00AM </option>
									<option>2:00PM </option>
									
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>--}}
                              
						

													</div>
												</div>

												</div>
											</div>
										</div>	
										      	
									</div> 
								  
									{{-- Intro --}}
									<br>
									<div class="row offset-1"><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"style="margin-left:38px">
								    More Filters +
								  </button></div>
								</p>
								<div class="collapse" id="collapseExample">
								  <div class="card card-body">
								    <div class="container">
										<form action="" method="">
										{{csrf_field()}}
										
										<div><label><b>Audio-Visual Equipments</b></label><br>
														<br></div>
									<div class="row offset-1">
													<div class="col">
														<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1" value="PHP"> Flip chart
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" value="CSS"> LCD Projector
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Java"> Facilitator kit
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4" value="HTML"> Television
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Bootstrap" > Music System
						</label><br></div>
                    </div>
                     <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1" value="PHP"> Pencil $ Paper
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" value="CSS">WiFi
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Java"> Screen
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4" value="HTML"> Microphone System
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Bootstrap" > Speakers Desk
						</label><br></div>
						
					</div>
					 <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1" value="PHP"> Telephone Conference
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" value="CSS">Pin Board
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Java"> DVD player
						</label><br></div>
						
										</div>
											
									</div>
							</div>
        


				        <div class="container">
						<div><label><b>Food $ Beverage</b></label><br>
										<br></div>
					<div class="row offset-1">
					<div class="col">
                       <div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" value="CSS"> Business Lunch
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Java"> Business Dinner
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4" value="HTML"> Breakfast
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Bootstrap" >Beer $ wine
						</label><br></div>
                    </div>
                     <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1" value="PHP"> 1x coffee break
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" value="CSS">Coffee $ tea
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Java"> 3-Course lunch
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4" value="HTML"> Champagne
						</label><br></div>
						
						
					</div>
					 <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
                    	<label class="checkbox-inline">
						  <input type="checkbox" id="Check1" value="PHP"> Soft drinks 
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" value="CSS">Fruit baskets
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Java"> water
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" value="Bootstrap" > Biscuits
						</label><br></div>
					
													</div>
											</div>
							         
									</div>

							       <br><br>

								  </div>
								   </div>
								   <div class="col">
										<div class="form-group">
						      <button class="button search_button" id="query" name="query" value="{{request()->input('query')}}" style="margin-right:38px">search<span></span><span></span><span></span></button>
					            </div>
			</form>
								  </div>
								</div>  
								   <br><br>
 			<div class="container">  
 				<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
			<div class="row">		
					<div class="col-md-4 column"><img alt="100 percent Flexibility" src="/images/flex.png">
								<h2>100% Flexibility</h2>

								<p>Free cancellations 48 hours prior to the meeting .</p>
					</div>

					<div class="col-md-4 column"><img alt="100 percent Security" src="/images/smile.png">
								<h2>100% Security</h2>

								<p>No booking fee, no advance payment, no registration required.</p>
					</div>

					<div class="col-md-4 column"><img alt="100 percent Online booking" src="/images/thumb-up.png">
								<h2>100% Online booking</h2>

								<p>No more requests for proposal. Book directly!</p>
					</div>
				</div>
                </div>
                <br><br>
					<div class="container">
						<div class="row">
							<div class="col">
								<h4 class="intro_title text-center">The Best Conference Facilities</h4>
							</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					{{--<div class="intro_text text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
					</div>--}}
				</div>
			</div>
			<div class="row intro_items">

				{{-- Intro Item --}}

               <div class="form-group">
			     @foreach($listings->slice(0, 3) as $listing)
					   {{ $loop->parent }} {{-- Starts with 1 --}}
				<div class="col-lg-4 intro_col">
					<div class="intro_item">

						{{--<div class="intro_item_overlay"></div>--}}
						{{-- Image by https://unsplash.com/@dnevozhai --}}
                     
						<div class="intro_item_background" style="background-image:url(images/4.jpg)"><p><i class="fa fa-spinner fa-spin fa-2x"></i></p></div>
						<div class="ribbon red"><span>Popular</span></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							{{--<div class="intro_date">May 25th - June 01st</div>--}}
							<div class="button intro_button"><div class="button_bcg"></div><a href="{{route('product.show',$listing->property_name)}}">Book Now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>{{$listing->property_name}}</h1>
								<div class="intro_price">Ksh {{$listing->price_per_hall}}</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					
					</div>
				</div>
				@endforeach
               </div>
				
<br>
	{{-- CTA --}}

	{{--<div class="cta">
		{{-- Image by https://unsplash.com/@thanni --}}
		{{--<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					{{-- CTA Slider --}}

				{{--	<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							{{-- CTA Slider Item --}}
							{{--<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>

							{{-- CTA Slider Item --}}
							{{--<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>

							{{-- CTA Slider Item --}}
						{{--	<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						{{-- CTA Slider Nav - Prev --}}
						{{--<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						{{-- CTA Slider Nav - Next --}}
						{{--<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
			</div>
					
	</div>

	{{-- Offers --}}

		<div class="living_middle">
   	  <div class="container">
   	  	<form>
   	  		<h2 class="title block-title">Luxury Conference Rooms</h2>
       <div class="form-group">
	   @foreach($listings->slice(0, 9) as $listing)
	   {{ $loop->parent }} 
   	    <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
   	    	<div class="living_box"><a href="{{route('product.show',$listing->property_name)}}">
			    <img src="images/l5.jpg" class="img-responsive" alt=""/>
			    <div class="ribbon green"><span>Ksh {{$listing->price_per_hall}}</span></div>
				<span class="sale-box">
				  <span class="sale-label">-17%</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3><a href="product">{{$listing->property_name}}</a></h3>
				<p>Location: {{$listing->location}} </p>
				<ul><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
		        </ul>
				<a href="{{route('product.show',$listing->property_name)}}" class="btn3">Book</a>
				<p class="price">Ksh {{$listing->price_per_hall}}</p>
				</div>
			    <table border="1" class="propertyDetails">
                <tbody><tr>
                   <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;">206 Seats</td>
                   <td><img src="images/drop.png" alt="" style="margin-right:7px;">WiFi</td>
                    </tr>
                </tbody></table>
			</div>
		 </div>
		 @endforeach
		</div>
		
   	    </div>
   	</form>
   </div>
    
	{{-- Testimonials --}}

	{{--<div class="testimonials">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">what our clients say about us</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					{{-- Testimonials Slider --}}

				{{--	<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">

							{{-- Testimonial Item --}}
							{{--<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
									<div class="test_icon"><img src="images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							{{-- Testimonial Item --}}
						{{--	<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
									<div class="test_icon"><img src="images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							{{-- Testimonial Item --}}
						{{--	<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
									<div class="test_icon"><img src="images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							{{-- Testimonial Item --}}
						{{--	<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/test_2.jpg" alt=""></div>
									<div class="test_icon"><img src="images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							{{-- Testimonial Item --}}
						{{--	<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/test_1.jpg" alt=""></div>
									<div class="test_icon"><img src="images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							{{-- Testimonial Item --}}
							{{--<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/test_3.jpg" alt=""></div>
									<div class="test_icon"><img src="images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

						</div>

						{{-- Testimonials Slider Nav - Prev --}}
						{{--<div class="test_slider_nav test_slider_prev">
							<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						{{-- Testimonials Slider Nav - Next --}}
						{{--<div class="test_slider_nav test_slider_next">
							<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>
					
				</div>
			</div>

		</div>
	</div>--}}
<div class="container">
	<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">How it works</h2>
				</div>

			</div>
            
			<div class="row trending_container">


				{{-- Trending Item --}}
		
				<div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 how-it-works-icon-container">
                        <div class="hiw1">
                            <span class="how-it-works how-it-works1"></span>
                        </div>
                    </div>
                </div>
                <img src="images/search12.png" alt="">
                <div class="row">
                    <div class="col-lg-12 col-md-12 hiw-content">
                        <span>Search</span>
                        <div class="hiw-text">Enter your destination in the search bar.
Select dates and number of people, and Search.</div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4">


                <div class="row">
                    <div><img src="images/book21.jpg" alt=""></div>
                    <div class="col-lg-12 col-md-12 how-it-works-icon-container">
                        <div class="hiw2">

                            <span class="how-it-works how-it-works2"></span>
                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12 hiw-content">
                        <span>Compare</span>
                        <div class="hiw-text">Browse hotels by star, price, location or amenities.
We always have the perfect stay for you at the best price.</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
            <div><img src="images/images (7).png" alt=""></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 how-it-works-icon-container">
                        <div class="hiw3">
                            <span class="how-it-works how-it-works3"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 hiw-content">
                        <span>Book now, pay later!</span>
                        <div class="hiw-text">Simply click on Book now. You can choose to pay online or later when you arrive at your hotel.
Pack your bags and enjoy your stay!</div>
                    </div>
                </div>
            </div>
        </div>

			</div>
		</div>
	</div>
</div>
	<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Footer --}}

	<footer class="footer">
		<div class="container">
			<div class="row">

				{{-- Footer Column --}}
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">OPLOS Booking</a></div>
							</div>
							<p class="footer_about_text">OPLOS Booking is an online platform for conference,meeting, rooms and hotel booking .We always do our best to make sure our clients gets satisfactory services. BookMe is an easy to use platform</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				{{-- Footer Column --}}
				
				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Products</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="#">Conferences</a></div>
									<!--<div class="footer_blog_date">Nov 29, 2017</div>-->
								</div>
							</div>

								<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="#">Accomodation</a></div>
									<!--<div class="footer_blog_date">Nov 29, 2017</div>-->
								</div>
							</div>
							

								<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
							
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="#">Book a Cab</a></div>
									<!--<div class="footer_blog_date">Nov 29, 2017</div>-->
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
							
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="#">Tour packages/safaris</a></div>
									<!--<div class="footer_blog_date">Nov 29, 2017</div>-->
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="#">Training Rooms</a></div>
									<!--<div class="footer_blog_date">Nov 29, 2017</div>-->
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Our Partners</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li><a href="#">Serena Hotels</a></li>
								<li><a href="#">PrideInn Paradise</a></li>
								<li><a href="#">Silver Springs Hotel</a></li>
								<li><a href="#">FairMount Hotel</a></li>
								<li><a href="#">Hilton Hotels</a></li>
								<li><a href="#">Hotel Kempisky</a></li>
								<li><a href="#">Great Riftvalley Lodge</a></li>
								<li><a href="#">Maanzoni Lodge</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact Us</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Njema Court R2  Rapta Road</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">254-000-0000</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:info@bookme.co.ke?Subject=Hello" target="_top">info@oplosbooking.com</a></div>
								</li>
								
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
	{{-- Copyright --}}



{{-- Include AlgoliaSearch JS Client and autocomplete.js jQuery plugin after the jQuery dependency --}}
											<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
											<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
											<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.jquery.min.js"></script>
											{{-- Initialize autocomplete menu --}}
											
                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/responsive-elements/1.0.2/responsive-elements.min.js"></script>
	<script type="https://cdnjs.cloudflare.com/ajax/libs/responsive-elements/1.0.2/responsive-elements.min.js.map"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
   {{-- Include AlgoliaSearch JS Client and autocomplete.js library --}}
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
   <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-124031214-1', 'auto');
ga('send', 'pageview');
</script>
    </script>  
    {{--start Mixpanel --}}
    <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("412a5d35fda9da7599d1efeb1d4bbf06");</script>{{-- end Mixpanel --}}
											<script src="js/jquery-3.2.1.min.js"></script>
											<script src="styles/bootstrap4/popper.js"></script>
											<script src="styles/bootstrap4/bootstrap.min.js"></script>
											<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
											<script src="plugins/easing/easing.js"></script>
											<script src="js/custom.js"></script>
											<script src="js/algolia.js"></script>
											<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
<script>
	var $container = $('#image-container');
var $status = $('#status');
var $progress = $('progress');

var supportsProgress = $progress[0] &&
  // IE does not support progress
  $progress[0].toString().indexOf('Unknown') === -1;

var loadedImageCount, imageCount;

$('#add').click( function() {
  // add new images
  var items = getItems();
  $container.prepend( $(items) );
  // use ImagesLoaded
  $container.imagesLoaded()
    .progress( onProgress )
    .always( onAlways );
  // reset progress counter
  imageCount = $container.find('img').length;
  resetProgress();
  updateProgress( 0 );
});

// reset container
$('#reset').click( function() {
  $container.empty();
});

// -----  ----- //

// return doc fragment with
function getItems() {
  var items = '';
  for ( var i = 0; i < 7; i++ ) {
    items += getImageItem();
  }
  return items;
}

// return an <li> with a <img> in it
function getImageItem() {
  var item = '<li class="is-loading">';
  var size = Math.random() * 3 + 1;
  var width = Math.random() * 110 + 100;
  width = Math.round( width * size );
  var height = Math.round( 140 * size );
  var rando = Math.ceil( Math.random() * 1000 );
  // 10% chance of broken image src
  // random parameter to prevent cached images
  var src = rando < 100 ? '//foo/broken-' + rando + '.jpg' :
    // use lorempixel for great random images
    '//lorempixel.com/' + width + '/' + height + '/' + '?' + rando;
  item += '<img src="' + src + '" /></li>';
  return item;
}

// -----  ----- //

function resetProgress() {
  $status.css({ opacity: 1 });
  loadedImageCount = 0;
  if ( supportsProgress ) {
    $progress.attr( 'max', imageCount );
  }
}

function updateProgress( value ) {
  if ( supportsProgress ) {
    $progress.attr( 'value', value );
  } else {
    // if you don't support progress elem
    $status.text( value + ' / ' + imageCount );
  }
}

// triggered after each item is loaded
function onProgress( imgLoad, image ) {
  // change class if the image is loaded or broken
  var $item = $( image.img ).parent();
  $item.removeClass('is-loading');
  if ( !image.isLoaded ) {
    $item.addClass('is-broken');
  }
  // update progress element
  loadedImageCount++;
  updateProgress( loadedImageCount );
}

// hide status when done
function onAlways() {
  $status.css({ opacity: 0 });
}

</script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

</body>
