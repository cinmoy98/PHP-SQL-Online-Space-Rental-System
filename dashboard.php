<?php
include 'restrict.php';
?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Online Office Rental</title>    
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <link rel="stylesheet" type="text/css" href="style/style.css"/> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">

        <style>
            body {
  font-family: "Lato", sans-serif;
}


.sidenav {
  height: 800px;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 170px;
  left: 0;
  background-color: #363430;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  margin-left:500px;
 
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        </style>
    </head>     
    <body> 
        <div id="main"> 
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
                       <!--  <li>
                            <a href="registration.php">Registration</a>
                        </li>  -->                        
                        <!-- <li>
                            <a href="login.php">Login</a>
                        </li>    -->                      
                        <li>
                            <a href="office_posts.php">Find Office Room</a>
                        </li>                         
                        <li>
                            <a href="boardrm_posts.php">Boardroom</a>
                        </li> 
							<li>
                            <a href="conference_posts.php">Conference Room</a>
                        </li>                         
                        <li>
                            <a href="interview_posts.php">Interview Room</a>
                        </li> 						
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>                         
                    </ul>                     
                </div>                 
            </div>             
        </div>         
       <!--  <div style="height: 500px; background-image: url('dexus-office-space.jpg'); background-position: center center; opacity: .8;">
            <h1><p align="center" style="font-size: 48px; color: #61605f; font-family: Alegreya Sans SC;">FIND YOUR office SPACE HERE</p><p align="center" style="font-size: 32px; color: #61605f;"></p><p align="center" style="font-size: 32px; color: #61605f;"></p><p align="center" style="font-size: 32px; color: #61605f; margin-top: -28px;">SPACE FOR</p><p align="center" style="font-size: 25px; color: #2f2f30; font-family: Alegreya Sans SC; font-variant: normal;">MEETING&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; EVENT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CONFERENCE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SEMINAR&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Office&nbsp; &nbsp;&nbsp;</p></h1>
        </div> -->
       <!--  <div class="pg-empty-placeholder" style="width: 50%; float: left; height: 400px;">
            <h1 style="font-family:serif;"> <p align="center"><u style="font-family: Alegreya Sans SC;">How can Office-Rental help you?</u></p></h1>
            <p style="font-size: 16px; text-align: justify; font-style: italic;">Choose from any of our locations.Offices for lease by the day ,by the week or by the year.Fully serviced offices with everything included- High-speed internet,Office furnitures and utilities.&nbsp; Just show up and get to work. 
        </div> -->
       <!--  <div class="pg-empty-placeholder" style="width: 50%; float: right; height: 400px;"></div>
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
        </div> -->
        <div class="sidenav">
  <a href="manage_profile.php">Manage Profile</a>
  <a href="manage_post.php">Manage Post</a>
  <a href="posts.php">Give New Post</a>
 
</div>


<div class="main">

<h3>Profile info</h3>
<br><br>
<div class="mc">
<?php
 
    if(isset($_SESSION['login_ho']))
    {
        include 'connection.php';
        $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
    }

   $result = mysqli_query($conn," SELECT * 
FROM userlo 
WHERE uid= '$ui' ");

   $row=mysqli_fetch_assoc($result);


        $UserId=$row['uid'];
        $Firstname=$row['fame'];
        $Lastname=$row['lname'];
        $NID=$row['nid'];
        // $Password=$row['uid'];
        $Email=$row['email'];
        $Address=$row['addr'];
        $Contact=$row['contact'];

          
       echo "<b> Username :</b> $UserId <br><br>";
       echo "<b> Name :</b> $Firstname  $Lastname  <br><br>";
       
     
     echo "<b> National ID :</b> $NID <br><br>";
     echo "<b> Email :</b> $Email <br><br>";
       
       echo "<b> Address :</b> $Address <br><br>";
       echo "<b> Contact :</b> $Contact <br><br>";
     
     






?>
</div>
</div>

       <!--  <div style="width: 40%; float: right; height: 200px; background-color: #b7b1b1;">
            <h2 style="text-align: center;"><u>Links</u></h2>
            <p align="center">Office By Area</p>
            <p align="center">About</p>
            <p align="center">Terms &amp; Conditions</p>
            <p align="center">Copyright @ 1604092,1604097</p>
        </div> -->
		
    </body>     
</html>
