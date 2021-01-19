
<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Manage Post</title>         
        <style>#content {
    text-align: left;
    width: 624px;
    float: left;
    padding: 200px 10px 15px 470px;
}</style>         
       
        <link rel="stylesheet" type="text/css" href="style/allpostcss/style.css"/> 
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
                            <a href="office_posts.php">Find Office</a>
                        </li>                         
                        <li>
                            <a href="boardrm_posts.php">Find Boardroom</a>
                        </li> 
							<li>
                            <a href="conference_posts.php">Find Conference</a>
                        </li>                         
                        <li>
                            <a href="interview_posts.php">Find Interview</a>
                        </li>                          
                    </ul>                     
                </div>  


            </div>             
                      
<br><br><br><br><br><br><br><br>



<?php
  session_start();
  include 'connection.php';
  $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
  

function showimage($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM imboard where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140" >
        <?php

}
}



  // boardroom



$sql=mysqli_query($conn,"SELECT * FROM board

INNER JOIN userlo ON board.uid=userlo.uid AND board.uid='$ui'
");

if($sql)
  echo " <h1 align='center'> Board Room Post </h1>";

if($sql)
{
    $count=1;
    while($row=mysqli_fetch_array($sql))
    {
        $pid=$row['pid'];

        $Firstname=$row['fame'];
        $Lastname=$row['lname'];
        $Email=$row['email'];
        $Contact=$row['contact'];
        $laddr=$row['addr'];
        $area=$row['area'];
        $addr=$row['addr'];
        $size=$row['size'];
        $pricing=$row['pricing'];
        $pid=$row['pid'];
        $price=$row['price'];
       echo ' <div class="post"> ';
            
        echo   ' <div class="post_div1"> ';
            
            echo  '  <div class="post_thumbnail"></div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
          echo    "  <div class='post_details'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Pricing Method : $pricing <br> <b>Contact Information : </b><br> $Firstname &emsp; $Lastname <br>$Email<br> $Contact </div>";
            
          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    '  <input name="button" type="button" class="post_button_design" value="View Phone Number">';
         echo    ' </div>';
        echo     ' <div class="post_picture" align="right" ></div>';showimage($pid);
              
       echo     '</div>';
         echo "<a href='editpb.php?pi=$pid'> <button style='background-color: #4CAF50; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Edit</button></a>";
        echo "<a href='deletepb.php?pi=$pid'> <button style='background-color: red; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Delete</button></a>";
      echo  '</div> ';

        
    }
}

?>
            
        
  



  <!-- confernece -->

<?php

include 'connection.php';
 $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
function showimagec($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM imconference where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140">
        <?php

}
}





$sql=mysqli_query($conn,"SELECT * FROM conference

INNER JOIN userlo ON conference.uid=userlo.uid AND conference.uid='$ui'
");

if($sql)
  echo " <h1 align='center'> Conference Room Post </h1>";

if($sql)
{

    $count=1;
    while($row=mysqli_fetch_array($sql))
    {
        $pid=$row['pid'];

        $Firstname=$row['fame'];
        $Lastname=$row['lname'];
        $Email=$row['email'];
        $Contact=$row['contact'];
        $laddr=$row['addr'];
        $area=$row['area'];
        $addr=$row['addr'];
        $size=$row['size'];
        $pricing=$row['pricing'];
        $pid=$row['pid'];
        $price=$row['price'];
       echo ' <div class="post"> ';
            
        echo   ' <div class="post_div1"> ';
            
            echo  '  <div class="post_thumbnail">Thumbnail</div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
          echo    "  <div class='post_details'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Pricing Method : $pricing <br> <b>Contact Information : </b><br> $Firstname &emsp; $Lastname <br>$Email<br> $Contact </div>";
            
          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    '  <input name="button" type="button" class="post_button_design" value="View Phone Number">';
         echo    ' </div>';
        echo     ' <div class="post_picture" align="right" ></div>';showimagec($pid);
              
       echo     '</div>';
       echo "<a href='editconf.php?pi=$pid'> <button style='background-color: #4CAF50; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Edit</button></a>";
        echo "<a href='deleteconf.php?pi=$pid'> <button style='background-color: red; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Delete</button></a>";
      echo  '</div> ';

        
    }
}

?>






 <!-- interview -->

<?php

include 'connection.php';
 $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
function showimagei($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM iminterview where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140">
        <?php

}
}





