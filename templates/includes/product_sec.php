<section class="container-fluid mt-1 product-sec">
  <div class="card">
     <div class="card-header">
       <a href="#" class="float-right"><button class="btn btn-primary">View All</button></a>
       <?php echo $title ?>
     </div>
    <div class="card-body" >
        <div class="row w-100" id="product-sec">
          <div class="col-6 col-md-3 col-lg-2">
            <?php include "templates/includes/product_card.php"?>
          </div>
          <div class="col-6 col-md-3 col-lg-2">
             <?php include "templates/includes/product_card.php"?>
          </div>
          <div class="col-6 col-md-3 col-lg-2">
             <?php include "templates/includes/product_card.php"?>
          </div>
          <div class="col-6 col-md-3 col-lg-2">
          <?php include "templates/includes/product_card.php"?>
          </div>
          <div class="col-6 col-md-3 col-lg-2 hide-on-small">
          <?php include "templates/includes/product_card.php"?>
          </div>
          <div class="col-6 col-md-3 col-lg-2 hide-on-small">
          <?php include "templates/includes/product_card.php"?>
          </div>
        </div>
    </div>
  </div>
</section>
