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
//view data
$sql_view = "SELECT * FROM faculty WHERE `name` = 'NIK'";
$result = mysqli_query($con, $sql_view);

if(mysqli_num_rows($result)>0){
   $sql_delete = "DELETE FROM faculty WHERE `name` = 'NIK'";
   if (mysqli_query($con, $sql_delete)) {
       echo "Successfully Deleted !!!!";
   }else{
       echo "Error in delete " . mysqli_error($con);
   }
}else{
    echo "No data available !!!! " . mysqli_error($con);
}
?>