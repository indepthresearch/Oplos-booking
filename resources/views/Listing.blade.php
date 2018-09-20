<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>OPLOS Booking-Your ultimate booking patner</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BookMe Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=icon href="images/milestone_3.png"  type="images/png">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 
<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

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

	<!-- Search -->
<!-- Offers -->
<div class="container" id="myWizard">
   <div class="navbar">
      <div class="navbar-inner">
            <ul class="nav nav-tabs">
               <li class="active"><a href="#step1" data-toggle="tab">Basic Information</a></li>
               <li><a href="#step2" data-toggle="tab">Capacity $ Pricing</a></li>
               <li><a href="#step3" data-toggle="tab">Services $ Amenities</a></li>
               <li><a href="#step4" data-toggle="tab">Photos</a></li>
               <li><a href="#step5" data-toggle="tab">Description</a></li>
               <li><a href="#step6" data-toggle="tab">Wrap-Up</a></li>
            </ul>
      </div>
   </div>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
   <form class="tab-content" action="listing" method="POST" enctype="multipart/form-data"id="myForm">
   	{{csrf_field()}}
      <div class="tab-pane active" id="step1">
      	<span class="green">1</span>
         <h5>Just a few Details About Yourself...</h5>
        <ul> 
        	<div class="form-group">
         <label>Your Property Name</label>
         <span><li><input class="form-control" id="" name="property_name" required="" placeholder="Property Name"></li></span>
     </div>
         <h6>Contact Details Of this Property</h6>
         <div class="form-group">
         <label>Name of Owner</label>
         <span><li><input class="form-control" id="input1" name="name_owner" required="" placeholder="Name of Owner" ></li></span>
     </div>
     <div class="form-group">
         <label>Phone Number</label>
         <span><li><input class="form-control" id="input1" name="phonenumber" required="" placeholder="phonenumber" ></li></span>
     </div>
     <div class="form-group">
         <label>Email Address</label>
         <span><li><input class="form-control" id="input1" name="email" required="" placeholder ="Email" ></li></span>
     </div>
     <div class="form-group">
         <label>Property Location</label>
         <span><li><input class="form-control" id="input1" name="location" required="" placeholder="property location"></li></span>
     </div>
     <div class="form-group">
         <label>Property Ratings</label>
         <span><li><input class="form-control" id="input1" name="Ratings" required="" placeholder="Ratings" ></li></span>
     </div>
         <br><br>
         {{--<span><li> <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button></li></span>--}}
         </ul>
      </div>
      <div class="tab-pane" id="step2">
      	<span class="green">2</span>
         <h5>A few details about your hotel</h5>
         <ul> 
         	<div class="form-group">
         <label>Number of Conference Halls</label>
         <span><li><input class="form-control" id="input1" name="number_conference_hall" placeholder="" ></li></span>
     </div>
     <div class="form-group">
         <label>Conference Halls Capacity</label>
         <span><li><input class="form-control" id="input1" name="capacity" required="" placeholder="" ></li></span>
     </div>
     <div class="form-group">
         <label>Price per person</label>
         <span><li><input class="form-control" id="input1" name="price_per_person" required="" placeholder=" " ></li></span>
     </div>
     <div class="form-group">
         <label>Price per square metre</label>
         <span><li><input class="form-control" id="input1" name="price_per_metre" required="" placeholder=" " ></li></span>
         <div class="form-group">
         <label>Price per Hall</label>
         <span><li><input class="form-control" id="input1" name="price_per_hall" required="" placeholder=" " ></li></span>
	 </div>
	 <div class="form-group">
    <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    conference room
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Class room</a>
    <a class="dropdown-item" href="#">U-shaped</a>
    <a class="dropdown-item" href="#">Theatre</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div></div>
