<?php
			if(isset($_POST['submit'])) 
			{ 
				$OOtp = $_POST['input1'];
				if($_COOKIE['otp'] == $OOtp) {
					echo "Congratulation, Your mobile is verified.";
				} else {
					echo "Please enter correct otp.";
				}
			}
?>

<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Email and Mobile Confirmation</title>         
        <style>#content {
    text-align: left;
    width: 624px;
    float: left;
    padding: 200px 10px 15px 470px;
}</style>         
        <link rel="stylesheet" type="text/css" href="style/style.css"/> 
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
                        <li>
                            <a href="login.php">Login</a>
                        </li>                         
                        <li>
                            <a href="">Find Office Space </a>
                        </li>                         
                        <li>
                            <a href="">Find Shop Space</a>
                        </li>                         
                    </ul>                     
                </div>                 
            </div><br><br><br><br><br><br><br>             
               <link rel="stylesheet" href="confirmation_files/formoid1/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="confirmation_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-light-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action=""><div class="title"><h2>Email And Mobile number Verification</h2></div>
	<div class="element-input" title="OTP recieved via email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="OTP recieved via email"/><span class="icon-place"></span></div></div>
	<div class="element-input" title="OTP recieved via mobile"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="OTP recieved via mobile"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" name="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">html5 form</a> Formoid.com 2.9</p><script type="text/javascript" src="confirmation_files/formoid1/formoid-solid-light-green.js"></script>
             
            </div>   
<br><br><br><br><br><br><br><br><br><br>			
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
