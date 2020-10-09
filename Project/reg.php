<?php

session_start();

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
    <!-- font Awesome -->
    <link
      rel="stylesheet"
      href="./vendor/font-awesome/css/font-awesome.min.css"
    />

    <!-- JQuery -->
    <script src="./vendor/jquery/dist/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/index.css" />
    <!-- Preloader -->
    <link rel="stylesheet" href="./preloader/preloader2.css" />
    <title>FaceInsta</title>
  </head>
  
  <body onload="preLoading()">
  <?php include "reg-script.php"?>
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
                <div class="col-md-6 col-xl-6 col-lg-6 pl-2 m-auto">
                  <div class="main-card">
                    <div class="card login-card" style="width: 100%">
                      <div class="card-body">
                        <div class="logo">
                          <a href="index.php">
                            <img src="./image/logo/navlogo.png" alt="FaceInsta" />
                          </a>
                        </div>
                        <form class="form-group login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="POST" id="regForm">
                          <input
                            type="text"
                            name="fullname"
                            id="fullName"
                            class="form-control"
                            placeholder="Full Name"
                            value="<?php if (isset($_POST['fullname'])) {
                              if (!isset($successmeg)) {
                                echo htmlspecialchars($_POST['fullname']);
                              }else {
                                echo htmlspecialchars("");
                              }
                            }?>"
                            
                          />
                          <?php if (isset($namerequire)) { ?>
                            <?php echo "<p class='error-text'>$namerequire</p>"?>
                          <?php } ?>
                         
                          <input
                            type="email"
                            name="email"
                            id="eamil"
                            class="form-control"
                            placeholder="Email"
                            required
                            value="<?php if (isset($email)) {
                              if (!isset($successmeg)) {
                                echo htmlspecialchars($email);
                              }else {
                                echo htmlspecialchars("");
                              }
                            }?>"
                          />
                          <?php if (isset($emailrequire)) { ?>
                            <?php echo "<p class='error-text'>$emailrequire</p>"?>
                          <?php } ?>
                          <?php if (isset($emailexistmsg)) { ?>
                            <?php echo "<p class='error-text'>$emailexistmsg</p>"?>
                          <?php } ?>
                        
                          <input
                            type="text"
                            name="username"
                            id="userName"
                            class="form-control"
                            placeholder="Username"
                            required
                            value="<?php if (isset($username)) {
                              if (!isset($successmeg)) {
                                echo htmlspecialchars($username);
                              }else {
                                echo htmlspecialchars("");
                              }
                            }?>"
                          />
                          <?php if (isset($usernamerequire)) { ?>
                            <?php echo "<p class='error-text'>$usernamerequire</p>"?>
                          <?php } ?>
                          <?php if (isset($unameexistmsg)) { ?>
                            <?php echo "<p class='error-text'>$unameexistmsg</p>"?>
                          <?php } ?>
                          
                          <div class="passwordDiv">
                            <input
                              type="password"
                              name="password"
                              id="password"
                              class="form-control"
                              placeholder="Password"
                              
                              required
                              value="<?php if (isset($_POST['password'])) {
                                if (!isset($successmeg)) {
                                  echo htmlspecialchars($_POST['password']);
                                }else {
                                  echo htmlspecialchars("");
                                }
                              }?>"
                              style="margin: 0"
                            />
                            <i class="fa fa-eye" id="togglePassword"></i>
                          </div>
                          <?php if (isset($passrequire)) { ?>
                            <?php echo "<p class='error-text'>$passrequire</p>"?>
                          <?php } ?>
                          
                          <input
                            type="submit" name="submit"
                            value="Sign Up"
                            class="form-control btn-primary"
                          />
                        </form>
                        
                        <p class="policyText">
                          By signing up, you agree to our Terms , Data Policy
                          and Cookies Policy .
                        </p>
                      </div>
                    </div>
                    <div class="card bottom-card" style="width: 100%">
                      <div class="card-body">

                        <h2>
                          <?php
                            if (isset($successmeg)) {
                              echo $successmeg;
                            }elseif (isset($errormsg)) {
                             echo  $errormsg;
                            }else {
                              
                            
                          ?>
                          
                            Have an account?<a href="index.php"> Log In</a>
                          <?php
                            }
                          ?>
                          
                          
                        </h2>
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



    <!-- Alert -->
 

    <!-- Toggle Password Visibility -->
    <script>
      const password = document.querySelector("#password");
      const togglePassword = document.querySelector("#togglePassword");
      togglePassword.addEventListener("click", function (e) {
        // toggle the type attribute
        const type =
          password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        // toggle the eye slash icon
        togglePassword.classList.toggle("fa-eye-slash");
      });
    </script>

    <!-- Optional JavaScript -->
    <!-- Bootstrap JS -->
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Preloader -->
    <script src="./preloader/preloader.js"></script>
  </body>
</html>
