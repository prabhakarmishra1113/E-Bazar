<?php include "templates/includes/header.php" ?>

<?php include "templates/includes/navbar.php" ?>

<section class="carousel-sec">
<div class="container-fluid">
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="public/images/sl1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="public/images/sl2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="public/images/sl3.jpg" class="d-block w-100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
</div>
</section>

<section class="container-fluid owl mt-1">
  <div class="card">
     <?php $title="Deals Of The Day"; include "templates/includes/sec-header.php" ?>
      <?php include "templates/includes/owlcarousel.php" ?>
  </div>
</section>

<section class="banner mt-1">
   <div class="container-fluid">
     <div class="row">
     
       <div class="col lg-6">
         <a href="#"><div class="card">
           <img src="public/images/banners/banner1.png" class="img-fluid">
         </div></a>
       </div>

       <div class="col lg-6">
         <a href="#"><div class="card">
           <img src="public/images/banners/banner2.png" class="img-fluid">
         </div></a>
       </div>

     </div>
   </div>
</section>

<?php $title="Fashion For Everyone"; include "templates/includes/product_sec.php"?>

<?php $title="Best of Electronics"; include "templates/includes/product_sec.php"?>

<?php $title="Furniture Bestsellers"; include "templates/includes/product_sec.php"?>

<?php $title="Trending Offers"; include "templates/includes/product_sec.php"?>


<div style="height: 999px;">
</div>



<?php include "templates/includes/footer.php" ?>
