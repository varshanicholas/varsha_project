<?php
require("connection.php");

$id = $_REQUEST["var"];
$res = $con->query("UPDATE oodered_product SET status = '1' WHERE od_id = '$id'");
$count = mysqli_affected_rows($con);

if ($count > 0) {
    echo "<script type= 'text/javascript'>
    alert('Approved successfully');
    window.location.href = 'main-page.php';
    </script>";
    
}
?>