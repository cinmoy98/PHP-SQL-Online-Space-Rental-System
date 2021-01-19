
<?php



include 'restrict.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include 'connection.php';

if(isset($_SESSION['login_ho']))
 {
      $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);

      
    $sql="DELETE FROM board where uid='$ui'";
    
       mysqli_query($conn,$sql);

 }

else
    echo "not logged in";
}

?>


<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Online Office Rental</title>         
        <link rel="stylesheet" type="text/css" href="style/style.css"/> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
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
                            <a href="">Find Office Space</a>
                        </li>                         
                        <li>
                            <a href="">Find Shop space</a>
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
       <h1 align="center">Are you sure that you want to delete your Board Room Post? Once deleted, it can not be retrieved </h1>
       <form action="" method="POST">
          <p align="center"> <input type="submit" name="" value="YES I AM SURE"> </p>
       </form>
       <!--  <div style="width: 40%; float: right; height: 200px; background-color: #b7b1b1;">
            <h2 style="text-align: center;"><u>Links</u></h2>
            <p align="center">Office By Area</p>
            <p align="center">About</p>
            <p align="center">Terms &amp; Conditions</p>
            <p align="center">Copyright @ 1604092,1604097</p>
        </div> -->
    </body>     
</html>
