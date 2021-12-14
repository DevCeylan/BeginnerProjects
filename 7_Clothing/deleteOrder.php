<?php

include("dbService.php");

$id = $_GET['dlt'];

$sql = "DELETE FROM `orders` WHERE `orders`.`id` = '$id'";

$exec = mysqli_query($connection,$sql);

if ($exec) {
    header('LOCATION:manage.php'); die();
}

?>