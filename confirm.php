<?php  


session_start();

if(isset($_POST['submit'])){

   $token=$_POST['token'];
   
    
include 'connection.php';

  $ui= $_SESSION["ui"];


 $sql= "SELECT * from userlo where uid = '$ui' ";


 $result=mysqli_query($conn,$sql);

 $row = mysqli_fetch_assoc($result);
 
  $tk=$row["token"];

 if($tk==$token)
 	{
          $sql2= "UPDATE userlo SET confirmed=1 where uid='$ui' ";

          if(!mysqli_query($conn,$sql2)){
              
			      echo "<script>setTimeout(function(){window.location.href = 'confirm.php';},2000);</script>";
          }
            else
          header("Location: login.php");
 	}

  else if($tk!= $token)
  {
     echo "<script> alert('Wrong Confirmation Code. Try again. ') </script>";
    echo "<script>setTimeout(function(){window.location.href = 'confirm.php';},2000);</script>";
  }



 

 }


 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email verification</title>
	<style>
		
		body{

			margin : 0px;
			/*background-color: red;*/
			text-align: center;
		}


body {margin-top: 100px;

        overflow-y: hidden ! important;
        overflow-x: hidden ! important;
        background-color: #f8f8f8;
        background-image: url('bg.jpg');
        /*background-size: cover;*/
        background-size: cover;
        background-repeat: no-repeat;
        background-position: right;
        background-color: grey;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;

}

  .button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


	</style>

</head>
<body>


<h1>Check your email to confirm</h1>

<form action="confirm.php" method="POST">
	<input type="text" name="token">
	<br><br> <br><br>
	<input class="button" type="submit" name="submit">
</form>
</body>
</html>
