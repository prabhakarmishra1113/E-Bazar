<?php include "../../src/db_con.php" 
?>
<?php 
session_start(); ?>
<?php include "../includes/header.php" ?>

<?php  $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<!--Product Details Section Start-->
<section class="product_details">

  <div class="container-fluid">
    <div class="row">
  
  <!--Product Images Part Start-->  
      <div class="col-md-12 col-lg-5">
         <div class="card">

           <div class="row no-gutters text-center hide-on-small">
             <div class="col-md-2">
               <?php
                $product_id=$_REQUEST['product_key'];
                $query="SELECT * FROM products WHERE product_id='$product_id'";
                $result=$con->prepare($query);
                $result->execute();
                $row=$result->fetch(PDO::FETCH_ASSOC);
                  $tempimg = $row['product_images'];
                  $img = explode(",",$tempimg);
                  for($i=0;$i<sizeof($img);$i++){
               ?>
               <img class="list-item p-1 small-img" src="../../public/images/products/<?php echo $img[$i]; ?>"  onmouseover="chngimg(this)">
              <?php 
                }
             ?> 
             </div>
             <div class="col-md-10">
              <img src="../../public/images/products/<?php echo $img[0]; ?>" class="img-fluid p-1 big-img" id="bigimg">
             </div>
           </div>
  <!--Carousel Start-->
        <div id="carouselExampleIndicators" class="carousel slide text-center ml-3 d-none d-sm-block d-md-none show-on-small" data-ride="carousel">
              <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> 
                <?php
                    for($i=1;$i<sizeof($img);$i++){
                  ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li>
                <?php
                 }
                ?>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../public/images/products/<?php echo $img[0]; ?>" class="d-block w-100" alt="...">
              </div>
              <?php
                    for($i=1;$i<sizeof($img);$i++){
              ?>
              <div class="carousel-item">
                <img src="../../public/images/products/<?php echo $img[$i]; ?>" class="d-block w-100" alt="...">
              </div>
              <?php
                }
              ?>
           </div>
         </div>
           <!--Carousel End-->
           <div class="card-footer">
             <div class="btn-group w-100">
               <button type="button" class="btn btn-lg btn-success "><i class="fa fa-edit"></i> <span>EDIT PRODUCT DETAILS</span></button>
               <button type="button" class="btn btn-lg btn-danger  ml-1"><i class="fa fa-trash"></i> <span>REMOVE PRODUCT</span></button>
             </div>
           </div>

         </div>
      </div>
    <!--Product Images Part End-->  

    

    <!--Product Details Part Start--> 
      <div class="col-md-12 col-lg-7 product-details-part">
          <div class="card">
             <div class="card-body">
               <h5 class="text-muted product-seller">Anand</h5> 
               <h4 class="product-title"><?php echo $row['product_name']; ?></h4>
               <h6 class="text-success font-weight-bold">Special Price</h6>
               <h4 class="product-price"> <span class="main-price">₹<?php $x=$row['product_price'];$y=$row['product_discount']; $money=($x-($x*$y)/100); echo $money; ?></span> <del class="text-muted">₹<?php echo $row['product_price']; ?></del> <span class="text-success discount"><?php echo $row['product_discount']; ?>% off</span></h4>
               <h5 class="product-color mb-5">
                   <span class="float-left">Color</span>
                   <?php
                     $tempcolor = $row['product_color'];
                     $color = explode(",",$tempcolor);
                     for($i=0;$i<sizeof($color);$i++){
                   ?> 
                   <div class="circle ml-2 mt-1" id="product_color" style="background-color: <?php echo $color[$i]; ?>;"></div>
                   <?php
                     }
                   ?>
                </h5>
               
               <hr class="mt-3">
               <div class="product-more" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Poduct Details <span><i class="fa fa-plus float-right text-muted"></i></span></div>
               <div class="collapse" id="collapseExample">
                  <div class="card card-body" style="border: none;">
                     <?php echo $row['product_details']; ?>
                  </div>
               </div>
               <hr>
             </div>
          </div>
      </div>
    <!--Product Details Part End-->    
    </div>
  </div>

</section>
<script type="text/javascript">
    function chngimg(myvar)
    { 
         var fullimg=document.getElementById("bigimg");
         fullimg.src=myvar.src;
    }
 </script> 
<!--Product Details Section End-->
<?php include "../includes/footer.php" ?>