<?php include "../includes/header.php" ?>

<?php include "../includes/navbar.php" ?>

<!--Product Page Start-->  
 <div class="container-fluid product_page">
    <div class="row">
       <div class="col-lg-2 filter hide-on-small">
         
         <div class="card">
            <div class="card-header">Filter</div>
            <div class="card body">
              <h5 class="card-title">Short By</h5>
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
               $i=0;
               while($i<=10){
               $i++;  
             ?>
              <div class="col-6 col-md-4 col-lg-3">
               <div class="card">
                 <a class="text-center" href="#"><img src="../../public/images/men/m1.jpeg" class="img-fluid"></a>
                 <div class="card-footer">
                   <figcaption class="figure-caption brand">E-BAZAR</figcaption>
                   <a href="#"><figcaption class="figure-caption title">Men Branded T-shirt</figcaption></a>
                   <figcaption class="figure-caption color">blue,red,pink</figcaption>
                   <figcaption class="figure-caption rs">₹629 <del>₹999</del> <span class="text-success">76% off</span></figcaption>
                   <button class="btn btn-primary w-100 mt-1">Add To Card</button>
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