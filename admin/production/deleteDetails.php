<?php
$id= $_GET['id'];
require("../../db.php");
$deletePayment= mysqli_query($db, "DELETE FROM `payment_form` WHERE `payment_id`= '$id'");
if($deletePayment){
$deleteDelivery= mysqli_query($db, "DELETE FROM `delivery` WHERE `payment_id`='$id'");
if($deleteDelivery){
    echo "<script>window.location.href='deliverydetails.php'</script>";
}
   
}
?>