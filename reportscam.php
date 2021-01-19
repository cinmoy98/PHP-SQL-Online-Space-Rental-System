<?php
include 'connection.php';
$pid=$_GET['postid'];
$sql=mysqli_query($conn,"insert into scam values('','$pid')");
echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
?>