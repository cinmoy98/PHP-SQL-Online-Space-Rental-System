<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$tmpname=$_FILES['file']['tmp_name'];
	
for($i=0;$i<=count($tmpname)-1;$i++)
{
	$filename=$_FILES['file']['name'][$i];
	
	$res="INSERT INTO imconference VALUES('','$postid','$filename')";
	mysqli_query($conn,$res);
	$target="Images/".basename($_FILES['file']['name'][$i]);
	move_uploaded_file($_FILES['file']['tmp_name'][$i],$target);
}
}
?>