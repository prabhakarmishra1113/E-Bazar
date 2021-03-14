
<section class="owl-card mt-1">
 <div class="container-fluid">
  <div class="owl-carousel owl-theme">
 
  <?php
   if(isset($product_cat)){
     $query="SELECT * FROM products WHERE product_cat='$product_cat' ORDER BY RAND() LIMIT 10";
   }
   else{
    $query="SELECT * FROM products ORDER BY RAND() LIMIT 10";
   }
  
   $result=$con->prepare($query);
   $result->execute();
   while($row=$result->fetch(PDO::FETCH_ASSOC))
     {
       $tempimg = $row['product_images'];
       $img = explode(",",$tempimg);
  ?>
   <div class="item" >
     <div class="product-card card text-center myd">
        <a href="<?php echo $owlpath ?>templates/views/<?php echo $page_link ?>?product_key=<?php echo $row[$product_col]; ?>"><img src="<?php echo $owlpath; ?>public/images/products/<?php echo $img[0]; ?>" class="card-image-center"></a>
        <a href="<?php echo $owlpath ?>templates/views/<?php echo $page_link ?>?product_key=<?php echo $row[$product_col]; ?>">
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
