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

<div class="post_content"> 
<div class="post_part">
<?php

include 'connection.php';
function showimage($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM imoffice where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140" style="border: 2px solid green;
  border-radius: 8px;">
        <?php

}
}

function showthumb($pid)
{
    include 'connection.php';

    $res=mysqli_query($conn,"SELECT * FROM imoffice where postid='$pid'");


    while($row=mysqli_fetch_array($res))
{
    $imgurl='Images/'.$row['image'];
        ?>
        <img src="<?php echo $imgurl;?>" height="140" width="140"  style="border: 2px solid green;
  border-radius: 8px;" >
        <?php
break;
}
}


  // officeroom





if(!isset($_POST['filter'])&&!isset($_POST['sortprice'])&&!isset($_POST['sortsize']))
{

$sql=mysqli_query($conn,"SELECT * FROM office

INNER JOIN userlo ON office.uid=userlo.uid
");



if($sql)
{
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
        $room=$row['roomno'];
        $furnished=$row['furnish'];
		$price=$row['price'];
       echo ' <div class="post"> ';
            
        echo   ' <div class="post_div1"> ';
            
            echo  '  <div class="post_thumbnail">';echo showthumb($pid);echo'</div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
          echo    "  <div class='post_details' style='font-size: 16px;'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Room number : $room &emsp; Furnished : $furnished &emsp; Pricing Method : $pricing <br> <b>Contact Information : </b><br> $Firstname &emsp; $Lastname </div>";
            
          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    "  <a href='payment/index.php?postid=$pid' style='text-decoration:none'><input name='button' type='button' class='post_button_design' value='View Phone Number'></a>";
         echo    ' </div>';
        echo     ' <div class="post_picture" align="right" ></div>';showimage($pid);
              
       echo     '</div>';
         
      echo  '</div> ';  
    }
}
}



//////////////////////////////////////FILTERRING POSTS////////////////////////////////////////////////////////


  $fsize=100000;
  $srtsz="LH";
  $srtprc="LH";
  


