<?php

    // include "connect.php";
    // if(isset($_POST['login'])){
    //     $emailOrUsername = mysqli_real_escape_string($con, $_POST['username']);
    //     $password = mysqli_real_escape_string($con, $_POST['password']);
 
    //     if (empty($emailOrUsername)) {
    //         $userNameRequired = "Username is Required !!!";
            
    //     }else if(empty($password)){
    //         $passwordRequired = "Password is Required !!!";
    //     }else {
    //         $selEmailOrUsername = "SELECT * FROM `users` WHERE `username` = '$emailOrUsername' || `email` = '$emailOrUsername'";
    //         $selectUQuery = mysqli_query($con,$selEmailOrUsername);

    //         if (mysqli_num_rows($selectUQuery)>0) {
    //             $fetch_row = mysqli_fetch_assoc($selectUQuery);
                
    //             $hashpass = $fetch_row['password'];
    //             if (!password_verify($password,$hashpass)) {
    //                 $invalidPass= "Invalid Password !!";
    //             }else{
                 
    //                 $username = $fetch_row['username'];
                    
    //                 $_SESSION['username'] = $username;
    //                 session_regenerate_id(false);//For Preventing Session Hijacking
            ?>

                  <!-- <script type="text/javascript">
                     alert('Login Suceessful !!');
                         window.location.replace('home.php');
                     </script> -->
            <?php        
    //             }
    //         }else {
    //             $usernameErr = "Invalid Username or Email";
    //         }
    //     }
    // }



?>


<?php
if (isset($_POST['login'])) {
    if (empty($_POST['username'])) {
        $userNameRequired = "Username is Required !!!";
    }elseif (empty($_POST['password'])) {
       $passwordRequired = "Password is Required !!!";
    }else {
        include 'connect.php';
        $stat = $con->prepare("SELECT username,password FROM `users` WHERE `username` = ? || `email` = ?");
        $stat-> bind_param("ss", $emailOrUsername, $emailOrUsername);
        $emailOrUsername = mysqli_real_escape_string($con, $_POST['username']);
        $stat->execute();
        $result = $stat->get_result();
       
        if (!mysqli_num_rows($result)==1) {
             $usernameErr = "Invalid Username or Email";
             $stat->close();
             $con->close();
        }else{
           $fetch_row = mysqli_fetch_assoc($result);
           $hashpass = $fetch_row['password'];
           $password = mysqli_real_escape_string($con, $_POST['password']);
           if (!password_verify($password, $hashpass)) {
                $invalidPass= "Invalid Password !!";
                $stat->close();
                $con->close();
           }else{
                $username = $fetch_row['username'];
                 $_SESSION['username'] = $username;
                    session_regenerate_id(false);//For Preventing Session Hijacking
                $stat->close();
                $con->close();
        ?>
            <script type="text/javascript">
                alert('Login Suceessful !!');
                window.location.replace('home.php');
            </script>
        <?php            
           }
            
        }

    }
}


?>