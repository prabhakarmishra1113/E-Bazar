<?php
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
session_start();
$error="";

  $name = $_POST['shopname'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['selleremail'];
  $email = mysqli_real_escape_string($con, $email);
  
  $contact = $_POST['sellercontact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);

  $confirmPassword = $_POST['confirmpassword'];
  $confirmPassword = mysqli_real_escape_string($con, $confirmPassword);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";
  $regex_pass="/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

  
  $query = "SELECT shop_name,seller_email,seller_phone,seller_password from sellers WHERE seller_email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
   $error = "<span>ERROR: Email Already Exists</span>";
  //header('location: customerRegistration.php?error=' . $error);
  echo "$error";
  } else if (!preg_match($regex_email, $email)) {
    $error = "<span>ERROR: Not a valid Email Id</span>";
 // header('location: customerRegistration.php?error=' . $error);
   echo "$error";
  } else if(!preg_match($regex_pass, $password)) {
    $error = "<span>ERROR: Paasword should be of Min 8 character and should contain 1 number and 1 special character </span>";
  //header('location: customerRegistration.php?error=' . $error);
    echo "$error";
}
  else if (!preg_match($regex_num, $contact)) {
    $error = "<span>ERROR: Not a valid phone number</span>";
 // header('location: customerRegistration.php?error=' . $error);
   echo "$error";
  } else if($password!=$confirmPassword){
    $error="<span>ERROR: password and confirmpassword not same</span>";
    //  header('location: customerRegistration.php?error=' . $error);
      echo "$error";
  }
  else {
    
    $query = "INSERT INTO sellers(shop_name, seller_email, seller_phone, seller_password)VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $seller_id = mysqli_insert_id($con);
    $_SESSION['seller_email'] = $email;
    $_SESSION['seller_id'] = $seller_id;
    header('location: ./seller_landing_page.php');
  }
?>