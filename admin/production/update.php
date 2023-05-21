<?php
require("../../db.php");

$uid= $_GET['id'];
$currentDate = date('M/d/Y');
$update = mysqli_query($db, "UPDATE `delivery` SET `Status`='Delivered', `Date_Delivered`= '$currentDate' WHERE `delivery_id`='$uid'");
if($update){
    header("Location: delivery.php");
}
?>