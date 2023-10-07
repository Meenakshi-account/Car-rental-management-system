<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Wheels Up</title>

<style>
  div{
    font-size:50px;
  }
</style>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body style="background-color:#87CEEB;">

<!--Header-->
<?php include('includes/header.php');?>

	<div class="booking-details text-justify">

    <center><div class="page-heading">
      <br/><br/>
      <h1 style="color:blue;">ABOUT US</h1>
      <br/><br/>
    </div></center>

<section class="aboutus ng-scope">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="text-about" style="color:black; font-size: 50px">
<p>"Wheels Up" is a car booking software that provides a complete solution to all your day-to-day car booking office running needs.</p>
<br>
<p>The main objective of "Wheels up" is to provide a temporary vehicle, for example those who do not own their own car, or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation or travelers who are out of town.</p>
<br>
<p>"Wheels up" has spread across  10 cities Bangalore,Hyderabad,Mumbai,Delhi,Pune,Kochi,Ahmedabad,Varanasi,Chennai,Mysore. We also have 500 cars at our service  which can provide a great start for enjoying your road journey as you wish without waiting to reach your destination. To top it up and be true in our endeavour .Wheels Up in India is available without any kilometer capping, thus offering unlimited kilometers on all bookings made by you. This we believe will be a small step towards making you enjoy your journey to the fullest, by concentrating on counting memories, not kilometers.</p>
<br>
<p>Our's goal is to automate vehicle rental and reservation so that clients don't have to waste time calling and waiting for a vehicle. To convert the manual car rental procedure into a digital method. </p>
<br>
<p>You can get your choice of self-drive car hand delivered at your doorstep, your office or at your airport’s arrival terminal with our home and airport delivery options.</p>
<br>
<p>This is a system that will preserve the records of all the cars available, cars rented, customer information, etc.</p>
<br>
<ul>
<li>Rent a Self-Drive Car by the Day, Week or Month</li>
<li>Unlimited Kilometers - No hassle of keeping fuel slips and seeking reimbursements</li>
<li>Newest Fleet of Cars across Categories</li>
<li>No Hidden Charges</li>
<li>Lowest Fares Guaranteed</li>
<li>All Inclusive Fares - No additional cost for Insurance, Tax or Pollution</li>
<li>Your maximum liability in case of an accident is limited to your refundable security deposit</li>
</ul>
<br>
<p ><a href="car-listing.php" style="color:blue;">So what are you waiting for? Time to book and ride!</a></p>
<br/><br/>
</div>
</div>
</div>
</div>
</section>
</div>

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
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>
