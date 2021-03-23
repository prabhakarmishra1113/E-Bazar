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
 <section class="user_cart mb-4">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
         <form action="buy_product.php" method="post">
            <div class="card">
               <div class="card-header">My Cart</div>
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
                  <hr>
                  <div class="row d-flex justify-content-start" style="margin: 0;">
                     <div class="col-4 col-md-3 col-lg-2 text-center">
                       <img src="../../public/images/products/<?php echo $img['0'] ?>" alt="...">           
                     </div>
                     <div class="col-8 col-md-9 col-lg-10">
                       <h5 class="card-title"><?php echo $row1['product_name'];?>"</h5>
                       <h6 class="text-muted product-size">Size: L</h6>
                       <h6 class="text-muted product-seller">Seller: Anand</h6> 
                       <h5><span class="product-price">₹402</span> <del class="text-muted">499</del> <span class="text-success font-weight-bold">19% off</span></h5> 
                       <a href="../../src/server/remove_item.php?product_key=<?php echo $row['product_id'];  ?>"><h5 class="remove">REMOVE</h5></a>
                     </div>
                  </div>
                 <?php
                  }
                 ?>    
               <hr>
               <div class="card-footer">
                  <a href="#"><button type="submit" name="place_order" class="btn btn-lg btn-danger float-right">PLACE ORDER</button></a>
               </div>
            </div>
          </form>
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