<?php
// Connect To database
$host = "localhost:3306";
$username = "root";
$password = "";
$con = new mysqli($host,$username,$password);
print_r($con);
if ($con->connect_error) {
    die("Connection faild".$con->connect_error);
}else{
    echo "Successfully Connected !!!";
}


?>