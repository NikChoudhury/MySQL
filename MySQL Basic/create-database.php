<?php
// Connect To database
$host = "localhost:3306";
$username = "root";
$password = "";
$con = new mysqli($host,$username,$password);
// print_r($con);
if ($con->connect_error) {
    die("Connection faild".$con->connect_error);
}else{
    echo "Successfully Connected !!!";
}

//Create Database

$sql_create = "CREATE DATABASE college";

if(mysqli_query($con,$sql_create)){
    echo "<br>";
    echo "Database Successfully Created !";
}else{
    echo "Error". mysqli_error($con);
}


// // Delete database

// $sql_delete = "DROP DATABASE students";
// if(mysqli_query($con,$sql_delete)){
//     echo "<br>";
//     echo "Successfully deleted database !!!";
// }else{
//     echo "<br>";
//     echo "ERROR" . mysqli_error($con);
// }


?>