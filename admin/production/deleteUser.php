<?php
$id= $_GET['id'];
require("../../db.php");
$type=$_GET['type'];

echo $id.$type;

if($type=="admin"){
    $delete= mysqli_query($db, "DELETE FROM `user` WHERE `uid`='$id'");

    if($delete){
        echo "<script>window.location.href='user.php'</script>";
    }
}else{
    $deletedelivery= mysqli_query($db, "DELETE FROM `delivery_user` WHERE `personel_id`='$id'");

    if($deletedelivery){
        echo "<script>window.location.href='user.php'</script>";
    }
}
?>