<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Marimar Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><img class="logo_1" src="images/logo.png" alt=""><img class="logo_2" src="images/logo_2.png" alt=""><img class="logo_3" src="images/logo_3.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="template.html">Home</a></li>
					<li><a href="about1.html">About us</a></li>
					<li><a href="rooms.html">Rooms</a></li>
					<li><a href="room_booking.php">Book Now</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="cancellation.php">Room Cancel</a></li>
				</ul>
			</nav>

			<!-- Header Right -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start">
				
				<!-- Hamburger Button -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

			</div>

			
	</header>

	<!-- Logo Overlay -->

	<div class="logo_overlay">
		<div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
			<div class="logo"><a href="#"><img src="images/logo_3.png" alt=""></a></div>
		</div>
	</div>

	<!-- Menu Overlay -->

	<div class="menu_overlay">
		<div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
			
			<!-- Hamburger Button -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</div>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container d-flex flex-column align-items-center justify-content-center">

			<!-- Menu Navigation -->
			<nav class="menu_nav text-center">
				<ul>
					<li><a href="template.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="rooms.html">Rooms</a></li>
					<li><a href="room_booking.php">Book Now</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="cancellation.php">Room Cancel</a></li>
				</ul>
			</nav>
			<div class="button menu_button"><a href="user_register.php">book now</a></div>


		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>About Us</h1></div>
		</div>
	</div>

	
<body>
<?php
session_start();?>

<h2 align="center">WELCOME <?php echo $_SESSION['username'];


?></h2>
<!--<a href="room_booking.php">Room Booking</a>-->
<!--<a href="feedback.php">Feedback</a>-->
</body>
</html>
