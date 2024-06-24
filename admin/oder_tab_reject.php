<?php
require("connection.php");

$id = $_REQUEST["reg"];
$res = $con->query("UPDATE oodered_product SET status = '2' WHERE od_id = '$id'");
$count = mysqli_affected_rows($con);

if ($count > 0) {
    header("location:main-page.php.");
}
?>