<?php include "../../src/db_con.php" ?>
<?php session_start(); ?>
<?php include "../includes/header.php" ?>
<?php  $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>


 <section class="user_cart">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">

            <div class="card mb-3">
               <div class="card-header">My Cart</div>
               <div class="card-body">

                 <div class="row">
                     <div class="col-2">
                       <img src="../../public/images/products/<?php echo $_SESSION['product_img']; ?>" alt="...">           
                     </div>
                     <div class="col-10">
                       <h5 class="card-title"><?php echo $_SESSION['product_name']; ?>"</h5>
                     </div>
                 </div>
                 <hr><br>
                 
               </div>
               <div class="card-footer">
                  <a href="#"><button class="btn btn-lg btn-danger float-right">PLACE ORDER</button></a>
               </div>
            </div>

        </div>

        <div class="col-md-4">
        </div>
      </div>
   </div>
 </section>


<?php include "../includes/footer.php" ?>