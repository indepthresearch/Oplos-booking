<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
<title>OPLOS Booking-Your ultimate booking patner</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BookMe Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/main_styles.css')); ?>">
<link rel=icon href="images/milestone_3.png"  type="images/png">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.css">
<link rel ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="styles/my_styles.css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
<div>
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
							<div class="user_box_login user_box_link"><a href="<?php echo e(route('listing')); ?>">list your property</a></div>
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
							<div class="logo"><a href="/"><img src="images/logo.png" alt="">OPLOS Booking</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="/">home</a></li>
								<li class="main_nav_item"><a href="#">about us</a></li>
								<li class="main_nav_item"><a href="deals">offers</a></li>
								<li class="main_nav_item"><a href="<?php echo e(route('deals')); ?>">Deals</a></li>
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
					<!-- Image by https://unsplash.com/@anikindimitry  -->
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

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>
</div>
</div>


	<!-- Search -->
<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<!--single-page-->
				<div class="container">
        <?php if(session()->has('success_message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success_message')); ?>

            </div>
        <?php endif; ?>

        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

				<div class="single-page">
				 
							<div class="col-md-8 single-gd-lt">
							<div class="single-pg-hdr">
												<div class="product section">
												<h2><?php echo e($accomodation->property_name); ?></h2>
												<p><?php echo e($accomodation->location); ?></p>
												<p>Jump to: <a href="#">Over View</a>|<a href="#">Room Choices</a>|<a href="#">Hotel Information</a></p>
												</div>
													<div class="row">
												 <div class="col-md-8">
                                  <img class="img-fluid" src="http://placehold.it/850x500" alt="">
                                                </div>
												</div>
												<div>
												</div>
												<p>
													<h1>About  <?php echo e($accomodation->property_name); ?></h1>
                                                     <?php echo e($accomodation->details); ?>

												</p></div>
									 </div>
							    </div>
                              
										<!-- FlexSlider -->

                           </div>
						<div class="col-md-4 single-gd-rt">
							<div class="spl-btn">
								<div class="spl-btn-bor">
									<a href="book">
										<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>											
									</a>
									<p>Special Offer</p>	
									<script>
										$(document).ready(function(){
										$('[data-toggle="tooltip"]').tooltip();   
										});
									</script>
								</div>
                                <img src="images/conference8.jpg" alt="">
								<div class="sp-bor-btn text-right">
                                    <?php echo e($accomodation->property_name); ?>

									<h4><span>Ksh 8,750</span> <?php echo e($accomodation->price); ?></h4>
									<p class="best-pri">Best price</p>
									<a class="best-btn" href="book">Book Now</a>
								</div>
							</div>
	                       <div id='map' style='width: 200px; height: 200px;'>
	                       	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63718.72916803739!2d102.31975295000002!3d3.489618449999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31ceba2007355f81%3A0xd2ff1ad6a3ca801!2sMentakab%2C+Pahang%2C+Malaysia!5e0!3m2!1sen!2sin!4v1439535856431"></iframe>
	                       </div>
								
							<div class="other-comments">
							<!-- 	<div class="comments-head">
									<h3>Excellent</h3>
									<p>4.5/5</p>
									<div class="clearfix"></div>
								</div>
								<div class="comments-bot">
									<p>"Vestibulum ullamcorper condimentum luctus. Ut ullamcorper elit eu auctor commodo."</p>
									<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> John Doe</h4>
								</div>
								<div class="comments-bot">
									<p>"Aliquam non purus quis tellus varius egestas ut vitae tellus. Pellentesque non est ac tortor maximus imperdiet at id quam."</p>
									<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Luther</h4>
								</div>
								<div class="comments-bot">
									<p>"Vestibulum sapien quam, interdum quis bibendum quis, malesuada a nisi. Proin at blandit justo."</p>
									<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Patrick</h4>
							-->
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
				</div>
				<!--//single-page-->
			</div>
			<div class="row">
 <div class="col-sm-12" align="center">

        <form id='form-id'>
            <input id='watch-me' name='test' type='radio' checked /> Presidential
            <input id='see-me' name='test' type='radio' /> Dulexe
            <input id='look-me' name='test' type='radio' /> Standard
        </form>
        <br><br>
        <div id='show-me'>
            <!-- Nav tabs -->
            <div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="<?php echo e(route('book.show')); ?>"><img class="img-fluid" src="http://placehold.it/500x300" alt=""></a>
								<div class="room-basic-info">
									<a href="<?php echo e(route('book.show')); ?>"><?php echo e($accomodation->room_type); ?></a>
									<h6>Room Capacity:</h6>
									<p><?php echo e($accomodation->maximum_occupancy); ?> People</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
							<h6>Amenities $ services</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>Flip chart</li>
									<li>Projector</li>
									<li>Notebook $ Pencil</li>
									<li>Screen</li>
									<li>Wifi</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Total Price</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer">Ksh <?php echo e($accomodation->price); ?></span>
								<span class="p-last-price">Ksh1930</span>
							</div>
						</div>
															 <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
            	<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
						<div class="col-md-3 p-table-grid">
							
							<div class="book-button-column">
								<form action="<?php echo e(route('cart.store',$accomodation)); ?>" method="POST">
								<?php echo e(csrf_field()); ?>

								<input type="hidden" name="id" value="<?php echo e($accomodation->id); ?>">
								<input type="hidden" name="property_name" value="<?php echo e($accomodation->property_name); ?>">
								<input type="hidden" name="price_per_hall" value="<?php echo e($accomodation->price); ?>">
								<button type="submit" class="button-button-primary">Book</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
						<div class="clearfix"> </div>
					</div>
				</div>
        </div>
        
        <div id='show-me-two' style='display:none; border:2px solid #ccc'><div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="<?php echo e(route('book.show')); ?>"><img class="img-fluid" src="http://placehold.it/500x300" alt=""></a>
								<div class="room-basic-info">
									<a href="<?php echo e(route('book.show')); ?>"><?php echo e($accomodation->room_type); ?></a>
									<h6>Room Capacity:</h6>
									<p><?php echo e($accomodation->maximum_occupancy); ?> People</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
							<h6>Amenities $ services</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>Flip chart</li>
									<li>Projector</li>
									<li>Notebook $ Pencil</li>
									<li>Screen</li>
									<li>Wifi</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Total Price</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer">Ksh <?php echo e($accomodation->price); ?></span>
								<span class="p-last-price">Ksh1930</span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="<?php echo e(route('book.show')); ?>">Book</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
        <!-- <div id='show-me-three' style='display:none; border:2px solid #ccc'>Hello I'm Div 3
        </div> -->
          
 </div>
       <div id='show-me-three' style='display:none; border:2px solid #ccc'>
					<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="<?php echo e(route('book.show')); ?>"><img class="img-fluid" src="http://placehold.it/500x300" alt=""></a>
								<div class="room-basic-info">
									<a href="<?php echo e(route('book.show')); ?>"><?php echo e($accomodation->room_type); ?></a>
									<h6>Room Capacity:</h6>
									<p><?php echo e($accomodation->maximum_occupancy); ?> People</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Amenities $ services</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>Flip chart</li>
									<li>Projector</li>
									<li>Notebook $ Pencil</li>
									<li>Screen</li>
									<li>Wifi</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Total Price</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer">Ksh <?php echo e($accomodation->price); ?></span>
								<span class="p-last-price">Ksh1330</span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="<?php echo e(route('book.show')); ?>">Book</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
          
 </div>
