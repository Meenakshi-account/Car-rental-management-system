<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheels Up</title>

    <!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

<style>

#banner{
    background-image: url("img/vehicleimages/banner-image.jpg" )
}
.banner_content h1{
    font-size:50px;
    text-align: center;
}

</style>

</head>

<body>
    
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>WHEELS</h1>
            <h1>UP</h1>
            </br>
            <p>Looking for a car! Turn your steering wheels here </p>
            </br></br>
            <a href="car-listing.php" class="btn">Search Cars<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 

<section style="background-color:dimgray;">
<section id="banner1">
    <div class="section-header text-center">
			<br/>
	      <h2 style="color:aqua; font-family:Verdana; font-weight:normal;">Self Drive Cars on Rent</h2>
			<h3 style="color:white; font-weight:normal"><span>We simplified car rentals, so you can focus on what's important to you.</span></h3>
			<h3 style="color:white; font-weight:normal"><span>Unbeatable Rates. Easy & Quick Online Booking. Clean & Well Maintained Fleet.</span></h3>
      <p><div class="items">
				<div>	<h3 style="color:aqua; font-family:Verdana; font-weight:normal;">Fuel Cost Included</h3><p style="color:white;">Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p></div>
				<div><h3 style="color:aqua; font-family:Verdana; font-weight:normal;">No Hidden Charges</h3><p style="color:white;">Our prices include taxes and insurance.<br>What you see is what you really pay!</p></div>
				<div><h3 style="color:aqua; font-family:Verdana; font-weight:normal;">Flexi Pricing Packages</h3><p style="color:white;">One size never fits all! Choose a balance of time and kilometers that works best for you.</p></div>
				<div><h3 style="color:aqua; font-family:Verdana; font-weight:normal;">Go Anywhere</h3><p style="color:white;">Our cars have all-India permits. Just remember to pay state tolls and entry taxes.</p></div>
				<div><h3 style="color:aqua; font-family:Verdana; font-weight:normal;">24x7 Roadside Assistance</h3><p style="color:white;">We have round-the-clock, pan India partners. Help is never far away from you.</p></div>
				<div><h3 style="color:aqua; font-family:Verdana; font-weight:normal;">Damage Insurance</h3><p style="color:white;">All your bookings include damage insurance! Drive safe, but don’t worry!</p></div></div></p>
    </div>
</section>

<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:#0066b2;" >
          <div class="cell" >
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>3000+</h2>
            <p style="color:white;">Rides Daily</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:#0066b2;">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>36,00,000+</h2>
            <p style="color:white;">Km Travelled</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:#0066b2;">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>95,000+</h2>
            <p style="color:white;">Happy users</p>
          </div>
        </div>
      </div>
			<div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:#0066b2;">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>6500+</h2>
            <p style="color:white;">Number of Cars</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->

<!--Register-Form -->
<?php include('includes/registration.php');?>
<!--/Register-Form -->

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>

<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>

<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>


</body>
</html>