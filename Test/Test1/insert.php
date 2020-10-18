<?php

include "connect.php";

if (isset($_POST['submit'])) {
	$uname = $_POST['uname'];
	$name = $_POST['name'];
	$file = $_POST['file'];

	$query ="REPLACE INTO student (`u_name`, `name`, `file`) VALUES('$uname','$name','$file')";
	// $query ="INSERT ignore INTO student (`u_name`, `name`, `file`) VALUES('$uname','$name','$file')";
	$result = mysqli_query($con,$query);
	print_r($result);
	if ($result==1) {
		echo "Success";
	}else{
		echo "Error";
		// print_r(mysqli_error());
	}
}

?>