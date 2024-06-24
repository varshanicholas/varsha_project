<?php
require("connection.php");
$id=$_REQUEST["del"];
$res=$con->query("delete from form where cust_id= '$id ' ");
$count=$res->num_rows;
if($count>0)
{
  header("location:main-page.php");
}else
{
    /*echo "<script type= 'text/javascript'>
    alert('Do you want to delete');
    window.location.href = 'table.php';
    </script>";*/
    header("location:table.php");
}