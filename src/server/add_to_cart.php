<?php
 include "../../src/db_con.php";
 session_start();
 
 if(isset($_SESSION['user_id'])){
       $product_id=$_REQUEST['product_key'];
       $user_id=$_SESSION['user_id'];

       $query="SELECT * FROM cart WHERE user_id='$user_id' AND product_id='$product_id'";
       $result=$con->prepare($query);
       $result->execute();
       $num=$result->rowCount();
       if($num>0)
       {
         header("location: ../../index.php");
         $_SESSION['cartmsg']="Product Alredy Added To Cart";
       }
       else{
         $query="INSERT INTO cart(user_id,product_id) VALUES(?,?)";
         $result=$con->prepare($query);
         $result->execute(array($user_id,$product_id));
         if($result){
            $_SESSION['product_id']=$_REQUEST['product_key'];
            header("location:../../templates/views/user_cart.php");
         }
       }
    }
 else{
    header("location:../../index.php");
 }

?>