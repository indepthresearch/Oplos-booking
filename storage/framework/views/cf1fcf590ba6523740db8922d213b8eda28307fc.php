<!DOCTYPE html>
<html lang="en">
<head>
<title>OPLOS Booking-Your ultimate booking patner</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OPLOSBooking Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=icon href="images/milestone_3.png"  type="images/png">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/main_styles.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/checkout.css')); ?>">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://js.stripe.com/v3/"></script>

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
							<div class="user_box_login user_box_link"><a href="listing">list your property</a></div>
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
				<!-- <div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry  -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>explore</h1>
							<h1>book.meet</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div> -->

				<!-- Slider Item -->
				<!-- <div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>explore</h1>
							<h1>book.meet</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div> -->

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
<br><br>
	<!-- Search -->

								<div class="container">
								<div class="container wrapper">
														<div class="row cart-head">
																<div class="container">
																<div class="row">
																		<p></p>
																</div>
																<div class="row">
																		
																</div>
																<div class="row">
																		<p></p>
																</div>
																</div>
														</div>    
														 <?php if(session()->has('success_message')): ?>
																	<div class="spacer"></div>
																	<div class="alert alert-success">
																		<?php echo e(session()->get('success_message')); ?>

																	</div>
																<?php endif; ?>

																<?php if(count($errors) > 0): ?>
																	<div class="spacer"></div>
																	<div class="alert alert-danger">
																		<ul>
																			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																				<li><?php echo e($error); ?></li>
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																		</ul>
																	</div>
																<?php endif; ?>
																<?php if(Cart::count() > 0): ?>
																<h2><?php echo e(Cart::count()); ?> Hotel Already Booked proceed to payment</h2>
					<div class="d-flex justify-content-center">
				<div class="row cart-body content-justified-right">
	 
        <div class="checkout-section">
            <div>
                <form action="<?php echo e(route('book.checkout','$listing')); ?>" method="POST" id="payment-form">
					<?php echo csrf_field(); ?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
																		<!--REVIEW ORDER-->
																		<div class="panel panel-info">
																				<div class="panel-heading">
																						Booking Summary <div class="pull-right"><small><a class="afix-1" href="#"></a></small></div>
																				</div>
																				<div class="panel-body">
																				<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																						<div class="form-group">
																								<div class="col-sm-3 col-xs-3">
																										<a href="#"><img class="img-fluid" src="../images/l5.jpg" alt="logo"></a>
																								</div>
																								<div class="col-sm-6 col-xs-6">
													<div class="col-xs-12"><?php echo e(isset($item->model->property_name)?$item->model->property_name:''); ?>

													</div>
												<div class="col-xs-12"><small>Location:<span><?php echo e(isset($item->model->location)?$item->model->location:''); ?></span></small></div>
											
														</div>
											<div class="col-sm-3 col-xs-3 text-right">
													<h6><span>Ksh</span> <?php echo e(isset($item->model->price_per_hall)?$item->model->price_per_hall:''); ?></h6>
																								</div>
																						</div>
																						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
																						<div class="form-group"><hr /></div>
																						<div class="form-group">
																								<div class="col-xs-12">
																										<strong>Subtotal</strong>
																										<div class="pull-right"><span>Ksh</span><span><?php echo e(Cart::subtotal()); ?></span></div>
																								</div>
																								<div class="col-xs-12">
																										<small>VAT(16%)</small>
																										<div class="pull-right"><span><?php echo e(Cart::tax()); ?></span></div>
																								</div>
																						</div>
																						<div class="form-group"><hr /></div>
																						<div class="form-group">
																								<div class="col-xs-12">
																										<strong>Your  Total Booking Price</strong>
																										<div class="pull-right"><span>Ksh</span><span><?php echo e(Cart::total()); ?></span></div>
																								</div>
																						</div>
																						<?php else: ?>
																						<h3>No Hotel Selected yet <a href="<?php echo e(route('deals')); ?>">Go to Home</a><h3>
																						
																						<?php endif; ?>
																				</div>
																		</div>
																		<!--REVIEW ORDER END-->
																</div>

																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
																		<!--SHIPPING METHOD-->
																		<div class="panel panel-info">
																				<div class="panel-heading">Personal Information</div>
																				<div class="panel-body">
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                     
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                      
           
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo e(old('address')); ?>" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo e(old('city')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="<?php echo e(old('province')); ?>" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="<?php echo e(old('postalcode')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone_number" name="phone" value="<?php echo e(old('phone')); ?>" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Payment Details</h2>

                    <div class="form-group">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>

                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>

          </div>
      </div>
  </div>


                </form>
            </div>



            
                    </div>
                </div> <!-- end checkout-totals -->
            </div>

        </div> <!-- end checkout-section -->
    </div>
							<!-- Footer -->
						<footer class="footer">
								<div class="container">
									<div class="row">

										
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





<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
<script>
        (function(){
            // Create a Stripe client
           var stripe = Stripe('pk_test_w6152p4DgZPymX5Xzjnzp8qD');

            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;

              var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }

              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;

                  // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });

            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);

              // Submit the form
              form.submit();
            }
        })();
    </script>

<!-- If you're using Stripe for payments -->
<!-- <script type="text/javascript" src="https://js.stripe.com/v3/"></script> -->
</body>

</html>