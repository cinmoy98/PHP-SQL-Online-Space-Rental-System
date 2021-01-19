<?php
   include 'restrict.php';
   include 'connection.php';


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sign="BR";
	include 'unique.php';
	$uid=$_SESSION['login_ho'];
	$area=$_POST['area'];
	$addr=$_POST['addr'];
	$size=$_POST['size'];
	$method=$_POST['method'];
	$price=$_POST['price'];



$sql="INSERT INTO board(area,addr,size,pricing,pid,price,uid) VALUES('$area','$addr','$size','$method','$postid','$price','$uid')";
//$sqql="INSERT INTO apartment(Bedroom_no,Bathroom_no,Dining_no,Garage_facility,Lift_facility,Apart_no,House_no) VALUES('$Bedroom_no','$Bathroom_no','$Bathroom_no','$Garage_facility','$Lift_facility','$Apartment_number','$House_no')";
//$sqqql="INSERT INTO roommate(Post_id,Fare_per_seat,number_of_vacant_seat,Total_members,Maid_availability,User_id,Apart_no) VALUES('$postid','$Fare','$seatno','$tmem','$Availability','$UserId','$Apartment_number')";


if((!mysqli_query($conn,$sql)))//&(!mysqli_query($conn,$sqql))&(!mysqli_query($conn,$sqqql)))
		{
			echo "Posting Failed";
		}
		else
		{
			echo "Posting Completed";
		}
include 'insert_image.php';


}
 ?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Board Room Post - Formoid contact us form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">
<!-- Start Formoid form-->
<link rel="stylesheet" href="post_boardroom_files/formoid1/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="post_boardroom_files/formoid1/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-solid-light-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action=""><div class="title"><h2>Board Room Post</h2></div>
	<div class="element-select" title="Sekect Area"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="area" required="required">

		<option value="Select area">Select area</option>
		<option value="Dohar">Dohar</option>
		<option value="Keraniganj">Keraniganj</option>
		<option value="Dhamrai">Dhamrai</option>
		<option value="Nawabganj">Nawabganj</option>
		<option value="Savar">Savar</option>
		<option value="Ramna">Ramna</option>
		<option value="Pallabi">Pallabi</option>
		<option value="Mirpur">Mirpur</option>
		<option value="Demra">Demra</option>
		<option value="Uttara">Uttara</option>
		<option value="Khilgaon">Khilgaon</option>
		<option value="Tejgaon">Tejgaon</option>
		<option value="Jatrabari">Jatrabari</option>
		<option value="Rampura">Rampura</option>
		<option value="Sherebangla Nagar">Sherebangla Nagar</option>
		<option value="Shahjanpur">Shahjanpur</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-textarea" title="Address"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="small" name="addr" cols="20" rows="5" required="required" placeholder="Address"></textarea><span class="icon-place"></span></div></div>
	<div class="element-input" title="Space Size"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="size" required="required" placeholder="Space Size"/><span class="icon-place"></span></div></div>
	<div class="element-radio" title="Pricing Method"><label class="title">Pricing Method<span class="required">*</span></label>		<div class="column column3"><label><input type="radio" name="method" value="Full Time" required="required"/><span>Full Time</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="method" value="Part Time" required="required"/><span>Part Time</span></label></div><span class="clearfix"></span>
		<div class="column column3"><label><input type="radio" name="method" value="Pay as you Go" required="required"/><span>Pay as you Go</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number" title="Price /Rent"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="1000000" name="price" required="required" placeholder="Price/Rent" value=""/><span class="icon-place"></span></div></div>
	<!--<div class="element-email" title="Email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-phone" title="Phone"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" required="required" placeholder="Phone" value=""/><span class="icon-place"></span></div></div>-->
	<div class="element-file" title="Image"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="large" ><div class="button">Choose Image</div><input type="file" class="file_input" name="file[]" required="required" multiple /><div class="file_text">No file selected</div><span class="icon-place"></span></label></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">contact us form</a> Formoid.com 2.9</p><script type="text/javascript" src="post_boardroom_files/formoid1/formoid-solid-light-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>

