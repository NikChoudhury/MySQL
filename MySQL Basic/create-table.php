<?php

// Connect To database
$host = "localhost:3306";
$username = "root";
$password = "";
$dbname = "college";
$con = new mysqli($host,$username,$password,$dbname);
if ($con->connect_error) {
    die("Connection faild".$con->connect_error);
}else {
    // Create a simple table
    // $sql_table = "CREATE TABLE teachers(
    //     id INT,
    //     first_name VARCHAR(55),
    //     last_name VARCHAR(55)
    // )";
    // if(mysqli_query($con,$sql_table)){
    //     echo "Table is successfully Created !!";
    // }else {
    //     echo "<br>";
    //     echo "Error in  creating table" . mysqli_error($con);
    // }


    //Create table with auto increment, primary key

    $sql_pre_table = "CREATE TABLE student (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(55) NOT NULL,
        email VARCHAR(55) NOT NULL
    )";
    if(mysqli_query($con,$sql_pre_table)){
        echo "Table is successfully created !!!";
    }else {
        echo "<br>";
        echo "Error in Creating table" . mysqli_error($con);
    }

}




?>