<?php
session_start();
require("connection.php");
$U =$_REQUEST["un"];
$pass =$_REQUEST["psw"];
$res = $con->query(" SELECT * FROM `admin` WHERE `Username` = '$U' AND `password` = '$pass'");
$count = $res->num_rows;

if($count>0)
{
    $_SESSION["USER"]=$U;
    header("location: main-page.php");
}

else{
    echo "<script type= 'text/javascript'>
    alert('Username and password wrong');
    window.location.href = 'index.php';
    </script>";
    

    
}
?>