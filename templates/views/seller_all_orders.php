<?php include "../../src/db_con.php" ?>

<?php include "../includes/header.php" ?>

<?php $index="../../index.php"; $path="../../"; include "../includes/navbar.php" ?>

<!--seller details  Start-->  
 <div class="container-fluid product_page">
    <div class="row">
             <div class="col-12 col-lg-6 product_sec">      
         <div class="card">
             <div class="card-header" style="display:flex; justify-content:space-between;">
                 <div><h5>New & Pending Orders</h5></div>
                 </div>
            
           
           <div class="card-body p-4">
  <!-- loop this module using php so that all the product that has been new order and pending can be listed here-->
            <div style="display:flex; justify-content:space-between;">
            <div><h6 class="card-title"><strong>Product name(from db)</strong></h6></div>
            <div><img src="" alt="product_image" height=25px; width=25px;></div>
            </div>
            <a class="text-success" data-toggle="collapse" data-target="#demo">View details</a>
               <div id="demo" class="collapse">
               <div class="text-secondary"><span>Order By: name <br/> Email: email <br/> Contact: contact <br/> Date: date <br/>Location: location</span></div>
               </div>
             <hr/>
             <!-- code ended that should be kept in loop-->
           
           </div>

          
         </div>     
       </div>
 <!--Product Section Start-->    
       
       <div class="col-lg-6">
         
         <div class="card">
             <div class="card-header">
            <h5>Accepted & Dispatched Orders</h5>
            </div>
            <div class="card body p-4">
                <!-- loop this module using php so that all the product that has been accepted & dispached can be listed here-->
            <div style="display:flex; justify-content:space-between;">
            <div><h6 class="card-title"><strong>Product name(from db)</strong></h6></div>
            <div><img src="" alt="product_image" height=25px; width=25px;></div>
            </div>
            <a class="text-success" data-toggle="collapse" data-target="#demo1">View details</a>
               <div id="demo1" class="collapse">
               <div class="text-secondary"><span>Order By: name <br/> Email: email <br/> Contact: contact <br/> Date: date <br/>Location: location</span></div>
               </div>
             <hr/>
             <!-- code ended that should be kept in loop-->
           
            </div>
         </div>

        </div>
       
    <!--Product Section End-->
    </div>
  <!--Product Page Row End-->  
 </div>
<!--Product Page End-->  
<?php include "../includes/footer.php" ?>