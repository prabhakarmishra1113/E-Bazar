<?php include "../../src/db_con.php"; session_start(); ?>

<?php
if(isset($_SESSION['user_id'])){
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
      $payment_method=$_REQUEST['payment_method'];
      $order_date=date("d-m-y");
     
      if(isset($_SESSION['place_order'])){
        $query="SELECT product_id FROM cart WHERE user_id='$user_id'";
        $result=$con->prepare($query);
        $result->execute();
        $num=$result->rowCount();
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
          $product_id=$row['product_id'];
          $query="INSERT INTO user_orders(user_id,address_id,product_id,payment_method,order_date) VALUES(?,?,?,?,?)";
          $result1=$con->prepare($query);
          $result1->execute(array($user_id,$address_id,$product_id,$payment_method,$order_date));
          if($result1){
            $query = "DELETE FROM cart WHERE product_id='$product_id'";
            $result_del = $con->query($query);
          }  
        }
        unset($_SESSION['checked']);
        unset($_SESSION['checked_id']);
        unset($_SESSION['place_order']);
        header("location: ../../templates/views/order_confirmation_page.php");
      }
      else{
        $product_id=$_SESSION['product_id'];  
        $query="INSERT INTO user_orders(user_id,address_id,product_id,payment_method,order_date) VALUES(?,?,?,?,?)";
        $result=$con->prepare($query);
        $result->execute(array($user_id,$address_id,$product_id,$payment_method,$order_date));
        if($result){
            $query = "DELETE FROM cart WHERE product_id='$product_id'";
            $result_del = $con->query($query);
            unset($_SESSION['checked']);
            unset($_SESSION['checked_id']);
            unset($_SESSION['buy_now']);
            header("location: ../../templates/views/order_confirmation_page.php");
        }
      }
}
}
else{
  header("location: ../../index.php");
}
?>
