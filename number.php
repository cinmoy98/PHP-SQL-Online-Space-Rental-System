<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Online Office & Shop Space Rental</title>         
        <style>
        #content {
    text-align: left;
    width: 624px;
    float: left;
    padding: 200px 10px 15px 470px;
}
       
        
        </style>         
        <link rel="stylesheet" type="text/css" href="style/style.css"/> 
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    </head>     
    <body>

        
            <div id="header"> 
                <div id="logo"> 
                    <div id="logo_text"> 
                        <h1><a href="index.php">Online Space <span class="logo_colour">Rental</span></a></h1> 
                        <h2>Find Your Office & Shop Space Online</h2> 
                    </div>                     
                </div>                 
                <div id="menubar"> 
                    <ul id="menu"> 
                        <li class="selected">
                            <a href="index.php">Home</a>
                        </li>                         
                                                 
<li>
                            <a href="office_posts.php">Find OfficeRoom</a>
                        </li>                         
                        <li>
                            <a href="boardrm_posts.php"> Boardroom</a>
                        </li> 
							<li>
                            <a href="conference_posts.php"> Conference room</a>
                        </li>                         
                        <li>
                            <a href="interview_posts.php"> Interview room</a>
                        </li> 
<li>
                            <a href="training_posts.php"> Training room</a>
                        </li>                        
                    </ul>                     
                </div>                 
            </div> 
<?php
include 'connection.php';
$pid=$_GET['postid'];
$sql=mysqli_query($conn,"
SELECT email,contact FROM `userlo`
LEFT JOIN board ON board.uid=userlo.uid
LEFT  JOIN conference ON conference.uid=userlo.uid
LEFT  JOIN office ON office.uid=userlo.uid
LEFT  JOIN interview ON interview.uid=userlo.uid
LEFT  JOIN training ON training.uid=userlo.uid
where board.pid='$pid' or conference.pid='$pid' OR
office.pid='$pid' OR training.pid='$pid' OR interview.pid='$pid'");

if($sql)
{
$row=mysqli_fetch_array($sql);

		$Email=$row['email'];
		$Contact=$row['contact'];
		echo '<div style="margin-left:900px;margin-top:200px;font-size: 18px;font-weight: bold;">';
		echo $Email;
		echo '<br>';echo "&emsp;&emsp;";
		echo $Contact;echo '<br>';echo '<br>';echo '<br>';echo "&emsp;&emsp;";
		echo "<a href='reportscam.php?postid=$pid' style='text-decoration:none'><button type='submit' class='btn btn-warning btn-lg btn-block'>Report Scam</button></a>";
		
		echo '</div>';
}


?>

         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		 
        <div class="pg-empty-placeholder" style="width: 30%; float: right; height: 200px; background-color: #b7b1b1;"> 
            <h2 style="text-align: center;"><u>Contact Us</u></h2> 
            <p align="center"><b>Email</b></p> 
            <p align="center">cinmoy98@gmail.com</p> 
            <p align="center"><b>Phone</b></p> 
            <p align="center">01727239595</p> 
        </div>         
        <div class="pg-empty-placeholder" style="width: 30%; float: right; height: 200px; background-color: #b7b1b1;"> 
            <h2 style="text-align: center;"><u>Follow</u></h2> 
            <p><br></p> 
            <p align="center"><b>Facebook</b></p> 
            <p align="center"><b>Twitter</b></p> 
            <p align="center"><b>Instagram</b></p> 
        </div>         
        <div style="width: 40%; float: right; height: 200px; background-color: #b7b1b1;"> 
            <h2 style="text-align: center;"><u>Links</u></h2> 
            <p align="center">Office By Area</p> 
            <p align="center">About</p> 
            <p align="center">Terms &amp; Conditions</p> 
            <p align="center">Copyright @ 1604092,1604097</p> 
        </div>         
    </body>     
</html>
