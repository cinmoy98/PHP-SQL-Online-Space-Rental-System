<?php


 include 'connection.php';
 session_start();
 $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
$pi=mysqli_real_escape_string($conn,$_GET['pi']);


     
   $sql= "DELETE from board where pid='$pi' ";

   if(mysqli_query($conn,$sql))
   {
     	?>
   	  <script> alert("Post Deleted"); </script>
   	  <?php

   	  echo "<script language='javascript' type='text/javascript'> location.href='manage_post.php' </script>";
   }

   else
   {
   	alert("Something is wrong");
   }


?>