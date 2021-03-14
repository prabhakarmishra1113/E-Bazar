

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
             ?>
          
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="lc"><?php echo $_SESSION['user_name']; ?></span></a>
               
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Profile</a>
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
<<<<<<< HEAD
=======
               <a class="nav-link" href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user"></i> <span class="lc">Login</span></a>
            </li>
            <li class="nav-item">
>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
               <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> <span class="lc">Cart</span></a>
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
<<<<<<< HEAD
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=man">Men <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=women">Women <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=kids">Kids <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=mobile">Mobiles <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=electronics">Electronics <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=fruites">Fruits & Vegetables <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=dairy">Dairy & Bakery <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?product_key=grocery">Grocery <i class="fa fa-chevron-down"></i></a>
=======
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=man">Men <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=women">Women <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=kids">Kids <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=mobile">Mobiles <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=electronics">Electronics <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=fruites">Fruits & Vegetables <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=dairy">Dairy & Bakery <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=grocery">Grocery <i class="fa fa-chevron-down"></i></a>
>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
    </nav>
  </div>
  </section>
  <!--Product Category Section End--> 
<<<<<<< HEAD
  
<!-- modal for login starts-->
 <div class="modal fade" id="login" role="dialog">
=======
    <!-- modal for login starts-->
<div class="modal fade" id="login" role="dialog">
>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h3 class="text-light">Login</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
<<<<<<< HEAD
           <form  action="src/server/user_signup_login.php" method="POST">

            <div class="form-group">
              <input type="text" name="userlogin" class="form-control" placeholder="Email Or Phone">
            </div>

            <div class="form-group">
              <input type="password" name="userpassword" class="form-control"
              placeholder="Password">
            </div>

            <button type="submit" name="login" class="btn btn-primary btn-block btn-md">Login</button></button></div>
            <p class="text-center text-danger"><?php if(isset($_SESSION['loginmsg'])){ echo $_SESSION['loginmsg']; }?></p>
=======
              <form  action="#" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="password" name="password" class="form-control"
              placeholder="Password">
            </div>
            <div class="form-group">
              <select name="category" class="form-control">
                                                         <option>User</option>
                                                         <option>Seller</option>
                                                         <option>Admin</option>
              </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Login</button></button><br/></div>

>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
          </form>
        </div>
        <div class="modal-footer bg-primary text-light">
         <p>Do not have an Account?<a href="#" data-toggle="modal" data-target="#signup"> <span class="text-warning">Sign Up</span></a></p>
        </div>
         
<<<<<<< HEAD
        </div>    
      </div>
    </div>
<!-- modal for ends ends-->
=======
        </div>
        
        
      </div>
    </div>
  </div>
    <!-- modal for login ends ends-->
<!-- modal for signup-->
>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
    <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h3 class="text-light">Sign Up</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
<<<<<<< HEAD
              <form  action="src/server/user_signup_login.php" method="POST">

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
=======
              <form  action="#" method="POST">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control"
              placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control"
              placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" name="confirmpassword" class="form-control"
              placeholder="Confirm Password">
            </div>
             <div class="form-group">
              <input type="contact" name="contact" class="form-control"
              placeholder="Phone">
            </div>
             <div class="form-group">
              <input type="text" name="address" class="form-control"
              placeholder="Address">
            </div>
             <div class="form-group">
              <input type="text" name="city" class="form-control"
              placeholder="City">
            </div>
             <div class="form-group">
              <input type="text" name="state" class="form-control"
              placeholder="State">
            </div>
             <div class="form-group">
              <input type="number" name="pin" class="form-control"
              placeholder="Pin">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Register</button></button><br/></div>

>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
          </form>
        </div>
        <div class="modal-footer bg-primary text-light">
         <p>Already have an Account?<a href="#" data-toggle="modal" data-target="#login"><span class="text-warning"> Login</span></a></p>
<<<<<<< HEAD
        </div>         
        </div>  
      </div>
    </div>
  </div>
    <!-- modal for ends ends-->
<!--Header End-->
=======
        </div>
         
        </div>
        
        
      </div>
    </div>
  </div>
    <!-- modal for signup ends ends-->
<!--Header End-->
>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
