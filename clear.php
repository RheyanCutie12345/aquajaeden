<?php
require ("db.php");
$user= $_COOKIE['user'];
$selectquery= mysqli_query($db, "SELECT * FROM `payment_form` WHERE `Name`= '$user'");

while($data= mysqli_fetch_array($selectquery)){
    $id= $data['payment_id'];

    mysqli_query($db, "DELETE FROM `payment_form` WHERE `payment_id`='$id'");
    mysqli_query($db, "DELETE FROM `delivery` WHERE `payment_id`= '$id'");
}

echo "<script>window.location.href='purchase.php';</script>";

?>