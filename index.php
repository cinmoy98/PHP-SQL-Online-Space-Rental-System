<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Online Office Rental</title>
        <style>
        
        </style>	      
        <link rel="stylesheet" type="text/css" href="style/style.css"/> 
        <link rel="stylesheet" type="text/css" href="style/style1.css" />
		<script type="text/javascript" src="style/js/modernizr.custom.86080.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    </head>     
    <body>
    <div class="guru"> 
        <div id="main" style="height: 950px;"> 
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
						<?php
						session_start();
						if(isset($_SESSION['login_ho']))
						{
							echo "<li><a href='logout.php'>Log Out</a></li>";
							echo "<li><a href='dashboard.php'>Dashboard</a></li>";
						}
						else 
						{
							echo "<li>
                            <a href='reg_own.php'>Registration</a>
                        </li>                         
                        <li>
                            <a href='login.php'>Login</a>
                        </li>";
						}

           ?>						
                    </ul>                     
                </div>                 
            </div>             
         
        <div class="body_div">
            <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>Find Office Room</h3></div></li>
            <li><span>Image 02</span><div><h3>Interview Room</h3></div></li>
            <li><span>Image 03</span><div><h3>Conference Room</h3></div></li>
            <li><span>Image 04</span><div><h3>Board Room</h3></div></li>
            <li><span>Image 05</span><div><h3>Training Room</h3></div></li>
            <li><span>Image 06</span><div><h3>Seminar Room</h3></div></li>
        </ul>
        </div>  
         </div>
<div class="flip" style="font-family: Arial, Helvetica, sans-serif;">  
        
     <div class="flip-card">
  		<div class="flip-card-inner">
    	<div class="flip-card-front">
      	<img src="Images/MODERN WORKSPACE.jpg" alt="Avatar" style="width:300px;height:300px;">
    	</div>
    	<div class="flip-card-back" style="width:300px;height:300px;">
      	<h1>MODERN WORKSPACE</h1> 
      	<p>We have professional and inspiring work environments to suit businesses</p> 
      	<p>We love that</p>
    	</div>
  		</div>
	</div> 
 
	<div class="flip-card">
  		<div class="flip-card-inner">
    	<div class="flip-card-front">
      	<img src="Images/MODERN WORKSPAC.jpg" alt="Avatar" style="width:300px;height:300px;">
    	</div>
    	<div class="flip-card-back" style="width:300px;height:300px;">
      	<h1>MODERN WORKSPACE</h1> 
      	<p>We have professional and inspiring work environments to suit businesses</p> 
      	
    	</div>
  		</div>
	</div> 
 
</div>
<img src="Images/Screenshot (46).png" width="1894" height="784" alt=""/>
<div class="teamdiv">
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Images/50339655.jpg" alt="Jane" style="width:100%">
      <div class="teamcontainer">
        <h2>Office rooms</h2>
        <p class="title">Contact us</p>
        <p>We have professional and inspiring work environments</p>
        <p>admin@gmail.com</p>
        <p><button class="teambutton">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Images/adult-asian-caucasian-1153213.jpg" alt="Mike" style="width:100%;height:272px;">
      <div class="teamcontainer">
        <h2>Board room</h2>
        <p class="title">Verified owners</p>
        <p>Inspiring work environments to suit businesses</p>
        <p>admin@gmail.com</p>
        <p><button class="teambutton">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="Images/conference-room-digital-nomad-discussing-1181408.jpg" alt="John" style="width:100%;height:272px;">
      <div class="teamcontainer">
        <h2>Interview rooms</h2>
        <p class="title">Designer</p>
        <p>We have professional and inspiring work environments</p>
        <p>example@example.com</p>
        <p><button class="teambutton">Contact</button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="Images/196157217.jpg" alt="John" style="width:100%;height:272px;">
      <div class="teamcontainer">
        <h2>Training Rooms</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="teambutton">Contact</button></p>
      </div>
    </div>
  </div>
   <div class="column">
    <div class="card">
      <img src="Images/3.jpg" alt="John" style="width:100%;height:272px;">
      <div class="teamcontainer">
        <h2>Conference rooms</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="teambutton">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>


       
        <div class="footer">         
        
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
            <a href='http://www.facebook.com' style='text-decoration:none'><p align="center"><b>Facebook</b></p> </a>
            <a href='http://www.twitter.com' style='text-decoration:none'><p align="center"><b>Twitter</b></p> </a>
            <a href='http://www.instagram.com' style='text-decoration:none'><p align="center"><b>Instagram</b></p> </a>
        </div>         
        <div style="width: 40%; float: right; height: 200px; background-color: #b7b1b1;"> 
            <h2 style="text-align: center;"><u>Links</u></h2> 
            <a href='office_posts.php' style='text-decoration:none'><p align="center">Office By Area</p> </a>
            <a href='boardrm_posts.php' style='text-decoration:none'><p align="center">Boardroom</p></a> 
            <a href='interview_posts.php' style='text-decoration:none'><p align="center">Interview room</p></a> 
            <p align="center">Copyright @ 1604092,1604097</p> 
        </div> 
    </div>
    </div>
    </body>     
</html>
