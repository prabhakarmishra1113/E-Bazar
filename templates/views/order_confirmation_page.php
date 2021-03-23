<?php include "../../src/db_con.php" ?>
<?php session_start(); ?>
<?php include "../includes/header.php" ?>

<?php
if(isset($_SESSION['user_id'])){
?> 

<?php $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<section>
 <div class="container">
    <div class="card">
       <div class="card-body text-center">
          <i class="fa fa-check fa-5x text-success"></i>
          <h6 style="font-weight: bold;color:darkturquoise">Your Order Successfully Done</h6>
       </div>
    </div>
 </div>
</section>

<?php include "../includes/footer.php" ?>

<?php
}
else{
   header("location:../../index.php");
}
?>