<?php
$db= mysqli_connect("localhost", "root", "", "aquajaeden");

if($db){
    if(!$db){
        die("Connection Failed". mysqli_connect_error());
    }
}
?>