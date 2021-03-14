<?php include "../../src/db_con.php" ?>

<?php include "../includes/header.php" ?>

<?php $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<!--seller details  Start-->  
 <div class="container-fluid product_page">
    <div class="row">
       <div class="col-lg-2 filter hide-on-small">
         
         <div class="card">
             <div class="card-header" style="display:flex; justify-content:space-between;">
            <div>My Profile</div>
            <button class="btn btn-warning btn-sm"><a href="#" data-toggle="modal" data-target="#seller_info_edit"><strong>Edit</strong></a></button>
            </div>
            <div class="card body">
              <h6 class="card-title text-secondary">SHOP NAME/SELLER NAME(from db)</h6>
              <ul>
                <li>Owner</li>
                <li>Email</li>
                <li>Phone</li>
                <li>Adrees</li>
                <li>city</li>
                <li>state</li>
                <li>pin</li>
                </ul>
            </div>
         </div>

        </div>
 <!--Product Section Start-->    
       <div class="col-12 col-lg-10 product_sec">      
         <div class="card">
             <div class="card-header" style="display:flex; justify-content:space-between;">
                 <div><h5>Listed Items</h5></div>
                 <button class="btn btn-warning text-right"><a href="#" data-toggle="modal" data-target="#AddItems"><strong>Add Items</strong></a></button>
                 </div>
            
           
           <div class="card-body">
         <p> all the listed item of this particular seller will be listed here from db</p>
           </div>

           <!--Pagination Start-->
            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-center">
                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                 </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                 </li>
                </ul>
            </nav>
            <!--Pagination End-->
         </div>     
       </div>
    <!--Product Section End-->
    </div>
  <!--Product Page Row End-->  
 </div>
<!--Product Page End-->  
  <!-- modal for item addition starts-->
<div class="modal fade" id="AddItems" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="text-primary">Item Details</h3>
          <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
              <form  action="#" method="POST">
            <div class="form-group">
              <input type="text" name="productname" class="form-control" placeholder="Product Name">
            </div>

            <div class="form-group">
              <input type="number" name="price" class="form-control"
              placeholder="Price">
            </div>
            <div class="form-group">
              <input type="text" name="color" class="form-control"
              placeholder="Color">
            </div>
            <div class="form-group">
              <select name="category" class="form-control">
                                                         <option>Men</option>
                                                         <option>Women</option>
                                                          <option>Kids</option>
                                                           <option>Mobiles</option>
                                                            <option>Fruits & Vegetables</option>
                                                             <option>Dairy & Bakery</option>
                                                              <option>Grocery</option>
</select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Add</button><br/></div>

          </form>
        </div>
         
        </div>
        
      </div>
    </div>
  </div>
    <!-- modal for item addition ends-->
  <!-- modal for seller information update starts-->
  <div class="modal fade" id="seller_info_edit" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="text-primary">Update details</h3>
          <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
              <form  action="#" method="POST">
            <div class="form-group">
              <input type="text" name="shopname" class="form-control" placeholder="Shop Name/ Seller name">
            </div>

            <div class="form-group">
              <input type="text" name="owner" class="form-control"
              placeholder="Owner">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control"
              placeholder="Email">
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
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Update</button><br/></div>

          </form>
        </div>
         
        </div>
        
      </div>
    </div>
  </div>
  <!-- modal end for seller info update ends-->
  
<<<<<<< HEAD
<?php include "../includes/footer.php" ?>
=======
<?php include "../includes/footer.php" ?>
>>>>>>> 85ff0efeff1ffa45da56cd4751e791b6fb94893f