</div>
         <br><br>
        {{--<span><li> <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button></li></span>--}}
         </ul>
      </div>

      <div class="tab-pane" id="step3">
         <h5>Services  and Amenities</h5>
         <span class="green">3</span>
         <p>What services and beaverages do you provide?</p>
			<div class="container">
				<div><label><b>Audio-Visual Equipments</b></label><br>
								<br></div>
			<div class="row offset-1">
							<div class="col">
								<div class="form-group">
						<label class="checkbox-inline" name="checkbox" value="checkbox">
						  <input type="checkbox" id="Check1" name="boxes []" value="flipchart"> Flip chart
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" name = "boxes[]" value="lcdprojector"> LCD Projector
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" name = "boxes[]" value="facilitatorkit"> Facilitator kit
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4" name = "boxes[]" value="television"> Television
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" name="boxes[]" value="musicsytem" > Music System
						</label><br></div>
                    </div>
                     <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1"name="boxes[]" value="pensil$paper"> Pencil $ Paper
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2"name="boxes[]" value="wifi">WiFi
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3"name="boxes[]" value="screen"> Screen
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4" name="boxes[]"value="microphonesystem"> Microphone System
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3"name="boxes[]"value="speakerdesk" > Speakers Desk
						</label><br></div>
						
					</div>
					 <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1" name="boxes[]"value="telephoneconference"> Telephone Conference
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" name="boxes[]"value="pinboard">Pin Board
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" name="boxes[]"value="dvdplayer"> DVD player
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
						  <input type="checkbox" id="Check2"name="boxes[]" value="businesslunch"> Business Lunch
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3"name="boxes[]" value="businessdinner"> Business Dinner
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4"name="boxes[]" value="breakfast"> Breakfast
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3"name="boxes[]" value="beer$wine" >Beer $ wine
						</label><br></div>
                    </div>
                     <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check1"name="boxes[]" value="coffeebreak"> 1x coffee break
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2"name="boxes[]" value="cofee$tea">Coffee $ tea
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3"name="boxes[]" value="3courselunch"> 3-Course lunch
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check4"name="boxes[]" value="champaigne"> Champagne
						</label><br></div>
						
						
					</div>
					 <br><br><br><br>
                    <div class="col">
                    	<div class="form-group">
                    	<label class="checkbox-inline">
						  <input type="checkbox" id="Check1"name="boxes[]" value="softdrinks"> Soft drinks 
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check2" name="boxes[]"value="fruitbasket">Fruit baskets
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" name="boxes[]"value="water"> water
						</label><br></div>
						<div class="form-group">
						<label class="checkbox-inline">
						  <input type="checkbox" id="Check3" name="boxes[]"value="biscuits" > Biscuits
						</label><br><br></div>
						{{--<span><li> <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button></li></span>--}}
					</div>
						
				</div>

		</div>

       <br><br>
         
         
      </div>

       <div class="tab-pane" id="step4">
      	<span class="green">4</span>
         <h5>Upload some photos of your hotel.</h5>        
				<div class="container">
				<div class="col-md-6">
				    <div class="form-group">
				        <label>Upload Image</label>
				        <div class="input-group">
				            <span class="input-group-btn">
				                <span class="btn btn-default btn-file">
				                    Browse… <input type="file" name="file" id="img">
				                </span>
				            </span>
				            <input type="text" class="form-control" placeholder="upload your photos">
				        </div>
				        <img id='img-upload'/>
				    </div>
				</div>
				</div>
         {{--<span><li> <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button></li></span>--}}
         
      </div>

        <div class="tab-pane" id="step5">
      	<span class="green">5</span>
         <h5>Description About Your Hotel.</h5>        
				
						<div class="form-group">
    <label for="exampleFormControlTextarea1" name="Description" value="Description">Description</label>
    <textarea class="form-control rounded-0" id="Description" rows="10"></textarea>
</div>
		<div class="form-group">
    
    </div>
  
    
         {{--<span><li> <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button></li></span>--}}
      </div><br>
  
      
      <div class="tab-pane" id="step6">
      	<span class="green">6</span>
      	<p>CONGRATULATIONS!!!</p>
         <p>Thank Your for taking your time to register your property Submit by clicking the button below.One of our team members will get in touch.</p>
          <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>
      </div>
  </div>

   </form>
</div>





	<!-- Footer -->

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




<script type="text/javascript">
	$('[data-toggle=tab]').click(function () {
  return true;}
).addClass("text-muted");

var validated = function(tab){
  tab.unbind('click').removeClass('text-muted').addClass('green');
}

//validate inputs on click of button
$('.btn-ok').click(function(){
    
    var allValid = true;
    // get each input in this tab pane and validate
    $(this).parents('.tab-pane').find('.form-control').each(function(i,e){
         
        // some condition(s) to validate each input
        var len = $(e).val().length;
        if (len>0){
            // validation passed
            allValid = true;
        } else {
            // validation failed
            allValid = false;
        }
       
    });
  
    if (allValid) {
        var tabIndex = $(this).parents('.tab-pane').index();
        validated($('[data-toggle]').eq(tabIndex+1));
    }
    
});

// always validate first tab
validated($('[data-toggle]').eq(0));

// form submit
$( "#myForm" ).submit(function( event ) {
  console.log("Handler for .submit() called..");
  console.log( $( this ).serialize() );
  event.preventPrimary();
});
</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="js/algolia.js"></script>


</body>

</html>