<?php

 if (isset($_POST['submitBtn'])) {
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         
         $host = "localhost:3306";
         $user = "root";
         $password = "";
         $dbname= "test";

         $con = new mysqli($host,$user,$password,$dbname);

         if($con->connect_error){
            die("Connection Faild " .$con->connect_error);
         }else{
            
            $stat = $con->prepare("SELECT * FROM `prepareinsert` WHERE `id` = ?");
            $stat-> bind_param("i", $id);
            $id = mysqli_real_escape_string($con, $_POST['id']);
            $stat->execute();
            $result = $stat->get_result();

            if (!mysqli_num_rows($result)==1) {
                 $Err = "Invalid Search";
                 $stat->close();
                 $con->close();
            }else{
                $fetch_row = mysqli_fetch_assoc($result);
                $fname = $fetch_row['fname'];
            }
         }
     }
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />

  
    <title>Weather App</title>

    <style type="text/css">
        * {
          padding: 0;
          margin: 0;
          -webkit-box-sizing: border-box;
                  box-sizing: border-box;
          font-family: serif;
        }

        

        html {
          font-size: 62.5%;
        }

        body {
          min-height: 100vh;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
              -ms-flex-pack: center;
                  justify-content: center;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
              -ms-flex-direction: column;
                  flex-direction: column;
        }

        .row {
          margin: 0;
        }
        .tempInformation .input-div .temp-form {
          position: relative;
          width: 80%;
          margin: 5rem auto;
        }

        .tempInformation .input-div .temp-form input[type="text"] {
          width: 100%;
          font-size: 1.7rem;
          padding: 2rem 5rem 2rem 2rem;
          outline: none;
          color: #fff;
          background-color: #1e202b;
          border: none;
          border-radius: 3rem;
        }

        .tempInformation .input-div .temp-form ::-webkit-input-placeholder {
          color: whitesmoke;
        }

        .tempInformation .input-div .temp-form :-ms-input-placeholder {
          color: whitesmoke;
        }

        .tempInformation .input-div .temp-form ::-ms-input-placeholder {
          color: whitesmoke;
        }

        .tempInformation .input-div .temp-form ::placeholder {
          color: whitesmoke;
        }

        .tempInformation .input-div .temp-form input[type="submit"] {
          position: absolute;
          top: 5px;
          right: 5px;
          bottom: 5px;
          border: none;
          background: #009ad8;
          padding: 0 3rem;
          color: whitesmoke;
          font-size: 1.5rem;
          border-radius: 3rem;
          outline: none;
        }

        .tempInformation .output-div {
          width: 40rem;
          margin: auto;
          min-height: 30rem;
          background-color: #323544;
          border-radius: 1rem;
        }

        

        .tempInformation .output-div .main-layer {
          width: 100%;
          height: 80%;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
              -ms-flex-direction: column;
                  flex-direction: column;
          padding: 2rem;
        }

        .tempInformation .output-div .main-layer #getOutput {
          color: #fff;
          font-size: 1.8rem;
          padding: 2rem 0;
        }

       
    </style>

</head>

<body>
    

    <!-- Hero Section Start -->
    <section class="hero">
        <!-- Conatiner start -->
        <div class="container-fluid">
            <!-- Main Row Start -->
            <div class="row">
               <!-- Main Col Start -->
                <div class="col-md-8 col-sm-12 col-12 mx-auto">
                    <div class="tempInformation">
                        <div class="input-div">
                            <form class="temp-form" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                                <input type="text" id="cityName" name="id" placeholder="Enter ID here" autocomplete="off">
                                <input type="submit" name="submitBtn" value="Search" id="submitBtn">
                            </form>
                        </div>

                        <div class="output-div">
                            
                            <div class="main-layer">
                                <p id="getOutput">
                                    <?php 
                                        if(isset($fname)){
                                            echo $fname;
                                        }elseif (isset($Err)) {
                                            echo "$Err";
                                        }else{
                                            echo "Get Output Here";
                                        }
                                    ?>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Col End -->
            </div>
            <!-- Main Row End -->
        </div>
        <!-- Conatiner End -->
    </section>
    <!-- Hero Section END -->

    <!-- FOOTER START -->
   
    <!-- Footer End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

  
</body>

</html>