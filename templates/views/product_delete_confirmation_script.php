<?php
$con= mysqli_connect("localhost", "id16099468_capstone", "Pd@123456789", "id16099468_ebazar")or die($mysqli_error($con));
$id=$_REQUEST['id'];
echo "<script type='text/javascript'>if(window.confirm('Sure! Want to Remove this item?')){window.location.href='product_delete_script.php?id={$id}';}else{window.location.href='seller_product_details.php?product_key={$id}';}</script>";
?>
