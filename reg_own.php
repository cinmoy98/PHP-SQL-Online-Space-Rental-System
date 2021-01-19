 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	 <link rel="stylesheet" type="text/css" href="style/style.css"/>
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
            </div>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action="beforeconfirm.php" method="POST">
					<span class="contact3-form-title">
						Registration Land Owners
					</span>

					

					<div class="wrap-input3 validate-input" data-validate="UserId is required">
						<input class="input3" type="text" name="UserId" id="textfield3"placeholder="Your UserId">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Firstname is required">
						<input class="input3" type="text" name="Firstname" id="textfield" placeholder="Your Firstname" >
						<span class="focus-input3"></span>
					</div>
					
					<div class="wrap-input3 validate-input" data-validate = "Lastname is required">
						<input class="input3" type="text" name="Lastname" id="textfield" placeholder="Your Lastname" >
						<span class="focus-input3"></span>
					</div>
					
					<div class="wrap-input3 validate-input" data-validate = "NID is required">
						<input class="input3" type="text" name="NID" id="textfield" placeholder="Your NID" >
						<span class="focus-input3"></span>
					</div>
					
					<div class="wrap-input3 validate-input" data-validate = "Password is required">
						<input  class="input3" type="password" name="Password" id="password" placeholder="Your password">
						<span class="focus-input3"></span>
					</div>
					
					<div class="wrap-input3 validate-input" data-validate = "Email is required">
						<input class="input3" type="email" name="Email" id="email" placeholder="Your Email">
						<span class="focus-input3"></span>
					</div>
					
					<div class="wrap-input3 validate-input" data-validate = "Contact is required">
						<input class="input3" type="text" name="contact" id="contact" placeholder="Your contact" >
						<span class="focus-input3"></span>
					</div>
					
					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="Address" placeholder="Address"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						 <input class="contact3-form-btn" type="submit" name="submit" value="Register"> 
					</div>
					
				</form>
				<div class="g-recaptcha" data-sitekey="6LfAxrQUAAAAAOR11sgMZkdvqUgThIqQE4RKMNz1"></div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
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



</body>
</html>
