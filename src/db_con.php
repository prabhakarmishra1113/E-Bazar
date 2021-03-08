<?php

  $Drive_Host_DataBaseName="mysql:host=localhost; dbname=ebazar;";
  $user_name="root";
  $password="";

  try
  {
       $con=new PDO($Drive_Host_DataBaseName,$user_name,$password);
  }
  catch(PDOException $e)
  {
    echo "connection Failed".$e->getMessage();
  }

?>