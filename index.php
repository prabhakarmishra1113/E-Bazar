<?php include "src/db_con.php" ?>
<?php session_start(); ?>
<!--Include Header Files-->
<?php include "templates/includes/header.php" ?>

<!--Include Top Navbar Files-->
<?php $path=""; include "templates/includes/navbar.php" ?>

<!--Slider Section Start-->
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
<!--Slider Section End-->

<!--Owl Carousel Section Start-->
<section class="container-fluid owl mt-1">
  <div class="card">
     <div class="card-header">
        <a href="#" class="float-right"><button class="btn btn-primary">View All</button></a>
        Deals Of The Day
     </div>
      <?php $owlpath="";$page_link="products_page.php"; $product_col="product_cat"; include "templates/includes/owlcarousel.php" ?>
  </div>
</section>
<!--Owl Carousel Section End-->

<!--Banner Section Start-->
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
<!--Banner Section End-->

<!--Home Page Sections Or Category Start-->
<?php $title="Fashion For Everyone"; include "templates/includes/home_sec.php"?>

<?php $title="Best of Electronics"; include "templates/includes/home_sec.php"?>

<?php $title="Man Dress"; include "templates/includes/home_sec.php"?>

<?php $title="Trending Offers"; include "templates/includes/home_sec.php"?>
<!--Home Page Sections Or Category Start-->

<!--Footer Include-->
<?php include "templates/includes/footer.php" ?>
<?php 
unset($_SESSION['loginmsg']);
unset($_SESSION['signmsg']);
?>
