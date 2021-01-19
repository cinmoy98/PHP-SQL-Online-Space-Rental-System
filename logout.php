<?php
session_start();
	unset($_SESSION["login_ho"]);
	session_destroy();
	echo "<script language='javascript' type='text/javascript'> location.href='login.php' </script>";
?>
