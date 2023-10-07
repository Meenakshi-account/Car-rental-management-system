<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top" >
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h6 >About Us</h6>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="car-listing.php">CARS</a></li>
            <li><a href="contact-us.php" >CONTACT US</a></li>
            <li><a href="page.php" >ABOUT US</a></li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div class="footer-bottom" style="background-color:#0066b2;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
        </div>
        <div class="col-md-6 col-md-pull-6">
          <center><p class="copy-right" style="background-color:#0066b2;">Copyright &copy; 2020 Wheels Up India Private Ltd. All rights reserved.</p></center>
        </div>
      </div>
    </div>
  </div>
</footer>
