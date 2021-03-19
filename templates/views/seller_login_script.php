<?php
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

	$query = "SELECT seller_id,seller_email,seller_password from sellers WHERE seller_email='" . $email . "' AND seller_password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
  $_SESSION['seller_email'] = $row['seller_email'];
  $_SESSION['seller_id'] = $row['seller_id'];

if ($num == 1) { 
 header('location: ./seller_landing_page.php');
} 

else{
echo "<script type='text/javascript'>alert('Not a valid UserId and Password');window.location.href='/';</script>";

}
?>