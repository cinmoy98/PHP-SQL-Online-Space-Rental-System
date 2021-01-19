

<!DOCTYPE HTML>
<html>

<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0px;
  border: none;
  cursor: pointer;
  width: 250px;
  
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
  display: none; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 30%; 
  height: 30%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0); 
  padding-bottom:100px;
  padding-left: 650px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
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
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
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
  <link rel="stylesheet" type="text/css" href="style/style.css" />
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
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li><a href="">Find Office Space</a></li>
          <li><a href="">Find Shop Space</a></li>
		  
        </ul>
      </div>
    </div>
    
    
      
	  
	  <br><br><br>
	  
	 <p align="center"> <button onclick="document.getElementById('id01').style.display='block'" >Login as Space Owner</button></p><br>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="loginpoint.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="loginicon.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Space-Owner Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name="howner">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');

</script>
	<p align="center">  <button onclick="document.getElementById('id02').style.display='block'" >Login as Client</button></p>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="loginpoint.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="loginicon.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Client Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name="tenant">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id02');

</script>
        
	  
    
  </div>
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
