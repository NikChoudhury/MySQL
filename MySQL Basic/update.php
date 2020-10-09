<?php

// Connect To database
$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "student";
$con = new mysqli($host,$username,$password,$dbname);
if ($con->connect_error) {
    die("Connection faild".$con->connect_error);
}


// update table data

$sql_update = "UPDATE faculty SET `name` = 'Biki', `email`= 'biki@gamil.com' WHERE id = 4";
if (mysqli_query($con, $sql_update)) {
    echo "Updated !!!";
}else{
    echo "Error in update" . mysqli_error($con);
}


?>