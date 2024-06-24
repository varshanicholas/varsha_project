<?php
require("connection.php");
$name=$_REQUEST ["a"];
$price=$_REQUEST ["b"];
$type=$_REQUEST ["c"];
$discount=$_REQUEST ["d"];
$colors =$_REQUEST ["e"];
$file=$_FILES["image"]["name"];
$res = $con->query("INSERT INTO `form` (`Proname`, `Proprice`, `Type`,`Discount`,`Color`,`Image`) 
VALUES ('$name', '$price', '$type', '$discount', '$colors', '$file')");
$count=mysqli_affected_rows($con);
move_uploaded_file($_FILES["image"]["tmp_name"],"pic/".$file);
header("location:main-page.php");
?>
