<?php include "../../src/db_con.php"; session_start(); ?>
<?php include "../includes/header.php" ?>

<?php  $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<?php if(isset($_SESSION['user_id'])){ 
  
?>
<section class="buy_product">
 <div class="container">
   <div class="row">

     <div class="col-sm-8">

      <div class="card bg-white login_part mb-3">
        <div class="card-header bg-white">
          <h6 class="text-muted">LOGIN</h6>
          <p><span class="name"><?php echo $_SESSION['user_name']; ?></span>  <span class="text-muted number">+918360886874</span></p>
        </div>
       </div>

    <div class="card bg-white mb-3">
      <div class="card-header bg-white">
        <h6 class="text-muted">DELIVERY ADDRESS</h6>
      </div>  
      <div class="card-body" id="already_saved">
         <form>
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
                 <input class="form-check-input" type="radio" name="save_address" id="save_address<?php echo $i; ?>" value="Home">
                 <address class="form-check-label" for="save_address">
                   <span><?php echo $row['buyer_name'] ?></span> <span><?php echo $row['address_type'] ?></span> <span><?php echo $row['buyer_number'] ?></span><br>
                   <span><?php echo $row['buyer_locality']."," ?></span> <span><?php echo $row['buyer_address']."," ?></span> <span><?php echo $row['buyer_town']."," ?></span> <span><?php echo $row['buyer_state']." -" ?></span> <span><?php echo $row['buyer_pin'] ?></span>
                 </address>
                 <button class="btn btn-danger mt-2" id="db<?php echo $i; ?>" style="display: none;">DELIVER HERE</button>      
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

    <div class="card summery_part mb-3">
       <div class="card-header">
         <h5 class="card-title text-muted">ORDER SUMMARY</h5>
       </div>
    </div>

    <div class="card payment_part mb-3">
      <div class="card-header">
         <h5 class="card-title text-muted">PAYMENT OPTIONS</h5>
       </div>
    </div>

  </div>

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