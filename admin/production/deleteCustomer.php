<?php
$id= $_GET['id'];
require("../../db.php");
$delete= mysqli_query($db, "DELETE FROM `customer` WHERE `id`='$id'");

if($delete){
    echo "<script>window.location.href='customer.php'</script>";
}
?>