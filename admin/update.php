<?php
require("connection.php");
$name=$_REQUEST ["a"];
$price=$_REQUEST ["b"];
$type=$_REQUEST ["c"];
$discount=$_REQUEST ["d"];
$colors =$_REQUEST ["e"];
$file=$_FILES["image"]["name"];
$id=$_REQUEST["cusid"];
if (empty($_FILES["image"]["name"]))
{
$res=$con->query("update form set Proname	='$name' , Proprice	='$price',Type='$type',Discount='$discount',Color='$colors' where cust_id='$id'");
$count=mysqli_affected_rows($con);
header("location:main-page.php");
}
else{
    $file=$_FILES["image"]["name"];
    $res=$con->query("update form set Proname	='$name' , Proprice	='$price',Type='$type',Discount='$discount',Color='$colors' Image='$file' where cust_id='$id'");
    move_uploaded_file($_FILES["image"]["tmp_name"],"pic/".$file);
   
}
header("location:table.php");

?>
