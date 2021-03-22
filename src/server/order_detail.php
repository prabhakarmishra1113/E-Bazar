<?php include "../../src/db_con.php"; session_start(); ?>

<?php

  if(isset($_REQUEST['delivery_here'])){
      $address_id=$_REQUEST['save_address'];
      $_SESSION['checked']="checked";
      $_SESSION['checked_id']=$address_id;
      header("location:../../templates/views/buy_product.php");
  }
  if(isset($_REQUEST['confirm'])){
      $user_id=$address_id=$product_id=$payment_method=$order_date="";

      $user_id=$_SESSION['user_id'];
      $address_id=$_SESSION['checked_id'];
      $product_id=$_SESSION['product_id'];
      $payment_method=$_REQUEST['payment_method'];
      $order_date=date("d-m-y");

      $query="INSERT INTO user_orders(user_id,address_id,product_id,payment_method,order_date) VALUES(?,?,?,?,?)";
      $result=$con->prepare($query);
      $result->execute(array($user_id,$address_id,$product_id,$payment_method,$order_date));

      if($result){
          $query = "DELETE FROM cart WHERE product_id='$product_id'";
          $result = $con->query($query);
          header("location: ../../templates/views/order_confirmation_page.php");
      }

  }

?>
