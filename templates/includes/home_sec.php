
<!--Home Section Start-->
<section class="container-fluid mt-1 home-sec">

<!--Main Card Start-->
  <div class="card">
     <div class="card-header">
       <a href="#" class="float-right"><button class="btn btn-primary">View All</button></a>
       <?php echo "<strong>".$title."</strong> "?>
     </div>
<!--Main Card Body Start-->     
    <div class="card-body" >
        <div class="row w-100" id="home-sec">

        <?php
         if($title==="Fashion For Everyone"){
           $pc="man";
           $pc1="women";
           $pc2="kids";
         }
         elseif($title==="Best of Electronics"){
          $pc="electronics";
          $pc1="";
          $pc2="";
         }
         elseif($title==="Man Dress"){
          $pc="man";
          $pc1="";
          $pc2="";
         }
         elseif($title==="Trending Offers"){
          $pc="man";
          $pc1="women";
          $pc2="electronics";
         }
         $query="SELECT * FROM products WHERE product_cat='$pc' OR product_cat='$pc1' OR product_cat='$pc2' ORDER BY RAND() LIMIT 6";
         $result=$con->prepare($query);
         $result->execute();
         while($row=$result->fetch(PDO::FETCH_ASSOC)) 
          {
            $tempimg = $row['product_images'];
            $img = explode(",",$tempimg);
        ?>
          <div class="col-6 col-md-3 col-lg-2">
          <!--Product Card Start-->
            <div class="product-card card text-center myd">
              <a href="templates/views/products_page.php?product_key=<?php echo $row['product_cat']; ?>"><img src="public/images/products/<?php echo $img[0]; ?>" class="card-image-center"></a>
              <a href="templates/views/products_page.php?product_key=<?php echo $row['product_cat']; ?>">
                <div class="card-body">
                 <h5 class="card-title text-truncate"><?php echo $row['product_name']; ?></h5>
                 <p class="card-text">With <?php echo $row['product_discount']; ?>% Discount</p>
                 <p class="card-text text-muted text-truncate" style="margin-top: -10px;"><?php echo $row['product_subcat']; ?></p>
                </div>
              </a>
            </div>
          <!--Product Card End-->  
          </div>
          <?php
          }
          ?>

        </div>
    </div>
<!--Main Card Body End-->      
  </div>
<!--Main Card End-->    
</section>
<!--Home Section Start-->