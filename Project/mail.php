<?php
$to = "nikunchoudhury@outlook.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <nikchoudhury1998@gmail.com>' . "\r\n";
$headers .= 'Cc: nikchoudhury1998@gmail.com' . "\r\n";

$success= mail($to,$subject,$message,$headers);
if (!$success) {
	echo "Failed";
	print_r($success);

}else{
	echo "Succeess <br>";
	echo "$success";
	// $errorMessage = error_get_last()['message'];
	// echo "mail($to,$subject,$message,$headers)";
	print_r($headers);
}
?>

<?php
// $succ =mail("nikunchoudhury@gmail.com","Subject","Email message","From: nikchoudhury1998@gmail.com");
// if (!$succ) {
// 	echo "Failed2";
// 	print_r(error_get_last());

// }else{
// 	echo "Succeess";
// }
?>