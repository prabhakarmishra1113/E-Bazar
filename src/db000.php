<?php

  $Drive_Host_DataBaseName="mysql:host=localhost; dbname=id16099468_ebazar;";
  $user_name="id16099468_capstone";
  $password="Pd@123456789";

  try
  {
       $con=new PDO($Drive_Host_DataBaseName,$user_name,$password);
  }
  catch(PDOException $e)
  {
    echo "connection Failed".$e->getMessage();
  }

?>