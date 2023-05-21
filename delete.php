<?php
require("db.php");

$id= $_GET['id'];


$deletePayment= mysqli_query($db, "DELETE FROM `payment_form` WHERE `payment_id`= '$id'");
if($deletePayment){
    mysqli_query($db, "DELETE FROM `delivery` WHERE `payment_id`= '$id'");
    echo "<script>window.location.href='purchase.php'</script>";
}
?>