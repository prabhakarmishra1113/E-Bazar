<?php
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
session_start();
$id=$_SESSION['seller_id'];

  $name = $_POST['shopname'];
  $name = mysqli_real_escape_string($con, $name);

  $owner = $_POST['owner'];
  $owner = mysqli_real_escape_string($con, $owner);

  $contact=$_POST['contact'];
  $contact= mysqli_real_escape_string($con, $contact);
  
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  
  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);
  
  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);
  
  $pin = $_POST['pin'];
  $pin = mysqli_real_escape_string($con, $pin);

  $query = "UPDATE sellers SET shop_name ='$name', owner='$owner',seller_phone='$contact', seller_address='$address',seller_city='$city',seller_state='$state',seller_pincode='$pin' WHERE seller_id = '$id'";
   mysqli_query($con, $query) or die($mysqli_error($con));
echo "<script type='text/javascript'>alert('seller information updated Successfully');window.location.href='./seller_landing_page.php';</script>";
   ?>