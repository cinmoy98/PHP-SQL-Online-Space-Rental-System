<?php

if (isset($_POST['userlo']))
{
	session_start();
	if(isset($_SESSION['login_ho']))
{
	echo "<script language='javascript' type='text/javascript'> location.href='dashboard.php' </script>";					
}
else
{
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'connection.php';
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$sql = mysqli_query($conn,"SELECT * FROM userlo WHERE uid='$uname' and pass='$pass' and confirmed=1");
	
 if (mysqli_num_rows($sql) != 0)	 
 {
	 $_SESSION['login_ho']=$uname;
	 echo "<script language='javascript' type='text/javascript'> location.href='dashboard.php' </script>";
 }
 else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid Or account is not verified')</script>";
echo "<script language='javascript' type='text/javascript'> location.href='login.php' </script>";
}
}
}
}
?>