<?php
	
session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	$UserId=$_POST['UserId'];
	$Firstname=$_POST['Firstname'];
	$Lastname=$_POST['Lastname'];
	$NID=$_POST['NID'];
	$Password=$_POST['Password'];
	$Email=$_POST['Email'];
	$Address=$_POST['Address'];
	$Contact=$_POST['contact'];
	
	$_SESSION["ui"]=$UserId;
	
	$token = bin2hex(random_bytes(10));

	
include 'connection.php';

$sqql="INSERT INTO userlo(uid,fame,lname,nid,email,pass,contact,addr,confirmed,token) VALUES('$UserId','$Firstname','$Lastname','$NID','$Email','$Password','$Contact','$Address',0,'$token')";

if((!mysqli_query($conn,$sqql)))
		{
			echo "Registration Failed. Redirecting to registration page ....";
			echo "<script>setTimeout(function(){window.location.href = 'reg_own.php';},2000);</script>";

		}
		
}



$to = $Email;
$subject = " !!--   Confirmation   --!!";
$txt = "Use this Confirmation Code for varification for Office Rental  :     $token ";
// $headers = "From: gourobm.com" . "\r\n" .
// "CC: somebodyelse@example.com";

mail($to,$subject,$txt);


header("Location: confirm.php");



?>