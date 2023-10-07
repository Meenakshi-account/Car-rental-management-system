<style>
div{
font-family: Play;
font-size: 20px;
color: BLUE;
object-fit: cover;
}
</style>
<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$fromdate=$_POST['fromdate'];// collect value of input field
$todate=$_POST['todate'];
$message=$_POST['message'];
$useremail=$_SESSION['login']; 
$vhid=$_GET['vhid'];//vhid from mybooking 
//id for booking is auto incremented
$sql="INSERT INTO  tblbooking(userEmail,VehicleId,FromDate,ToDate,message) VALUES(:useremail,:vhid,:fromdate,:todate,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successful.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
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

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>
<body style="background-color:black;">

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<?php
$vhid=intval($_GET['vhid']);
$sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:vhid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
$_SESSION['brndid']=$result->bid;
?>
<!--Listing-detail-->
<section class="listing-detail" >
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9" >
        <h2 style=" color:lightblue;"><?php echo htmlentities($result->VehiclesTitle);?>,<?php echo htmlentities($result->BrandName);?></h2>
      </div>
      <div class="col-md-3" >
        <div class="price_info" style=" color:aqua;">
          <p style="color:white;">₹<?php echo htmlentities($result->PricePerDay);?> </p>Per Day Rental
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features" >
          <ul>
            <li style="background-color:lightblue;"> <i class="fa fa-cogs" aria-hidden="true" style="color:blue;"></i>
              <h5><?php echo htmlentities($result->FuelType);?></h5>
              <p style="color:blue;">Fuel Type</p>
            </li>

            <li style="background-color:lightblue;"> <i class="fa fa-user-plus" aria-hidden="true" style="color:blue;"></i>
              <h5><?php echo htmlentities($result->SeatingCapacity);?></h5>
              <p style="color:blue;">Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info" style="color:blue;">
          <div class="listing_detail_wrap"  style="background-color:lightblue;" >
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist" >
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab" style="color:black;">Vehicle Overview </a></li>

              <li role="presentation" ><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab" style="color:black;">Details</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content"style="color:blue;" >
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                <p><?php echo htmlentities($result->VehiclesOverview);?></p>
              </div>
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories">
                <!--Accessories-->
                <table style="background-color:lightblue;">
                  <thead>
                    <tr>
                      <th colspan="2" style="color:blue;">Details</th>
                    </tr>
                  </thead>
                  <tbody>  
                  <tr >
                      <td >Air Conditioner</td>
<?php if($result->AirConditioner>=1)
{
?>
  <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
<?php } else { ?>
   <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
   <?php } ?> </tr>

 <tr>
 <td>Airbag</td>
 <?php if($result->Airbag>=1)
{
?>
<td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
<?php } else {?>
<td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
<?php } ?>
</tr>

<tr>
<td>VehicleNo</td>
<td><p><?php echo htmlentities($result->VehicleNo);?></p></td>
</tr>

<tr>
<td>Mileage</td>
<td><p><?php echo htmlentities($result->Mileage);?></p></td>
</tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<?php }
} ?>
      </div>
      <!--Side-Bar-->
      <aside class="col-md-3" >

        <div class="sidebar_widget" style="background-color:darkblue;">
          <div class="widget_heading">
            <h5 style="color:white;">>  Book Now</h5>
          </div>
          <form method="post"><!--Sends the form-data as an HTTP post transaction-->
            <div class="form-group">
              <input type="date" class="form-control" name="fromdate" required >
            </div>
            <div class="form-group">
              <input type="date" class="form-control" name="todate"  required>
            </div>
            <div class="form-group">
              <textarea rows="3" class="form-control" name="message" placeholder="Extra Reqirements" required></textarea>
            </div>
          <?php if($_SESSION['login'])
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Book Now" style="background-color:blue;">
              </div>
              <?php }
               else 
               { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal" style="background-color:blue;">SIGN IN FOR BOOKING</a>
<!--if not signed in pop up sign in page?-->
              <?php } ?>
          </form>
        </div>
      </aside>
      <!--/Side-Bar-->
    </div>

    <div class="space-20"></div>
    <div class="divider"></div>

  </div>
</section>
<!--/Listing-detail-->

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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>