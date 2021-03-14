<?php
 include "../../src/db_con.php";
 session_start();
 
 if(isset($_SESSION['user_id'])){
    $product_id=$_REQUEST['product_key'];
    $query="SELECT * FROM products WHERE product_id='$product_id'";
    $result=$con->prepare($query);
    $result->execute();
    if($result){
       $row=$result->fetch(PDO::FETCH_ASSOC);
       $tempimg = $row['product_images'];
       $img = explode(",",$tempimg);
       $_SESSION['product_name']=$row['product_name'];
       $_SESSION['product_img']=$img[0];
       $_SESSION['product_price']=$row['product_price'];
       $_SESSION['product_discount']=$row['product_discount'];
       header("location:../../templates/views/user_cart.php");
    }
 }
 else{
    header("location:../../index.php");
 }

?>