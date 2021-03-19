<?php
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
$id=$_REQUEST['id'];

$query = "DELETE FROM products WHERE product_id='$id'";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    echo "<script type='text/javascript'>alert('Product Deleted Successfully');window.location.href='seller_landing_page.php';</script>";


?>