</div>


				<!--//single-page-->
			<!-- </div>
			
			<div class="row">
          <div class="container">
			<div class="c-rooms">
				<div class="p-table">
					<div class="p-table-grids">
					
						<div class="col">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">

								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="#"><img src="images/l5.jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="book"><?php echo e($accomodation->room_type); ?></a>
									<h6>Room Capacity:</h6>
									<p><?php echo e($accomodation->maximum_occupancy); ?> People</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Amenities $ services</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>Flip chart</li>
									<li>Projector</li>
									<li>Notebook $ Pencil</li>
									<li>Screen</li>
									<li>Wifi</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Total Price</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer"><?php echo e($accomodation->price); ?></span>
								<span class="p-last-price">Ksh23,000</span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="<?php echo e(route('book.show')); ?>">Book</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="<?php echo e(route('book.show')); ?>"><img src="images/images (7).jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="<?php echo e(route('book.show')); ?>"><?php echo e($accomodation->room_type); ?></a>
									<h6>Room Capacity:</h6>
									<p><?php echo e($accomodation->maximum_occupancy); ?> People</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
							<h6>Amenities $ services</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>Flip chart</li>
									<li>Projector</li>
									<li>Notebook $ Pencil</li>
									<li>Screen</li>
									<li>Wifi</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Total Price</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer">Ksh <?php echo e($accomodation->price); ?></span>
								<span class="p-last-price">Ksh1930</span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="<?php echo e(route('book.show')); ?>">Book</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="p-table">
					<div class="p-table-grids">
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Room type</h6>
							</div>
							<div class="p-table-grid-info">
								<a href="<?php echo e(route('book.show')); ?>"><img src="images/conference8.jpg" alt=""></a>
								<div class="room-basic-info">
									<a href="<?php echo e(route('book.show')); ?>"><?php echo e($accomodation->room_type); ?></a>
									<h6>Room Capacity:</h6>
									<p><?php echo e($accomodation->maximum_occupancy); ?> People</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Amenities $ services</h6>
							</div>
							<div class="rate-features">
								<ul>
									<li>Flip chart</li>
									<li>Projector</li>
									<li>Notebook $ Pencil</li>
									<li>Screen</li>
									<li>Wifi</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Total Price</h6>
							</div>
							<div class="avg-rate">
								<h5>Recommended for you</h5>
								<p>Price is now:</p>
								<span class="p-offer">Ksh <?php echo e($accomodation->price); ?></span>
								<span class="p-last-price">Ksh1330</span>
							</div>
						</div>
						<div class="col-md-3 p-table-grid">
							<div class="p-table-grad-heading">
								<h6>Book</h6>
							</div>
							<div class="book-button-column">
								<a href="<?php echo e(route('book.show')); ?>">Book</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div> -->
	
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="/"><img src="images/logo.png" alt="">OPLOS Booking</a></div>
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

	<!-- Copyright -->




<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
	<script src="js/algolia.js"></script>
		<script>$(document).ready(function () 
 { 
  $("#watch-me").click(function()
  {
    $("#show-me:hidden").show('slow');
   $("#show-me-two").hide();
   $("#show-me-three").hide();
   });
   $("#watch-me").click(function()
  {
    if($('watch-me').prop('checked')===false)
   {
    $('#show-me').hide();
   }
  });
  
  
  
  
  
  
  $("#see-me").click(function()
  {
    $("#show-me-two:hidden").show('slow');
   $("#show-me").hide();
   $("#show-me-three").hide();
   });
   $("#see-me").click(function()
  {
    if($('see-me-two').prop('checked')===false)
   {
    $('#show-me-two').hide();
   }
  });
  
  
  
  
  
  
  
  $("#look-me").click(function()
  {
    $("#show-me-three:hidden").show('slow');
   $("#show-me").hide();
   $("#show-me-two").hide();
   });
   $("#look-me").click(function()
  {
    if($('see-me-three').prop('checked')===false)
   {
    $('#show-me-three').hide();
   }
  });
  
 });
</script>
</body>

</html>