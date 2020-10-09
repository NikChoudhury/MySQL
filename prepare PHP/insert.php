<?php

$host = "localhost:3306";
$user = "root";
$password = "";
$dbname= "test";

$con = new mysqli($host,$user,$password,$dbname);

if($con->connect_error){
	die("Connection Faild " .$con->connect_error);
}
	if (isset($_POST['submit'])) {
		if (empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['age']) && empty($_POST['dob']) && empty($_POST['phone'])) {
			echo "All Fields are Required !!!";
			exit();
		}else{
			// prepare and bind
			$stmt = $con->prepare("INSERT INTO `prepareinsert`(`fname`, `lname`, `age`, `dob`, `phone`) VALUES (?,?,?,?,?)");
			$stmt ->bind_param("ssiss", $fname,$lname,$age,$dob,$phone);

			// set parameters and execute
			$fname= mysqli_real_escape_string($con,$_POST['fname']);
			$lname= mysqli_real_escape_string($con,$_POST['lname']);
			$age= mysqli_real_escape_string($con,$_POST['age']);
			$dob= mysqli_real_escape_string($con,$_POST['dob']);
			$phone= mysqli_real_escape_string($con,$_POST['phone']);


			if ($stmt ->execute()) {
				echo "Succcessfully inserted !!!";
				// echo "$stmt";
				print_r($stmt);
				$stmt ->close();
				$con ->close();

			}else{
				echo "Error !!!!!!!!!!!";
				// echo "$stmt";
				print_r($stmt);
				exit();
			}


			


		}

	}




















?>