<?php
// db connection:
include("dbService.php");

// header("Content-Type: application/json; charset=UTF-8");
// $obj = json_decode($_POST["x"], false);

$requestPayload = file_get_contents("php://input");
$obj = json_decode($requestPayload);

var_dump($obj);

$qAdd = "INSERT INTO `orders` (`name`, `price`, `count`, `total`) 
    VALUES ('".$obj->name."','".$obj->price."','".$obj->count."','".$obj->total."')";

if ($connection->query($qAdd)!==TRUE) {
    echo "<script>alert('Order ekleme işleminde sıkıntı çıktı...')</script>";
}

?>