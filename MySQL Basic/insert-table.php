<?php

// Connect To database
$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "college";
$con = new mysqli($host,$username,$password,$dbname);
if ($con->connect_error) {
    die("Connection faild".$con->connect_error);
}
// Insert data into table
$sql_insert = "INSERT INTO student (name,email) value
('Nikumani', 'nik@gmail.com'),
('Nayan Nath', 'nayan@gmail.com'),
('Saurav Nath', 'saurav@gmail.com')";
if (mysqli_query($con,$sql_insert)) {
    echo "<br>";
    echo "Successfully Inserted !!!!";
    echo "<br>";
}else {
    echo "Error In insertion" . mysqli_error($con);
}




?>