<?php


    if (isset($_POST['submit'])) {
        include 'connect.php';
      
        if (empty($_POST['fullname'])) {
            $namerequire = "Name is Required !!";
        }elseif (empty($_POST['email'])) {
            $emailrequire = "Email is Required !!";
        }elseif (empty($_POST['username'])) {
            $usernamerequire = "Username is Required !!";
        }elseif (empty($_POST['password'])) {
            $passrequire = "Password is Required !";
        }else{

            // Checking Email is Exist or not
            $stmt1 = $con->prepare("SELECT * FROM users WHERE `email` = ?");
            $stmt1 -> bind_param('s',$email);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $stmt1 ->execute();
            $result1 = $stmt1->get_result();
            $stmt1 ->close();


            // Checking username is Exist or not
            $stmt2 = $con->prepare("SELECT * FROM users WHERE `username` = ?");
            $stmt2 -> bind_param('s',$username);
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $stmt2 ->execute();
            $result2 = $stmt2->get_result();
            $stmt2 ->close();
            if (mysqli_num_rows($result1)>0) {
               $emailexistmsg = "Email alreay exist";
            }elseif (mysqli_num_rows($result2)>0) {
                $unameexistmsg = "Username already exist";
            }else{
                $stmt3 = $con->prepare("INSERT INTO `users`(`name`, `email`, `username`, `password`) VALUES (?,?,?,?)");
                $stmt3->bind_param("ssss", $fullname,$email,$username,$hashpassword);

                $fullname = mysqli_real_escape_string($con,$_POST['fullname']);
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $username = mysqli_real_escape_string($con,$_POST['username']);
                $password = mysqli_real_escape_string($con,$_POST['password']);
                $hashpassword = password_hash($password, PASSWORD_BCRYPT);

                $result3 = $stmt3->execute();
                if ($result3==1) {
                    $successmeg =  "Successfully Signup .<a href='index.php'>Login Now !!!!</a>";
                    $stmt3 ->close();
                    $con ->close();
                }else{
                    $errormsg = "Error in Sign Up";
                }


            }
        }

        


    }












?>