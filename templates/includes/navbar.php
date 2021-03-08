
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
                <a class="navbar-brand ml-lg-3 ml-lg-4" href="<?php echo $path ?>">E-Bazar</a>
             </li>
         </ul>
    <!--Icon and Logo Section End-->

    <!--SignIn/SignUp and Cart Section Start-->
        <ul class="nav ml-auto order-sm-last mr-lg-5 rc">
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fa fa-user"></i> <span class="lc">Login/signin</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> <span class="lc">cart</span></a>
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
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=man">Men <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=women">Women <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=kids">Kids <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=mobile">Mobiles <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=electronics">Electronics <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=fruites">Fruits & Vegetables <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=dairy">Dairy & Bakery <i class="fa fa-chevron-down"></i></a>
      <a class="p-2 text-muted" href="<?php echo $path ?>templates/views/products_page.php?cat=grocery">Grocery <i class="fa fa-chevron-down"></i></a>
    </nav>
  </div>
  </section>
  <!--Product Category Section End--> 
<!--Header End-->