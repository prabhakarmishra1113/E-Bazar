<?php
 include "../../src/db_con.php";
 session_start();

if(isset($_SESSION['user_id'])){
    if(isset($_REQUEST['order'])){
           $order_name=$order_number=$order_pin=$order_locality=$order_address=$order_town=$order_state=$address_type="";

           $order_name=$_REQUEST['order_name'];
           $order_number=$_REQUEST['order_number'];
           $order_pin=$_REQUEST['order_pin'];
           $order_locality=$_REQUEST['order_locality'];
           $order_address=$_REQUEST['order_address'];
           $order_town=$_REQUEST['order_town'];
           $order_state=$_REQUEST['order_state'];
           $address_type=$_REQUEST['address_type'];
           $user_id=$_SESSION['user_id'];

        if(empty($order_name)||empty($order_number)||empty($order_pin)||empty($order_locality)||empty($order_address)||empty($order_town)||empty($order_state)||empty($address_type)){
            header("location:../../index.php");
            $_SESSION['address_msg']="Fill All The Details";
        }
        else{
            $query="INSERT INTO user_address(buyer_name,buyer_number,buyer_town,buyer_state,buyer_pin,buyer_locality,buyer_address,address_type,user_id) VALUES(?,?,?,?,?,?,?,?,?)";
            $result=$con->prepare($query);
            $result->execute(array($order_name,$order_number,$order_town,$order_state,$order_pin,$order_locality,$order_address,$address_type,$user_id));
  
            if($result)
            {
              header("location: ../../templates/views/buy_product.php");
            }
            else
            {
              header("location: ../../templates/views/buy_product.php");
              $_SESSION['address_msg']="Server Error Find";
            }
        }
    }
 }
 else{
     header("location: ../../index.php");
 }

 ?>