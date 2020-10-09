<?php
// include "connect.php";




// if(isset($_POST['submit'])){
//     $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
//     $email = mysqli_real_escape_string($con,$_POST['email']);
//     $username = mysqli_real_escape_string($con,$_POST['username']);
//     $password = mysqli_real_escape_string($con,$_POST['password']);

//     $hashpassword = password_hash($password, PASSWORD_BCRYPT);

//     if (empty($fullname)) {
//         $namerequire = "Name is Required !!";
//     }elseif (empty($email)) {
//         $emailrequire = "Email is Required !!";
//     }elseif (empty($username)) {
//         $usernamerequire = "Username is Required !!";
//     }elseif (empty($password)) {
//         $passrequire = "Password is Required !";
//     }else{
//         $selectemail = "SELECT * FROM users WHERE `email` = '$email'";
//         $emailresult = mysqli_query($con, $selectemail);

//         $selectusername = "SELECT * FROM users WHERE `username` = '$username'";
//         $unameresult = mysqli_query($con, $selectusername);

    
//         if (mysqli_num_rows($emailresult)>0) {
//             $emailexistmsg = "Email alreay exist";
//         }elseif (mysqli_num_rows($unameresult)>0) {
//             $unameexistmsg = "Username already exist";
//         }else {
//             $insert = "INSERT INTO `users`(`name`, `email`, `username`, `password`) VALUES ('$fullname','$email','$username','$hashpassword')";
//             $insertquery = mysqli_query($con, $insert);
//         if ($insertquery==1) {
            
//             $successmeg =  "Successfully Signup .<a href='index.php'>Login Now !!!!</a>";
           
//         }else {
//             $errormsg = "Error in Sign Up";
//         }
//     }
//     }
// }



?>


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