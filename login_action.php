<?php
session_start();
require("admin/connection.php");
$email =$_REQUEST["b"];

$pass =$_REQUEST["c"];

$res1 = $con->query(" SELECT * FROM `register` WHERE `email` = '$email' AND `password` = '$pass'");
$count1 = $res1->num_rows;

if($count1>0)
{
    $row=$res1->fetch_assoc();
    $user_id=$row["reg_id"];
    $_SESSION["user_id"]=$user_id;
    $_SESSION["email"]=$email;
    header("location: dashboard.php");
}

else{
    echo "<script type= 'text/javascript'>
    alert('Username and password wrong');
    window.location.href = 'index.php';
    </script>";
    

    
}
?>