<?php

    include "connect.php";
    if(isset($_POST['login'])){
        $emailOrUsername = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
 
        if (empty($emailOrUsername)) {
            $userNameRequired = "Username is Required !!!";
            
        }else if(empty($password)){
            $passwordRequired = "Password is Required !!!";
        }else {
            $selEmailOrUsername = "SELECT * FROM `users` WHERE `username` = '$emailOrUsername' || `email` = '$emailOrUsername'";
            $selectUQuery = mysqli_query($con,$selEmailOrUsername);

            if (mysqli_num_rows($selectUQuery)>0) {
                $fetch_row = mysqli_fetch_assoc($selectUQuery);
                
                $hashpass = $fetch_row['password'];
                if (!password_verify($password,$hashpass)) {
                    $invalidPass= "Invalid Password !!";
                }else{
                 
                    $username = $fetch_row['username'];
                    
                    $_SESSION['username'] = $username;
                    session_regenerate_id(false);//For Preventing Session Hijacking
            ?>

                    <script type="text/javascript">
                        alert('Login Suceessful !!');
                        window.location.replace('home.php');
                    </script>
            <?php        
                }
            }else {
                $usernameErr = "Invalid Username or Email";
            }
        }
    }



?>