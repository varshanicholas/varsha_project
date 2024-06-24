<?php
session_start();
require("admin/connection.php");
$name=$_REQUEST ["a"];
$type=$_REQUEST ["b"];
$price=$_REQUEST ["c"];
$discount=$_REQUEST ["d"];
$quantity=$_REQUEST ["e"];
$total =$_REQUEST ["f"];
$user_id= $_SESSION["user_id"];
$res = $con->query("INSERT INTO `oodered_product` (`pro_name`,`product_type`,`pro_price`,`discount`,`quantity`,`total`,`user_id`) 
VALUES ('$name', '$type', '$price', '$discount','$quantity','$total','$user_id')");
$counts=mysqli_affected_rows($con);
    header("location: index.php");

?>

