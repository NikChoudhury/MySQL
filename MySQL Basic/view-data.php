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
$sql_view = "SELECT * FROM faculty";
$result = mysqli_query($con, $sql_view);

if(mysqli_num_rows($result)>0){
    // $row =mysqli_fetch_assoc($result);
    // print_r($row);
    // while($row =mysqli_fetch_assoc($result)){
    //     print_r($row);

    // }
    // or
    echo "<table border= 1 width =auto height = auto>";
    echo "<thead>";
    echo "<th>Id</th> <th>Name</th> <th>Email</th>";
    echo "</thead>";
    echo "<tbody>";
    while($row =mysqli_fetch_assoc($result)){
       
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["email"]."</td></tr>";
    
    }
    echo "</tbody>";
    echo "</table>";
}else{
    echo "No data available !!!!";
}
?>