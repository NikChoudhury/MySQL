<?php
$host = "localhost:3308";
$user = "root";
$password = "";
$dbname = "testing";

$con = new mysqli($host,$user,$password,$dbname);

if($con->connect_error){
	die("Connection Faild " .$con->connect_error);
}
	if (isset($_POST['submit'])) {
		if (empty($_POST['id']) && empty($_POST['name'])) {
			echo "All Fields are Required !!!";
			exit();
		}else{
			// prepare and bind
			$stmt = $con->prepare("INSERT INTO `para`(`id`,`name`) VALUES (?,?)");
			$stmt ->bind_param("is", $id,$name);

			// set parameters and execute
			$id= mysqli_real_escape_string($con,$_POST['id']);
			$name= mysqli_real_escape_string($con,$_POST['name']);
			//$age= mysqli_real_escape_string($con,$_POST['age']);
			//$dob= mysqli_real_escape_string($con,$_POST['dob']);
			//$phone= mysqli_real_escape_string($con,$_POST['phone']);


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