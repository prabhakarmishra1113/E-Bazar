

<!--Header Start-->
<div class="sticky-top">
<header class="navbar bg-primary w-100"> 
    <!--Icon and Logo Section Start-->
        <ul class="nav">
            <li class="nav-item">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>
            </li>

            <li class="nav-item ">
                <a class="navbar-brand ml-lg-3 ml-lg-4" href="<?php echo $path ?>"><h4><strong>E-Bazar</strong></h4></a>
             </li>
         </ul>
    <!--Icon and Logo Section End-->

    <!--SignIn/SignUp and Cart Section Start-->
      <ul class="nav ml-auto order-sm-last mr-lg-5 rc">
        <?php 
           if(isset($_SESSION['user_id'])){
              $user_id=$_SESSION['user_id'];
              $query="SELECT product_id FROM cart WHERE user_id='$user_id'";
              $result=$con->prepare($query);
              $result->execute();
              $cart_count=$result->rowCount();
             ?>
          
               <li class="nav-item dropleft">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
               
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#"><?php echo $_SESSION['user_name']; ?></a>  
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Your Profile</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?php echo $path; ?>src/server/user_logout.php">Logout</a>
               </div>
               </li>   
        <?php
           }
           else{
             ?>
           <li class="nav-item">
               <a class="nav-link" href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user"></i> <span class="lc">Login</span></a>
           </li> 
        <?php     
           } 
        ?>    
            <li class="nav-item">
               <a class="nav-link" href="<?php echo $path ?>templates/views/user_cart.php"><i class="fa fa-shopping-cart"></i> <span class="lc">Cart<sup class="text-danger"><sup style="font-size:10px;"><?php if(isset($cart_count)){echo $cart_count;} ?></sup></a>
            </li>
         </ul>
    <!--SignIn/SignUp and Cart Section End-->

    <!--Search Bar Section Start-->
         <ul class="nav mr-auto ml-md-3">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </li>
         </ul>
    <!--Search Bar Section End-->
    </header>
 </div>

<!--Product Category Section Start--> 
<section class="container-fluid">
 <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=man">Men <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=women">Women <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=kids">Kids <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=mobile">Mobiles <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=electronics">Electronics <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=fruites">Fruits & Vegetables <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=dairy">Dairy & Bakery <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=grocery">Grocery <i class="fa fa-chevron-down"></i></a>
    </nav>
  </div>
  </section>
  <!--Product Category Section End--> 

<!--login starts-->
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header bg-primary">
        <h3 class="text-light">Login</h3>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body justify-content-right">
        <div class="text-center pt-5 pb-5">
          <form  action="<?php echo $path ?>src/server/user_signup_login.php" method="POST">
             <div class="form-group">
              <input type="text" name="userlogin" class="form-control" placeholder="Email Or Phone">
            </div>

            <div class="form-group">
              <input type="password" name="userpassword" class="form-control"
              placeholder="Password">
            </div>

            <button type="submit" name="login" class="btn btn-primary btn-block btn-md">Login</button></button></div>
            <p class="text-center text-danger"><?php if(isset($_SESSION['loginmsg'])){ echo $_SESSION['loginmsg']; }?></p>
          </form>
        </div>

        <div class="modal-footer bg-primary text-light">
          <p>Do not have an Account?<a href="#" data-toggle="modal" data-target="#signup"> <span class="text-warning">Sign Up</span></a></p>
        </div>
         
    </div>    
  </div>
</div>  
<!-- login ends-->

<!-- modal for signup-->
<div class="modal fade" id="signup" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header bg-primary">
        <h3 class="text-light">Sign Up</h3>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body justify-content-right">
        <div class="text-center pt-5 pb-5">
          <form  action="<?php echo $path ?>src/server/user_signup_login.php" method="POST">

            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
              <input type="email" name="useremail" class="form-control"
              placeholder="Email">
            </div>

            <div class="form-group">
              <input type="tel" name="userphone" class="form-control"
              placeholder="Phone">
            </div>

            <div class="form-group">
              <input type="password" name="userpassword" class="form-control"
              placeholder="Password">
            </div>

            <div class="form-group">
              <input type="password" name="userconfirmpassword" class="form-control"
              placeholder="Confirm Password">
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Register</button></button></div>
            <p class="text-center text-danger"><?php if(isset($_SESSION['signmsg'])){ echo $_SESSION['signmsg']; }?></p>
          </form>
        </div>
        <div class="modal-footer bg-primary text-light">
          <p>Already have an Account?<a href="#" data-toggle="modal" data-target="#login"><span class="text-warning"> Login</span></a></p>
        </div>         
    </div>  
  </div>
</div>
<!-- Signup Ends-->