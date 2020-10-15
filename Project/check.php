<?php

// $_POST['email'] = "nik@gmail.com";
// $_POST['username']= "NikChoudhury";
include 'connect.php';
// Checking Email is Exist or not

// $stmt1 = $con->prepare("SELECT * FROM users WHERE `email` = ?");
// $stmt1 -> bind_param('s',$email);
// $email = mysqli_real_escape_string($con,$_POST['email']);
// $stmt1 ->execute();
// $result1 = $stmt1->get_result();
// $stmt1 ->close();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $select1 = "SELECT * FROM users WHERE `email` = '$email'";
    $query1 = mysqli_query($con,$select1);
    if (mysqli_num_rows($query1)>0) {
       $email= "Email alreay exist";
       // $response['message_email'] = "Email alreay exist";
       // echo json_encode($response);
    }else{
        exit();
    }
}
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $select2 = "SELECT * FROM users WHERE `username` = '$username'";
    $query2 = mysqli_query($con,$select2);
    if (mysqli_num_rows($query2)>0) {
       echo "Username already exist";
       //   $response['status'] = 200;
       //  $response['message_username'] = "Username already exist";
       // echo json_encode($response);
    }else{
        exit();
    }
}







// Checking username is Exist or not
// $stmt2 = $con->prepare("SELECT * FROM users WHERE `username` = ?");
// $stmt2 -> bind_param('s',$username);
// $username = mysqli_real_escape_string($con,$_POST['username']);
// $stmt2 ->execute();
// $result2 = $stmt2->get_result();
// $stmt2 ->close();

// $eamil = $_POST['email'];
// $select1 = "SELECT * FROM users WHERE `email` = '$email'";
// $query1 = mysqli_query($con,$query1);

// if (mysqli_num_rows($result1)>0) {
//     echo "Email alreay exist";
// }elseif (mysqli_num_rows($result2)>0) {
//      echo "Username already exist";
// }else{
//     exit();
// }

?>