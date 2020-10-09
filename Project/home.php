<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
    	session_regenerate_id(true);
    	echo "<pre>";
    		echo "Please Login first !!";
    	echo "</pre>";
    	unset($_SESSION['username']);
		session_destroy();
    	exit();
    }else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="./vendor/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- JQuery -->
    <script src="./vendor/jquery/dist/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./Components/navbar.css" />
    <!-- <link rel="stylesheet" href="./css/index.css" /> -->
    <!-- Preloader -->
    <link rel="stylesheet" href="./preloader/preloader2.css" />

    <!-- Font AWESOME -->

    <link rel="stylesheet" type="text/css" href="./vendor/font-awesome/css/font-awesome.min.css">
    <title>FaceInsta</title>
  </head>
  <body onload="preLoading()">
    <div id="loading">
      <div class="center-div">
        <h1>Loading....</h1>
      </div>
    </div>

 	 <!-- Navbar -->
 	 <?php include "./Components/navbar.php"?>
 
    <!-- Optional JavaScript -->
    <!-- Bootstrap JS -->
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Preloader -->
    <script src="./preloader/preloader.js"></script>
  </body>
</html>


<?php

    }

    

?>