<?php
require("connection.php");
$id=$_REQUEST["del"];
$res=$con->query("delete from register where reg_id= '$id ' ");
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
    header("location:reg_table.php");
}