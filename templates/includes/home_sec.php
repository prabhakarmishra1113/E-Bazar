
<!--Home Section Start-->
<section class="container-fluid mt-1 home-sec">

<!--Main Card Start-->
  <div class="card">
     <div class="card-header">
       <a href="#" class="float-right"><button class="btn btn-primary">View All</button></a>
       <?php echo $title ?>
     </div>
<!--Main Card Body Start-->     
    <div class="card-body" >
        <div class="row w-100" id="home-sec">

        <?php 
         $i=0;
         while($i<=10){
        ?>
          <div class="col-6 col-md-3 col-lg-2">
          <!--Product Card Start-->
            <div class="product-card card text-center myd">
              <a href="templates/views/products_page.php"><img src="public/images/men/m1.jpeg" class="card-image-center"></a>
              <a href="templates/views/products_page.php">
                <div class="card-body">
                 <h5 class="card-title">Men's T-Shirt</h5>
                 <p class="card-text">With 50% Discount</p>
                 <p class="card-text text-muted text-truncate" style="margin-top: -10px;">t-shirt and more</p>
                </div>
              </a>
            </div>
          <!--Product Card End-->  
          </div>
          <?php
            $i++;
          }
          ?>

        </div>
    </div>
<!--Main Card Body End-->      
  </div>
<!--Main Card End-->    
</section>
<!--Home Section Start-->