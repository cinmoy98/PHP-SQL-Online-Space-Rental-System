 
<!DOCTYPE HTML> 
<html> 
    <head> 
        <style>
        body {
    font-family: Arial, Helvetica, sans-serif;
}

input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
	background-color: #4CAF50;
	width: 120px;
	height: 40px;
	color: white;
	padding: 14px 20px;
	margin-left: 120px;
	border: none;
	cursor: pointer;
	border-radius: 12px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    
    z-index: 0;
    left: 0;
    top: 0;
	margin-left:50px;
    width: 500px;
    height: 600px;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0);
    padding-bottom: 100px;
    padding-left: 650px;
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s;
}

@-webkit-keyframes animatezoom {
    from {
        -webkit-transform: scale(0);
    }

    to {
        -webkit-transform: scale(1);
    }
}

@keyframes animatezoom {
    from {
        transform: scale(0);
    }

    to {
        transform: scale(1);
    }
}

@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }

    .cancelbtn {
        width: 100%;
    }
}
       
       
        </style>         
        <title>Online Office Rental</title>         
        <link rel="stylesheet" type="text/css" href="style/style.css"/> 
        
        <link rel="stylesheet" type="text/css" href="style/style1.css" />
		<script type="text/javascript" src="style/js/modernizr.custom.86080.js"></script>
</head>     
    <body> 
        <div id="main" style="height: 936px;"> 
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
                            <a href="reg_own.php">Registration</a>
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
                            <a href="interview_posts.php"> Interview room </a>
                        </li>                         
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
<br><br><br><br><br>
<div id="id01" class="modal"> 
        <form class="modal-content animate" action="loginpoint.php" method="post"> 
                    <div class="imgcontainer">  
                        <img src="loginicon.png" alt="Avatar" class="avatar"> 
                    </div>                     
                    <div class="container"> 
                        <label for="uname">
                            <b>Username</b>
                        </label>                         
                        <input type="text" placeholder="Enter Space-Owner Username" name="uname" required> 
                        <label for="psw">
                            <b>Password</b>
                        </label>                         
                        <input type="password" placeholder="Enter Password" name="pass" required> 
                        <br><br><br><br><br>
                        <button type="submit" name="userlo">Login</button>                         
                    </div>                                         
                </form>                 
            </div>

            </div>
                         
                   
                        
        </div>
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
    </body>     
</html>
