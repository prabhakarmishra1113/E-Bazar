<?php include "../../src/db_con.php"; session_start(); ?>
<?php include "../includes/header.php" ?>

<?php  $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<?php if(isset($_SESSION['user_id'])){
  if(isset($_REQUEST['place_order'])){
    $_SESSION['place_order']="place_order";
  } 
  if(isset($_REQUEST['buy_now'])){
    $_SESSION['buy_now']="buy_now";
  }
?>
<section class="payment_page">
 <div class="container">
   <div class="row">

     <div class="col-sm-8">

<!--Card 1 Login Details START-->   
      <div class="card bg-white login_part mb-3">
        <div class="card-header bg-white">
          <h6 class="text-muted">LOGIN</h6>
          <p><span class="name"><?php echo $_SESSION['user_name']; ?></span>  <span class="text-muted number">+918360886874</span></p>
        </div>
       </div>
<!--Card 1 Login Details END-->       

<!--Card 2 Already Saved Address Part Start--> 
    <div class="card bg-white mb-3 saved_address">
      <div class="card-header bg-white" id="sa">
        <h6 class="card-title">DELIVERY ADDRESS</h6>
      </div>  
      <div class="card-body" id="already_saved">
         <form action="../../src/server/order_detail.php" method="post">
            <div class="form-group ml-3">
                <?php
                  $user_id=$_SESSION['user_id'];
                  $query="SELECT * FROM user_address WHERE user_id='$user_id'";
                  $result=$con->prepare($query);
                  $result->execute();
                  $num=$result->rowCount();
                  if($num>0){
                    $i=1;
                    while($row=$result->fetch(PDO::FETCH_ASSOC))
                     {
                ?>

                <script type="text/javascript">
                  $(document).ready(function(){
                    $("#save_address<?php echo $i; ?>").click(function(){
                       $("#db<?php echo $i; ?>").toggle();
                    });
                  });
                </script>

                <div class="form-check form-check">
                 <input class="form-check-input" type="radio" name="save_address" id="save_address<?php echo $i; ?>" value="<?php echo $row['address_id'] ?>" <?php if(isset($_SESSION['checked_id']) && ($_SESSION['checked_id']==$row['address_id'])){ echo $_SESSION['checked']; } ?>>
                 <address class="form-check-label" for="save_address">
                   <span class="buyer_name"><?php echo $row['buyer_name'] ?></span> <span class="address_type"><?php echo $row['address_type'] ?></span> <span class="buyer_number text-success"><?php echo $row['buyer_number'] ?></span><br>
                   <span><?php echo $row['buyer_locality']."," ?></span> <span><?php echo $row['buyer_address']."," ?></span> <span><?php echo $row['buyer_town']."," ?></span> <span><?php echo $row['buyer_state']." -" ?></span> <span class="buyer_pin"><?php echo $row['buyer_pin'] ?></span>
                 </address>
                 <button class="btn btn-danger mt-2" id="db<?php echo $i; ?>" style="display: none;" type="submit" name="delivery_here">DELIVER HERE</button>      
                </div><hr>
              <?php
              $i++;
               }
            ?>
            <script>
             $(document).ready(function(){
                   $("#address_form").hide();
                });
            </script>
            <?php   
              }
              else{
                ?>
              <script>
                $(document).ready(function(){
                   $("#already_saved").hide();
                });
              </script>
            <?php    
              }
              ?>  
          </div> 
        </form>
      </div>
    </div>
<!--Card 2 Already Saved Address Part END--> 

<!--Card 3 Add New Address Part Start--> 
       <div class="address_part card mb-3">
         <div class="card-body">
            <h5><?php if(isset($_SESSION['address_msg'])){echo $_SESSION['address_msg'];} ?></h5>    
            <h6 class="card-title text-primary font-weight-bold" id="add_new_address" style="cursor: pointer;">Add New Address</h6>
         <form action="../../src/server/order.php" id="address_form">
           <div class="form-row"> 
             <div class="form-group col-md-6">
                 <input type="text" class="form-control" name="order_name" placeholder="Name">
             </div>
             <div class="form-group col-md-6">
                 <input type="tel" class="form-control" name="order_number" placeholder="10-digit mobile number">
             </div>
             <div class="form-group col-md-6">
                 <input type="text" class="form-control" name="order_pin" placeholder="Pincode">
             </div>
             <div class="form-group col-md-6">
                 <input type="text" class="form-control" name="order_locality" placeholder="Locality">
             </div>
             <div class="form-group col-md-12">
                 <textarea class="form-control" id="exampleFormControlTextarea1" name="order_address" rows="3" placeholder="Address(Area and Street)"></textarea>
             </div>
             <div class="form-group col-md-6">
                 <input type="text" class="form-control" name="order_town" placeholder="City/District/Town">
             </div>
             <div class="form-group col-md-6">
                 <input type="text" class="form-control" name="order_state" placeholder="State">
             </div>

            <div class="form-group ml-3">
              <label class="text-muted">Address Type</label><br>  
              <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="address_type" id="inlineRadio1" value="Home">
                 <label class="form-check-label" for="inlineRadio1">Home (All day delivery)</label>
              </div>
             
              <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="address_type" id="inlineRadio2" value="Work">
                 <label class="form-check-label" for="inlineRadio2">Work (10 Delivery between  10 AM - 5 PM)</label>
              </div>
            </div> 
             <button type="submit" name="order" class="btn btn-lg btn-danger" style="font-size: 14px;">SAVE AND DELIVER HERE</button>
            </div>   
         </form>
        </div> 
    </div>
<!--Card 3 Add New Address Part End--> 

<!--Card 4 Order Summary Part Start--> 
    <div class="card summery_part mb-3 user_cart">
      <div class="card-header" id="order_summary">
         <h5 class="card-title">ORDER SUMMARY</h5>
       </div>
      <?php
        if(isset($_SESSION['checked'])){
      ?>
      <div class="card">
      <div class="card-body">
       <?php
          if(isset($_SESSION['buy_now']) && isset($_SESSION['product_id'])){
              $product_id=$_SESSION['product_id'];
              $query="SELECT * FROM products WHERE product_id='$product_id'";
              $result1=$con->prepare($query);
              $result1->execute();
              $row1=$result1->fetch(PDO::FETCH_ASSOC);
              $tempimg = $row1['product_images'];
              $img = explode(",",$tempimg);
        ?>
        <div class="row d-flex justify-content-start" style="margin: 0;">
          <div class="col-4 col-md-3 col-lg-2 text-center">
              <img src="../../public/images/products/<?php echo $img['0'] ?>" alt="...">           
          </div>
          <div class="col-8 col-md-9 col-lg-10">
              <h5 class="card-title"><?php echo $row1['product_name'];?>"</h5>
              <h6 class="text-muted product-size">Size: L</h6>
              <h6 class="text-muted product-seller">Seller: Anand</h6> 
              <h5><span class="product-price">₹402</span> <del class="text-muted">499</del> <span class="text-success font-weight-bold">19% off</span></h5> 
          </div>
        </div>   
    <?php
      }
    ?>
    </div>
  
  <?php 
   if(isset($_SESSION['place_order'])){
  ?>
    <div class="card-body">
       <?php
          $user_id=$_SESSION['user_id'];
          $query="SELECT product_id FROM cart WHERE user_id='$user_id'";
          $result=$con->prepare($query);
          $result->execute();
          $num=$result->rowCount();
          while($row=$result->fetch(PDO::FETCH_ASSOC)){
            $product_id=$row['product_id'];
            $query="SELECT * FROM products WHERE product_id='$product_id'";
            $result1=$con->prepare($query);
            $result1->execute();
            $row1=$result1->fetch(PDO::FETCH_ASSOC);
            $tempimg = $row1['product_images'];
            $img = explode(",",$tempimg);
        ?>
        <div class="row d-flex justify-content-start" style="margin: 0;">
          <div class="col-4 col-md-3 col-lg-2 text-center">
              <img src="../../public/images/products/<?php echo $img['0'] ?>" alt="...">           
          </div>
          <div class="col-8 col-md-9 col-lg-10">
              <h5 class="card-title"><?php echo $row1['product_name'];?>"</h5>
              <h6 class="text-muted product-size">Size: L</h6>
              <h6 class="text-muted product-seller">Seller: Anand</h6> 
              <h5><span class="product-price">₹402</span> <del class="text-muted">499</del> <span class="text-success font-weight-bold">19% off</span></h5> 
          </div>
        </div>   
    <?php
      }
    ?>
    </div>
    <?php
     }
    ?>

      <div class="card-footer">
        <button class="btn btn-danger float-right" id="pay_order_now">PAY & ORDER NOW</button>
      </div>
  </div>
  <?php
  }
  ?>
</div>
<!--Card 4 Order Summary Part End-->     
    <script>
       $(document).ready(function(){
          $("#payment_sheet").hide();
          $("#pay_order_now").click(function(){
            $("#payment_sheet").show();
          });
       });
    </script>

<!--Card 5 Payment Options Part Start--> 
    <div class="card payment_part mb-3">
      <div class="card-header">
         <h5 class="card-title text-muted">PAYMENT OPTIONS</h5>
       </div>
       <div class="card-body" id="payment_sheet">
         <script>
            $(document).ready(function(){
               $("#confirm").hide();
               $("#cash_on_delivery").click(function(){
                   $("#confirm").show();
               });
            });
         </script>
           <form action="../../src/server/order_detail.php" method="post">
              <div class="form-group">
                 <div class="form-check form-check">
                   <input class="form-check-input collapsed" type="radio" name="payment_method" id="cash_on_delivery" value="Cash On Delivery">
                   <label class="form-check-label" for="inlineRadio2">Cash On Delivery</label>
                 </div>
                 <button type="submit" name="confirm" class="btn btn-lg btn-danger float-right" style="font-size: 14px;" id="confirm">CONFIRM</button>
              </div>  
           </form>
       </div>
    </div>
<!--Card 5 Payment Options Part End--> 
</div>
<!--1st Column END--> 
<div class="col-sm-4">
        <div class="card">
           <div class="card-header">
             <h6 class="card-title text-muted">PRICE DETAILS</h6>
           </div>
           <div class="card-body">
               <p><span class="float-left">Price</span> <span class="float-right">899</span></p><br>
               <p><span class="float-left">Delivery Charge</span> <span class="float-right">Free</span></p><br>
               <p><span class="float-left">Total Payable</span> <span class="float-right">899</span></p>
           </div>
        </div>
     </div>
     
   </div>
 </div>
</section>
<?php
}
else{
  echo "<h1>Sorry! First Login </h1>";
}
?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#add_new_address").click(function(){
            $("#address_form").show();
        });
    });
</script>

<?php include "../includes/footer.php" ?>
<?php unset($_SESSION['address_msg']) ?>