$sql=mysqli_query($conn,"SELECT * FROM interview

INNER JOIN userlo ON interview.uid=userlo.uid AND interview.uid='$ui'
");

if($sql)
  echo " <h1 align='center'> Interview Room Post </h1>";

if($sql)
{

    $count=1;
    while($row=mysqli_fetch_array($sql))
    {
        $pid=$row['pid'];

        $Firstname=$row['fame'];
        $Lastname=$row['lname'];
        $Email=$row['email'];
        $Contact=$row['contact'];
        $laddr=$row['addr'];
        $area=$row['area'];
        $addr=$row['addr'];
        $size=$row['size'];
        $pricing=$row['pricing'];
        $pid=$row['pid'];
        $price=$row['price'];
       echo ' <div class="post"> ';
            
        echo   ' <div class="post_div1"> ';
            
            echo  '  <div class="post_thumbnail">Thumbnail</div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
           echo    "  <div class='post_details'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Pricing Method : $pricing <br> <b>Contact Information : </b><br> $Firstname &emsp; $Lastname <br>$Email<br> $Contact </div>";

          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    '  <input name="button" type="button" class="post_button_design" value="View Phone Number">';
         echo    ' </div>';
        echo     ' <div class="post_picture" align="right" ></div>';showimagei($pid);
              
       echo     '</div>';
         echo "<a href='editinterview.php?pi=$pid'> <button style='background-color: #4CAF50; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Edit</button></a>";
        echo "<a href='deleteinterview.php?pi=$pid'> <button style='background-color: red; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Delete</button></a>";
      echo  '</div> ';

        
    }
}

?>
   


    <!-- officeroom -->

<?php

include 'connection.php';
 $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
function showimageo($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM imoffice where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140">
        <?php

}
}





$sql=mysqli_query($conn,"SELECT * FROM office

INNER JOIN userlo ON office.uid=userlo.uid AND office.uid='$ui'
");

if($sql)
  echo " <h1 align='center'> Office Room Post </h1>";

if($sql)
{

    $count=1;
    while($row=mysqli_fetch_array($sql))
    {
        $pid=$row['pid'];

        $Firstname=$row['fame'];
        $Lastname=$row['lname'];
        $Email=$row['email'];
        $Contact=$row['contact'];
        $laddr=$row['addr'];
        $area=$row['area'];
        $addr=$row['addr'];
        $size=$row['size'];
        $pricing=$row['pricing'];
        $pid=$row['pid'];
        $price=$row['price'];
        $furnishe=$row['furnish'];
        $roomno=$row['roomno'];
       echo ' <div class="post"> ';
            
        echo   ' <div class="post_div1"> ';
            
            echo  '  <div class="post_thumbnail">Thumbnail</div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
          echo    "  <div class='post_details'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Pricing Method : $pricing <br> Furnish :  $furnishe <br>Room Nunber : $roomno<br><b>Contact Information : </b><br> $Firstname &emsp; $Lastname <br>$Email<br> $Contact </div> ";
            
          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    '  <input name="button" type="button" class="post_button_design" value="View Phone Number">';
         echo    ' </div>';
        echo     ' <div class="post_picture" align="right" ></div>';showimageo($pid);
              
       echo     '</div>';
        echo "<a href='editoffice.php?pi=$pid'> <button style='background-color: #4CAF50; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Edit</button></a>";
        echo "<a href='deleteoffice.php?pi=$pid'> <button style='background-color: red; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Delete</button></a>";
      echo  '</div> ';

        
    }
}

?>




 <!-- training -->

<?php

include 'connection.php';
 $ui=mysqli_real_escape_string($conn,$_SESSION['login_ho']);
function showimaget($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM imtraining where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140">
        <?php

}
}





$sql=mysqli_query($conn,"SELECT * FROM training

INNER JOIN userlo ON training.uid=userlo.uid AND training.uid ='$ui'
");

if($sql)
  echo " <h1 align='center'> Training Room Post </h1>";

if($sql)
{

    $count=1;
    while($row=mysqli_fetch_array($sql))
    {
        $pid=$row['pid'];

        $Firstname=$row['fame'];
        $Lastname=$row['lname'];
        $Email=$row['email'];
        $Contact=$row['contact'];
        $laddr=$row['addr'];
        $area=$row['area'];
        $addr=$row['addr'];
        $size=$row['size'];
        $pricing=$row['pricing'];
        $pid=$row['pid'];
        $price=$row['price'];
       echo ' <div class="post"> ';
            
        echo   ' <div class="post_div1"> ';
            
            echo  '  <div class="post_thumbnail">Thumbnail</div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
          echo    "  <div class='post_details'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Pricing Method : $pricing <br> <b>Contact Information : </b><br> $Firstname &emsp; $Lastname <br>$Email<br> $Contact </div>";
            
          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    '  <input name="button" type="button" class="post_button_design" value="View Phone Number">';
         echo    ' </div>';
echo     ' <div class="post_picture" align="right" ></div>';showimaget($pid);
              
       echo     '</div>';
        echo "<a href='edittraining.php?pi=$pid'> <button style='background-color: #4CAF50; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Edit</button></a>";
        echo "<a href='deletetraining.php?pi=$pid'> <button style='background-color: red; 
  border: none;
  border-radius : 5px;
  color: white;
   
  padding-top: 
  text-align: center;
  text-decoration: none;
  margin-bottom : 5px;
  height: 20px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;'>Delete</button></a>";
      echo  '</div> ';

        
    }
}

?>
          
          
         <br><br>       
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


