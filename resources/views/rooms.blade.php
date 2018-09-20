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
<link rel="stylesheet" type="text/css" href="{{ asset('styles/autocomplete.css') }}">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
    	<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
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
      
    <!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("412a5d35fda9da7599d1efeb1d4bbf06");</script><!-- end Mixpanel -->
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

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

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="index"><img src="images/logo.png" alt="">OPLOS Booking</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index">home</a></li>
								<li class="main_nav_item"><a href="#">about us</a></li>
								<li class="main_nav_item"><a href="deals">offers</a></li>
								<li class="main_nav_item"><a href="deals">Deals</a></li>
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

	<!--<div class="menu trans_500">
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
	</div>-->

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>explore</h1>
							<h1>book.meet</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
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

				<!-- Slider Item -->
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
			
			<!-- Home Slider Nav - Prev -->
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
			
			<!-- Home Slider Nav - Next -->
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

			<!-- Home Slider Dots -->

			<!--<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>-->
			
		</div>

	</div>
</div>
	 
   					
						
		<div class="living_middle">
			<div class="container">
				{{--search begins--}}
{{-- Search Panel --}}

					<div class="search_panel active">
						<form action="{{route('search')}}"method="GET" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>City</div>
								
								        
								                     {{-- HTML Markup --}}
										<div class="aa-input-container" id="aa-input-container">
											<input type="search" class="destination search_input" placeholder="Your search begins here" id="aa-search-input"autocomplete="on" required="required">
											    
											</div>
											<script>
											  var client = algoliasearch('71RF7PMP2B', '75caa0412246e67ac1191a8c92530f37');
											  var index = client.initIndex('Algolia');
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
											</script>
																
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
								<div>Room Type</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>Standard</option>
									<option>Deluxe</option>
									<option>Single Standard</option>
									<option>Double Deluxe</option>
									<option>Cottage</option>
									<option>Master Suite</option>
									<option>Presidential Suite</option>
									<option>Mini suite</option>
									
								</select>
							</div>
							<div class="search_item">
								<div>timing</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input" >
									<option>8:00AM - 5:00 PM</option>
									<option>8:00AM - 1:00 PM</option>
									<option>8:00AM - 3:00 PM</option>
									<option>8:00AM - 4:00 PM</option>
									<option>More than one day</option>
								</select>
							</div>
							
                             
						 
					</div>
                   
                   <div> <button class="button search_button">search<span></span><span></span><span></span></button></div>

									</div> 
								  
		{{--end of search--}}
   	  <div class="container">
   	  		<h2 class="title block-title">Luxury Hotel Rooms</h2>
       <div class="form-group">
	   @foreach($accomodations->slice(0, 12) as $accomodation)
	   {{ $loop->parent }} 
   	    <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
   	    	<div class="living_box"><a href="{{route('accomodation',$accomodation->price)}}">
			    <img src="images/l5.jpg" class="img-responsive" alt=""/>
			    <div class="ribbon green"><span>Ksh {{$accomodation->price}}</span></div>
				<span class="sale-box">
				  <span class="sale-label">-17%</span>
			    </span>
				</a>
				<div class="living_desc">
				<h3><a href="{{route('accomodation',$accomodation->price)}}">{{$accomodation->property_name}}</a></h3>
				<p>Room Type: {{$accomodation->room_type}} </p>
				<p>Maximum Occupacy: {{$accomodation->maximum_occupancy}} </p>
				<p>Location: {{$accomodation->location}} </p>
				<ul><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
		        </ul>
				<a href="{{route('accomodation',$accomodation->price)}}" class="btn3">Book</a>
				<p class="price">Ksh {{$accomodation->price}}</p>
				</div>
			    <table border="1" class="propertyDetails">
                <tbody><tr>
                   <td><img src="images/area.png" alt="" style="margin-right:7px;">{{$accomodation->Area}} M</td>
                   <td><img src="images/bed.png" alt="" style="margin-right:7px;">{{$accomodation->beds}}</td>
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
    <footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">OPLOS Booking</a></div>
							</div>
							<p class="footer_about_text">OPLOS Booking is an online platform for conference,meeting, rooms and hotel booking .We always do our best to make sure our clients gets satisfactory services. OPLOS Booking is an easy to use platform</p>
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

				<!-- Footer Column -->
				
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