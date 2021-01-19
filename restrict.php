<?php
session_start();
if(isset($_SESSION['login_ho']))
{
	
}
else {
	echo "<script language='javascript' type='text/javascript'> location.href='login.php' </script>";
}
?>