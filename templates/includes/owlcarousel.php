<?php include "src/db_con.php" ?>
<section class="owl-card mt-1">
 <div class="container-fluid">
  <div class="owl-carousel owl-theme">
 
  <?php
   $query="SELECT * FROM products";
   $result=$con->prepare($query);
   $result->execute();
   while($row=$result->fetch(PDO::FETCH_ASSOC))
     {
       $tempimg = $row['product_images'];
       $img = explode(",",$tempimg);
  ?>
   <div class="item">
     <div class="product-card card text-center myd">
        <a href="templates/views/products_page.php?cat=<?php echo $row['product_cat'] ?>"><img src="public/images/products/<?php echo $img[0]; ?>" class="card-image-center"></a>
        <a href="templates/views/products_page.php?cat=<?php echo $row['product_cat']; ?>">
          <div class="card-body">
            <h5 class="card-title text-truncate"><?php echo $row['product_name'] ?></h5>
            <p class="card-text">With <?php echo $row['product_discount'] ?>% Discount</p>
            <p class="card-text text-muted text-truncate" style="margin-top: -10px;"><?php echo $row['product_subcat'] ?></p>
          </div>
        </a>
      </div>
  </div>
  <?php
   }
  ?> 
     
 </div>
</div>
</section>
