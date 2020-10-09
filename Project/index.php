<?php

session_start();
if (!isset($_SESSION['username'])) {

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
    <link rel="stylesheet" href="./css/index.css" />
    <!-- Preloader -->
    <link rel="stylesheet" href="./preloader/preloader2.css">
    <title>FaceInsta</title>
  </head>
  <body onload="preLoading()">
    <?php
      include "login-script.php";
    ?>
    <div id="loading">
      <div class="center-div">
        <h1>Loading....</h1>
    </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-xl-10 col-10 m-auto">
          <div class="box">
            <div class="card-body">
              <div class="row">
                <div
                  class="col-md-6 col-xl-6 col-lg-6 d-none d-lg-block d-md-block bg-login-image"
                ></div>
                <div class="col-md-6 col-xl-6 col-lg-6 pl-2">
                  <div class="main-card">
                    <div class="card login-card" style="width: 100%">
                      <div class="card-body">
                        <div class="logo">
                          <a href="index.php">
                            <img src="./image/logo/navlogo.png" alt="FaceInsta" />
                          </a>
                        </div>
                        <div class="text-success">
                          <span style="padding: .1rem .8rem">
                            <?php
                              if (isset($userNameRequired)) {
                                echo $userNameRequired;
                              }elseif (isset($passwordRequired)) {
                                echo "$passwordRequired";
                              }elseif (isset($invalidPass)) {
                                echo $invalidPass;
                              }elseif (isset($usernameErr)) {
                               echo "$usernameErr";
                              }
                            ?>
                          </span>
                        </div>
                        <form class="form-group login-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <input
                            type="text"
                            name="username"
                            id="userName"
                            class="form-control"
                            placeholder="Username or Email"
                          />
                          <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Password"
                            autocomplete="current-password"
                          />
                          <input
                            type="submit"
                            value="Login"
                            name = "login"
                            class="form-control btn-primary"
                          />
                        </form>
                        <a href="#" class="card-link">Forgot password?</a>
                      </div>
                    </div>
                    <div class="card bottom-card" style="width: 100%">
                      <div class="card-body">
                        <h2>Don't have an account?<a href="reg.php"> Sign up</a></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bootstrap JS -->
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Preloader -->
    <script src="./preloader/preloader.js"></script>
  </body>
</html>
<?php

 
    
    }else{
      header("Location:home.php");
    }

?>