if(isset($_POST['filter']))
{
   if($_POST['Price']!="")
      $srtprc=$_POST['Price'] ;

    if($_POST['Size']!="")
      $srtsz=$_POST['Size'] ;
 
 if($_POST['fspace'] != "")
    $fsize=$_POST['fspace'];

   $fmethod=$_POST['fpricing'];
   $farea=$_POST['farea'];

   
   if($fmethod== "" && $farea == "")
   {
     if($srtsz == "LH" && $srtprc == "LH"){
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
       WHERE office.size<='$fsize' ORDER BY office.price ASC,office.size ASC ");
      }
     else if($srtsz == "LH" && $srtprc == "HL"){
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
       WHERE office.size<='$fsize' ORDER BY office.price DESC, office.size ASC ");
      }
      else if($srtsz == "HL" && $srtprc == "HL"){
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
       WHERE office.size<='$fsize' ORDER BY office.price DESC,office.size DESC");
      }
      else
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
       WHERE office.size<='$fsize' ORDER BY office.price ASC,office.size DESC");
      
   }




   else if($fmethod== "")
   {
    if($srtsz == "LH" && $srtprc == "LH"){

      $sql=mysqli_query($conn,"SELECT * FROM office
     INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.area='$farea' ORDER BY office.price ASC,office.size ASC ");
      }

       else if($srtsz == "LH" && $srtprc == "HL"){
      $sql=mysqli_query($conn,"SELECT * FROM office
     INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.area='$farea' ORDER BY office.price DESC, office.size ASC");
     }

   else if($srtsz == "HL" && $srtprc == "HL"){
      $sql=mysqli_query($conn,"SELECT * FROM office
     INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.area='$farea' ORDER BY office.price DESC,office.size DESC");
      }

      else
      $sql=mysqli_query($conn,"SELECT * FROM office
     INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.area='$farea' ORDER BY  office.price ASC,office.size DESC");
   }

   else if($farea == "")
   {

    if($srtsz == "LH" && $srtprc == "LH"){

      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.pricing='$fmethod'  ORDER BY office.price ASC,office.size ASC ");
      }

       else if($srtsz == "LH" && $srtprc == "HL"){
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.pricing='$fmethod'  office.price DESC, office.size ASC");
      }

   else if($srtsz == "HL" && $srtprc == "HL"){
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.pricing='$fmethod'  ORDER BY office.price DESC,office.size DESC");
      }

      else
      $sql=mysqli_query($conn,"SELECT * FROM office
       INNER JOIN userlo ON office.uid=userlo.uid
      WHERE office.size<='$fsize' AND office.pricing='$fmethod'  ORDER BY  office.price ASC,office.size DESC");
      
   }



 

  
   }

if($sql)
{
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
            
            echo  '  <div class="post_thumbnail">';echo showthumb($pid);echo'</div>';
          echo      "<div class='post_price'><u>  $price  Tk</u></div>";
          echo    "  <div class='post_details' style='font-size: 16px;'>Post id : <b>$pid</b> <br> Area : $area <br> Address : $laddr <br> Property Size : $size sqft  &emsp; Pricing Method : $pricing <br> <b>Contact Information : </b><br> $Firstname &emsp; $Lastname </div>";
            
          echo  ' </div>';
          echo  '<div class="post_div2">';
           echo  ' <div class="post_button">';
          echo    "  <a href='payment/index.php?postid=$pid' style='text-decoration:none'><input name='button' type='button' class='post_button_design' value='View Phone Number'></a>";
         echo    ' </div>';
        echo     ' <div class="post_picture" align="right" ></div>';showimage($pid);
              
       echo     '</div>';
         
      echo  '</div> ';  
    }
}




 ?>

</div>
<div class="post_filter">
 <h2 class="filter">Filter</h2>

    <form method="post" name="filter" class="form_filter" action="">
    <label for="number" class="label_filter">Space Size &emsp;&emsp; :</label>
    <input name="fspace" type="number" class="filter_textfield">
<br><br><label for="textfield" class="label_filter">Pricing Method : </label>
    <select name="fpricing" class="filter_textfield">
      <option   value="Full Time">Full Time</option>
    <option  value="parttime">Part Time</option>
        <option value="payasyougo">Pay As You Go</option>
        <option selected="selected" value="">All</option>
    </select>
    
<br><br><label for="textfield" class="label_filter">  By area &emsp; &emsp; &emsp; : </label>
     <select name="farea" class="filter_textfield">
     <option value="Dohar">Dohar</option>
    <option value="Keraniganj">Keraniganj</option>
    <option value="Dhamrai">Dhamrai</option>
    <option value="Nawabganj">Nawabganj</option>
    <option value="Savar">Savar</option>
    <option value="Ramna">Ramna</option>
    <option value="Pallabi">Pallabi</option>
    <option value="Mirpur">Mirpur</option>
    <option value="Demra">Demra</option>
    <option value="Uttara">Uttara</option>
    <option value="Khilgaon">Khilgaon</option>
    <option value="Tejgaon">Tejgaon</option>
    <option value="Jatrabari">Jatrabari</option>
    <option value="Rampura">Rampura</option>
    <option value="Sherebangla Nagar">Sherebangla Nagar</option>
    <option value="Shahjanpur">Shahjanpur</option>
        <option selected="selected" value="">All</option>
     </select>
   <!-- <br><br> <input name="filter" type="submit" class="filter_submit" value="Filter"> -->
    

  <br><br><br>
 <h2 class="filter">Sort</h2>

   <p class="label_filter">Sort By Price</p>
   <p>
     <label>
       <input name="Price" type="radio" class="radio_button" value="LH" checked>
       Low to High</label>
     <br>
     <label>
       <input name="Price" type="radio" class="radio_button" value="HL">
       High to Low</label>&emsp;<!-- <input name="sortprice" type="submit" class="filter_submit" value="Sort"> -->
     <br>
   </p>
   
   <p class="label_filter">Sort By Space Size</p>
   <p>
     <label>
       <input name="Size" type="radio" class="radio_button" value="LH" checked>
       Low to High</label>
     <br>
     <label>
       <input name="Size" type="radio" class="radio_button" value="HL">
       High to Low</label>&emsp;<!-- <input name="sortsize" type="submit" class="filter_submit" value="Sort"> -->
    <br><br><br>
       <input name="filter" type="submit" class="filter_submit" value="Apply"> 
     <br> 
   </p>

 </form>
</div>
</div>
            
          <!--<div class="post">
            
            <div class="post_div1">
            
            	<div class="post_thumbnail">Thumbnail</div>
                <div class="post_price"><u><?= $price ?> Tk</u></div>
                <div class="post_details">Content for New div Tag Goes Here</div>
			
</div>
            <div class="post_div2">
              <div class="post_button">
                <input name="button" type="button" class="post_button_design" value="View Phone Number">
              </div>
              <div class="post_picture" align="right" ><?= showimage($pid) ?></div>
              
            </div>
		</div>-->
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
