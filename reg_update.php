<?php
require("admin/connection.php");
$name=$_REQUEST ["a"];
$email=$_REQUEST ["b"];
$pass=$_REQUEST ["c"];
$address=$_REQUEST ["d"];
$countries =$_REQUEST ["country"];
$state=$_REQUEST["State"];
$id =$_REQUEST["reg_id"];
$res=$con->query("update register set cust_name	='$name' , email	='$email', password='$pass' , Address='$address',country='$countries',state = '$state' where reg_id='$id'");
$count=mysqli_affected_rows($con);
header("location:admin/reg_table.php");


?>
