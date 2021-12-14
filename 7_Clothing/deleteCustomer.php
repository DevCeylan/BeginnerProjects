<?php

include("dbService.php");

$id = $_GET['dlt'];

$sql = "DELETE FROM `customers` WHERE `customers`.`id` = '$id'";

$exec = mysqli_query($connection,$sql);

if ($exec) {
    header('LOCATION:manage.php'); die();
}

?>