<?php
include "../db_con.php";
session_start(); 

  if(isset($_SESSION['user_id'])){
      if(isset($_REQUEST['product_key'])){
          $product_id=$_REQUEST['product_key'];
          $query = "DELETE FROM cart WHERE product_id='$product_id'";
          $result = $con->query($query);
          if($result){
            header("location: ../../templates/views/user_cart.php");
          }
      }
      else{
         header("location: ../../index.php");
      }  
  }
  else
  {
    header("location: ../../index.php");
  }

?>