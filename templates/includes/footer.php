
<section class="footer">

   <div class="jumbotron bg-primary">

    <div class="container" id="foot">
     <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
         <div class="row">
           <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
             <ul> 
              <li><h3><strong>E-Bazar</strong></h3></li>
              <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i><a href="#">&nbsp&nbspFacebook</a></li>
              <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i><a href="#">&nbsp Instagram</a></li>
              <li><i class="fa fa-twitter fa-2x" aria-hidden="true"></i><a href="#">&nbspTwitter</a></li>
             </ul>
           </div>
           <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
             <ul>
              <li><h5><strong>Explore</strong></h5></li>
              <li><a href="#" data-toggle="modal" data-target="#sellerlogin">Seller Login</a></li>
              <li><a href="#" data-toggle="modal" data-target="#sellersignup">Register Shop</a></li>
              <li><a href="#">Payments</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Cancellation</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Contact</a></li>
             </ul>
           </div>
           <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
             <ul>
              <li><h5><strong>Resources</strong></h5></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Developers</a></li>
              <li><a href="#">Career</a></li>
             </ul>
           </div>
           <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
             <ul>
              <li><h5><strong>Legal</strong></h5></li>
              <li><a href="#">Pivacy</a></li>
              <li><a href="#">Terms of Use</a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     

   </div>
      <div class="text-center text-warning copyright" id="foot">
     	<p>&copy All right reserves with E-bazar</p>
     </div>
</section>

  <!-- modal for ends ends-->
    <div class="modal fade" id="sellersignup" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h3 class="text-light">Sign Up</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
              <form  action="./templates/views/seller_signup_script.php" method="POST">
            <div class="form-group">
              <input type="text" name="shopname" class="form-control" placeholder="Shop Name">
            </div>
            <div class="form-group">
              <input type="email" name="selleremail" class="form-control"
              placeholder="Email">
            </div>
            <div class="form-group">
              <input type="contact" name="sellercontact" class="form-control"
              placeholder="Phone">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control"
              placeholder="Password">
            </div>
            <div class="form-group">
              <input type="password" name="confirmpassword" class="form-control"
              placeholder="Confirm Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Register</button></button><br/></div>

          </form>
        </div>
        <div class="modal-footer bg-primary text-light">
         <!--<p>Already have an Account?<a href="#" data-toggle="modal" data-target="#sellerlogin"><span class="text-warning"> Login</span></a></p>-->
        </div>
         
        </div>
        
        
      </div>
    </div>
  </div>
    <!-- modal for ends ends-->

  <!-- modal for login starts-->
<div class="modal fade" id="sellerlogin" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h3 class="text-light">Seller Login</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
              <form  action="./templates/views/seller_login_script.php" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="password" name="password" class="form-control"
              placeholder="Password">
            </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Login</button></button><br/></div>

          </form>
        </div>
        <div class="modal-footer bg-primary text-light">
         <!--<p>Do not have an Account?<a href="#" data-toggle="modal" data-target="#sellersignup"> <span class="text-warning">Sign Up</span></a></p>-->
        </div>
         
        </div>
        
        
      </div>
    </div>
  </div>
  <!-- seller login modal ended-->
  
    


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="public/js/style.js"></script>
<script src="../../public/js/style.js"></script>
<script src="public/owlCarousel/owl.carousel.min.js"></script>
<script src="../../public/owlCarousel/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>