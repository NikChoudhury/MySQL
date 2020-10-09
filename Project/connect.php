<?php

$host = "localhost:3308";
$user = "root";
$password = "";
$database = "faceinsta";
$con = mysqli_connect($host,$user,$password,$database);
if ($con->connect_error) {
    die("Database connection error");
}



?>