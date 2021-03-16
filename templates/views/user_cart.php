<?php include "../../src/db_con.php" ?>
<?php session_start(); ?>
<?php include "../includes/header.php" ?>
<?php  $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<?php
  if(isset($_SESSION['user_id'])){
       $user_id=$_SESSION['user_id'];
       $query="SELECT product_id FROM cart WHERE user_id='$user_id'";
       $result=$con->prepare($query);
       $result->execute();
       $num=$result->rowCount();
       if($num>0)
       {
      ?>   
 <section class="user_cart">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
               <div class="card-header">My Cart</div>
               <div class="card-body">
                 <?php
                   while($row=$result->fetch(PDO::FETCH_ASSOC)){
                      $_SESSION['cart_item']=$num;
                      $product_id=$row['product_id'];
                      $query="SELECT * FROM products WHERE product_id='$product_id'";
                      $result1=$con->prepare($query);
                      $result1->execute();
                      $row1=$result1->fetch(PDO::FETCH_ASSOC);
                      $tempimg = $row1['product_images'];
                      $img = explode(",",$tempimg);
                 ?>
                 <div class="row">
                     <div class="col-2">
                       <img src="../../public/images/products/<?php echo $img['0'] ?>" alt="...">           
                     </div>
                     <div class="col-10">
                       <h5 class="card-title"><?php echo $row1['product_name'];?>"</h5>
                     </div>
                 </div>
                 <?php
                  }
                 ?>
                 <hr><br>
                 
               </div>
               <div class="card-footer">
                  <a href="#"><button class="btn btn-lg btn-danger float-right">PLACE ORDER</button></a>
               </div>
            </div>

        </div>

        <div class="col-md-4">
        </div>
      </div>
   </div>
 </section>
    <?php     
       }
     else{
       ?>
       <div class="card text-center">
       <h5 class="card-title text-danger">Missing Cart! Add Items To Cart</h5>
    </div> 
  <?php     
     }  
    ?>

<?php
  }
 else{
?>
    <div class="card text-center">
       <h5 class="card-title text-danger">Missing Cart! First Login And Add Items To Cart</h5>
    </div> 

<?php
 } 
?>

<?php include "../includes/footer.php" ?>