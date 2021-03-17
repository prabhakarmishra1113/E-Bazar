<?php include "templates/includes/header.php" ?>

<?php include "templates/includes/navbar.php" ?>

<div class="container">
  <div class="card" style="width: 50vw;">
      <div class="card-body">
          <?php
            $i=0;
            while($i<=4){
          ?>
          <hr style="width: 50vw; margin-left:-20px;" >
          <div class="card" style="border:none">
             <div class="row">
                <div class="col-2">
                  <img src="public/images/products/m1.jpeg" style="width: 5rem;height:5rem;">
                </div>
                <div class="col-10">
                       <h5 class="card-title">T-shirt</h5>
                       <h4 class="text-muted product-size">Size: L</h4>
                       <h5 class="text-muted product-seller">Seller: Anand</h5> 
                       <h4 class="text-muted product-color">₹402 <del>499</del> <span>19% off</span></h4> 
                       <a><h5>REMOVE</h5></a>
                </div>
             </div>
          </div> 
          <?php
           $i++;
            }
          ?>
      </div>
      
      <div class="card-footer">

      </div>
  </div>

</div>

<?php include "templates/includes/footer.php" ?>