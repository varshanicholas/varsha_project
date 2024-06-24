<?php
require("admin/connection.php");
$name=$_REQUEST ["a"];
$email=$_REQUEST ["b"];
$pass=$_REQUEST ["c"];
$address=$_REQUEST ["d"];
$contry =$_REQUEST ["e"];
$state=$_REQUEST["f"];
$email_check = $con->query("SELECT * FROM `register` WHERE `email` = '$email'");

if ($email_check->num_rows > 0)
 {
    
    echo "<script>alert('Email already exists. Please try another one.');
     window.location.href='index.php';</script>";
}
 else {
$res = $con->query("INSERT INTO `register` (`cust_name`, `email`, `password`,`Address`,`country`,`state`) 
VALUES ('$name', '$email', '$pass', '$address', '$contry', '$state')");
$count=mysqli_affected_rows($con);
echo "<script>alert('Registered Successfully.');
window.location.href='index.php';</script>";
}
?>
