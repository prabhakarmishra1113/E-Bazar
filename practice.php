<!DOCTYPE html>
<html>

<head>
</head>


<body>
 
<?php

include "src/db_con.php";

$query="SELECT * FROM practice";
$result=$con->prepare($query);
$result->execute();
$row=$result->fetch(PDO::FETCH_ASSOC);
$img = $row['Images'];
$img2 = explode(",",$img);
?>

<img src="public/images/men/<?php echo $img2[0];?>">

</body>

</html>
