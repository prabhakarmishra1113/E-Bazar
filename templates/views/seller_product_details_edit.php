<?php include "../../src/db_con.php" 
?>
<?php 
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
session_start(); ?>
<?php include "../includes/header.php" ?>

<?php  $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<section class="product_details">

  <div class="container-fluid">
    <div class="row m-4">
  
  <!--Product Images Part Start-->  
      <div class="col-md-12 col-lg-12">
         <div class="card">
             <div class="col-md-4 col-lg-4 card-header" style="margin: 0 auto;">
                 <div><h5 class="font-weight-bold">Update Details</h5></div>
                 </div>
        
        
           <div class="card-body">
              <!--form for updation-->
             <div class="row">
                 <div class="col-md-4 col-lg-4 p-3" style="margin: 0 auto;background-color:white;">
                     <?php
              $id=$_REQUEST['id'];
              $query="SELECT * FROM products WHERE product_id='$id'";
              $result = mysqli_query($con, $query)or die($mysqli_error($con));
              $num = mysqli_num_rows($result);
              $row = mysqli_fetch_array($result);
                  $name=$row['product_name'];
                  $details=$row['product_details'];
                  $color=$row['product_color'];
                  $size=$row['product_size'];
                  $price=$row['product_price'];
                  $discount=$row['product_discount'];
                  $cat=$row['product_cat'];
                  $subcat=$row['product_subcat'];
                  $image=$row['product_images'];
                  
                  
                  ?>
              <form  action="#" method="POST">
                  <label for="productname" class="text-primary font-weight-bold">Product Name:</label>
            <div class="form-group">
              <input type="text" name="productname" class="form-control"   value="<?php echo $name; ?>">
            </div>
             <label for="productdetails" class="text-primary font-weight-bold">Product Details:</label>
            <div class="form-group">
              <input type="text" name="productdetails" class="form-control"  
              value="<?php echo $details; ?>">
            </div>
             <label for="productcolor" class="text-primary font-weight-bold">Product Color:</label>
            <div class="form-group">
              <input type="text" name="productcolor" class="form-control"  
              value="<?php echo $color; ?>">
            </div>
             <label for="productsize" class="text-primary font-weight-bold">Product Size:</label>
             <div class="form-group">
              <input type="text" name="productsize" class="form-control" 
              value="<?php echo $size; ?>">
            </div>
             <label for="productprice" class="text-primary font-weight-bold">Product Price:</label>
             <div class="form-group">
              <input type="number" name="productprice" class="form-control" 
              value="<?php echo $price; ?>">
            </div>
             <label for="productdiscount" class="text-primary font-weight-bold">Discount %:</label>
             <div class="form-group">
              <input type="number" name="productdiscount" class="form-control"  
              value="<?php echo $discount; ?>">
            </div>
             <label for="productcategory" class="text-primary font-weight-bold">Product Category:</label>
             <div class="form-group">
              <select name="productcategory" class="form-control" value="<?php echo $cat; ?>">
                 <option>Men</option>
                 <option>Women</option>
                 <option>Kids</option>
                 <option>Mobiles</option>
                 <option>Electronics</option>
                 <option>Fruits & Vegetables</option>
                 <option>Dairy & Bakery</option>
                 <option>Grocery</option>
              </select>
            </div>
            <label for="productsubcategory" class="text-primary font-weight-bold">Product Sub-Category:</label>
             <div class="form-group">
              <input type="text" name="productcategory" class="form-control" value="<?php echo $subcat; ?>">
            </div>
             <label for="productimage" class="text-primary font-weight-bold">Product Image:</label>
            <div class="form-group">
              <input type="file" name="productimage" class="form-control"  
              value="<?php echo $image; ?>">
              </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md mt-4">Update</button>

          </form>
        </div>
         
        </div>
        
      </div>
      </div>
    </div>
</section>
<?php include "../includes/footer.php" ?>
