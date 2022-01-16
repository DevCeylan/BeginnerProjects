<?php

$db_server="localhost";
$db_user="root";
$db_pw="";
$db_name="muazzamodev";

$connection=mysqli_connect($db_server,$db_user,$db_pw,$db_name);

if (!$connection) {
    die("Database connection error!".mysqli_connect_error());
}

?>
