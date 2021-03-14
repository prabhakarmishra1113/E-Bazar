<?php include "../../src/db_con.php" ?>
<?php session_start(); ?>
<?php include "../includes/header.php" ?>

<?php $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<!--Product Page Start-->  
 <div class="container-fluid product_page">
    <div class="row">
       <div class="col-lg-2 filter hide-on-small">
         
         <div class="card">
            <div class="card-header">Filter</div>
            <div class="card body">
              <h6 class="card-title">Sort By</h6>
              <ul>
                <a href="#"><li>Price low to high</li></a>
                <a href="#"><li>Price high to low</li></a>
                <a href="#"><li>Popularity</li></a>
                <a href="#"><li>Newest</li></a>
              </ul>
            </div>
         </div>

        </div>

     <!--Product Section Start-->    
       <div class="col-12 col-lg-10 product_sec">      
         <div class="card">
           <div class="card-header">Men's T-shirt</div>
           <div class="card-body">
              
             <!--Product Card Start-->
             <div class="row">
             <?php
              $category=$_REQUEST['product_key'];
              $query="SELECT * FROM products WHERE product_cat='$category' OR product_subcat='$category'";
              $result=$con->prepare($query);
              $result->execute();
              while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                  $tempimg = $row['product_images'];
                  $img = explode(",",$tempimg); 
             ?>
              <div class="col-6 col-md-4 col-lg-3">
               <div class="card">
                 <a class="text-center" href="product_detail.php?product_key=<?php echo $row['product_id']; ?>"><img src="../../public/images/products/<?php echo $img[0]; ?>" class="img-fluid"></a>
                 <div class="card-footer">
                   <figcaption class="figure-caption brand">E-BAZAR</figcaption>
                   <a href="product_detail.php?product_key=<?php echo $row['product_id']; ?>"><figcaption class="figure-caption title text-truncate"><?php echo $row['product_name']; ?></figcaption></a>
                   <figcaption class="figure-caption color text-truncate"><?php echo $row['product_color'] ?></figcaption>
                   <figcaption class="figure-caption rs">₹<?php $x=$row['product_price'];$y=$row['product_discount']; $money=($x-($x*$y)/100); echo $money; ?> <del>₹<?php echo $row['product_price']; ?></del> <span class="text-success"><?php echo $row['product_discount']; ?>% off</span></figcaption>
                   <a href="../../src/server/add_to_cart.php?product_key=<?php echo $row['product_id']; ?>"><button class="btn btn-primary w-100 mt-1">Add To Card</button>
                 </div>
               </div>
              </div>
                
            <?php
              }
            ?>
            </div>
             <!--Product Card End-->         
           </div>

           <!--Pagination Start-->
            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-center">
                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                 </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                 </li>
                </ul>
            </nav>
            <!--Pagination End-->
         </div>     
       </div>
    <!--Product Section End-->
    </div>
  <!--Product Page Row End-->  
 </div>
<!--Product Page End-->  
<?php include "../includes/footer.php" ?>