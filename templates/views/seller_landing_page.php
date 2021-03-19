<?php include "../../src/db_con.php" ?>
<?php 
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
session_start();
?>

<?php include "../includes/header.php" ?>

<?php $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>


<!--seller details  Start-->  
 <div class="container-fluid product_page">
    <div class="row">
       <div class="col-lg-2">
         
         <div class="card">
             <div class="card-header" style="display:flex; justify-content:space-between;">
            <h5>My Profile</h5>
            <button class="btn btn-warning btn-sm"><a href="#" data-toggle="modal" data-target="#seller_info_edit"><strong>Edit</strong></a></button>
            </div>
            <div class="card body p-3">
                <?php
$email=$_SESSION['seller_email'];
$query = "SELECT * FROM sellers WHERE seller_email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num >= 1)
{
    echo "<h6 class='card-title text-danger'style='text-transform:uppercase; font-weight:bold'>".$row['shop_name']."</h6><hr/>";
    echo "<ul style='list-style-type:none;'>
                <li><span class='text-primary'>Owner:</span>".$row['owner']."</li>
                <li><span class='text-primary'>Email:</span>".$row['seller_email']."</li>
                <li><span class='text-primary'>Contact:</span>".$row['seller_phone']."</li>
                <li><span class='text-primary'>Address:</span>".$row['seller_address']."</li>
                <li><span class='text-primary'>City:</span>".$row['seller_city']."</li>
                <li><span class='text-primary'>State:</span>".$row['seller_state']."</li>
                <li><span class='text-primary'>Pincode:</span>".$row['seller_pincode']."</li>
                </ul>";
}
?>
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
              
             <!--Product Card Start-->
             <div class="row">
             <?php
              //$category=$_REQUEST['product_key'];
              $id=$_SESSION['seller_id'];
              $query="SELECT * FROM products WHERE seller_id='$id'";
              $result = mysqli_query($con, $query)or die($mysqli_error($con));
              $num = mysqli_num_rows($result);
              $row = mysqli_fetch_array($result);
              if($num >= 1)
              {
               while($row=mysqli_fetch_array($result))
                {
                   $tempimg = $row['product_images'];
                  $img = explode(",",$tempimg);
                ?>
              <div class="col-6 col-md-4 col-lg-3">
               <div class="card">
                 <a class="text-center" href="seller_product_details.php?product_key=<?php echo $row['product_id']; ?>"><img src="../../public/images/products/<?php echo $img[0]; ?>" class="img-fluid"></a>
                 <div class="card-footer">
                   <figcaption class="figure-caption brand">E-BAZAR</figcaption>
                   <a href="product_detail.php?product_key=<?php echo $row['product_id']; ?>"><figcaption class="figure-caption title text-truncate"><?php echo $row['product_name']; ?></figcaption></a>
                   <figcaption class="figure-caption color text-truncate"><?php echo $row['product_color'] ?></figcaption>
                   <figcaption class="figure-caption rs">₹<?php $x=$row['product_price'];$y=$row['product_discount']; $money=($x-($x*$y)/100); echo $money; ?> <del>₹<?php echo $row['product_price']; ?></del> <span class="text-success"><?php echo $row['product_discount']; ?>% off</span></figcaption>
                   <button class="btn btn-primary w-100 mt-1">Click On Image To See Detail</button>
                 </div>
               </div>
              </div>
            <?php
              }
              }
              else
              {
                  echo "<h5>No Product Listed yet!</h5>";
              }
            ?>
            </div>
             <!--Product Card End-->         
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
        <div class="modal-header bg-primary">
          <h3 class="text-light">Item Details</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-left">
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
  <?php
              $id=$_SESSION['seller_id'];
              $query="SELECT * FROM sellers WHERE seller_id='$id'";
              $result = mysqli_query($con, $query)or die($mysqli_error($con));
              $num = mysqli_num_rows($result);
              $row = mysqli_fetch_array($result);
                  $shop=$row['shop_name'];
                  $owner=$row['owner'];
                  $email=$row['seller_email'];
                  $phone=$row['seller_phone'];
                  $address=$row['seller_address'];
                  $city=$row['seller_city'];
                  $state=$row['seller_state'];
                  $pin=$row['seller_pincode'];
                  $r=$GLOBALS['shop'];
                  $s=$GLOBALS['owner'];
                  $t=$GLOBALS['email'];
                  $u=$GLOBALS['phone'];
                  $v=$GLOBALS['address'];
                  $w=$GLOBALS['city'];
                  $x=$GLOBALS['state'];
                  $y=$GLOBALS['pin'];
                  
                  ?>
  <div class="modal fade" id="seller_info_edit" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h3 class="text-light">Update details</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-left">
          <div class="text-center pt-5 pb-5">
              <form  action="./seller_info_update_script.php" method="POST">
            <div class="form-group">
              <input type="text" name="shopname" class="form-control"  placeholder="Shop Name" value="<?Php echo "$r"; ?>">
            </div>

            <div class="form-group">
              <input type="text" name="owner" class="form-control"  placeholder="Owner"
              value="<?Php echo "$s"; ?>">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control"  placeholder="Email"
              value="<?Php echo "$t"; ?>" readonly>
            </div>
             <div class="form-group">
              <input type="contact" name="contact" class="form-control"  placeholder="Phone"
              value="<?Php echo "$u"; ?>">
            </div>
             <div class="form-group">
              <input type="text" name="address" class="form-control"  placeholder="Address"
              value="<?Php echo "$v"; ?>">
            </div>
             <div class="form-group">
              <input type="text" name="city" class="form-control"  placeholder="City"
              value="<?Php echo "$w"; ?>">
            </div>
             <div class="form-group">
              <input type="text" name="state" class="form-control" placeholder="State"
              value="<?Php echo "$x"; ?>">
            </div>
             <div class="form-group">
              <input type="number" name="pin" class="form-control" placeholder="Pincode"
              value="<?Php echo "$y"; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Update</button><br/></div>

          </form>
        </div>
         
        </div>
        
      </div>
    </div>
  </div>
  <!-- modal end for seller info update ends-->
  
<?php include "../includes/footer.php" ?>