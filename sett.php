<!DOCTYPE html>
<?php
include "auth.php";
require 'db.php';

?>
<html>
    <head>
<title>Settings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="wss.css">
<link rel="stylesheet" href="newcss.css">
<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
<link rel="stylesheet" href="prof.css">
<link rel="stylesheet" href="drop.css">
<link rel="stylesheet" href="profmod.css">



<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">-->
    </head>
    <!--<body class="w3-black">-->      
    <body>
        
<style>

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    /*padding-top: 20px;*/
    width: 200px;
    height: 700px;
    position: fixed;
    background-color: coral;
    margin-top: 160px;
}

li a {
    display: block;
    color: #000;
    padding: 16px 16px;
    text-decoration: none;
    font-size: 20px;
    font-family: sans-serif ;
}

li a.active {
    background-color: #660033;
    color: white;
}

li a:hover:not(.active) {
    background-color: #660033;
    color: white;
}
#conform {
  width: 900px;
  height: 700px;
  position:  static;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-top: 20px;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: -20px;
  margin-top: 150px;
  background-color: cornflowerblue;
  font-size: 30px;
}
#conins {
  width: 900px;
  height: 700px;
  position:  static;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: -10px;
  margin-top: 10px;
  background-color: #ccc;
}
#conedit{
  width: 900px;
  height: 700px;
  position:  static;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: -20px;
  margin-top: 150px;
  background-color: white;
}
#conright {
  width: 250px;
  height: 768px;
  position: fixed;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: 1120px;
  margin-top: 160px;
  background-color: coral;
}
#content {
  width: 1350px;
  height: 160px;
  position: fixed;
  background-color: #330000  ;
  background-image: url("contentholder.png");
 
  border: none;
  padding-left: 0px;
  margin-left: 0px;
  margin-top: 0px;
  padding-left: 5px;
 
}

    input[type=text] {
    width: 90%;
    margin: 0px 5px;
    box-sizing: w3-round ;
    border-radius: 3px;
    border: 2px solid #ccc;
    font-size: 16px;
    background-color: white;
   /*background-image: url('ic1.png');
    background-position: 180px 2px;*/
    background-repeat: no-repeat;
    padding: 10px 15px 10px 15px;
}


    .mySlides {
        display:none;
        position: relative; 
    width: 1400px; 
    height: 400px; 
    padding: 0px; 
    margin-top: 160px;
   
    }
     .dropdown {
         margin-top: 5px;
    position: relative;
    display: inline-block;
    
    
}
.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

    .submit
    {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 8px;
    cursor: pointer;
    float: right;
}
.dropdown-content a:hover {background-color: #ccc ;}
    body{
        background-image: url("back6.jpg");
    }
    
h1 {
    color: white ;
    font-family: verdana;
    font-size: 80px;
}
h2{
    color: black ;
    font-family: verdana;
    font-size: 30px;
}
body, h1,h2,h3,h4,h5,h6{font-family: "Montserrat", sans-serif;          
}
p{
    color: white;
}
.w3-row-padding img {margin-bottom: 12px;
margin-top: 12px;}
/* Set the width of the sidenav to 120px */
/*.w3-sidenav {width: 120px;background:  #f44336 ;
             margin-top: 130px;
/*background-image: url("contentholder.png");*/

/* Add a left margin to the "page content" that matches the width of the sidenav (120px) */
#main {margin-left: 0px;}
#EditProfile{
    
    margin-left: 0px;
    padding-top: 150px;
}
#instructions{
    
    margin-left: 220px;
    padding-top: 150px;
}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>


<!-- Icon Bar (Sidenav - hidden on small screens) -->
<!--<nav class="w3-sidenav w3-center w3-small w3-hide-small">
  <!-- Avatar image in top left corner -->
  <!--<img src="new.png" alt="homepage" style="width:100%">-->
 <!-- <a class="w3-padding-large w3-padding-top-64 w3-hover-yellow " href="#">
    <i class="fa fa-home w3-xxlarge" ></i>
    
    <img src="home_icon.png" alt="homepage" style="width:80%">
    
    <p>HOME</p>
  </a>
  <a class="w3-padding-large w3-hover-yellow" href="#photos">
    <i class="fa fa-eye w3-xxlarge"></i>
    <img src="book_icon.png" alt="homepage" style="width:80%">
    
    <p>RECENTLY ADDED</p>
  </a>
  <a class="w3-padding-large w3-hover-yellow" href="#contact">
    <i class="fa fa-home w3-xxlarge"></i>
    <img src="add_book.png" alt="homepage" style="width:80%">
    
    <p>ADD A BOOK</p>
  </a>
  
  <a class="w3-padding-large w3-hover-yellow" href="#">
      <img src="shop.png" alt="homepage" style="width:80%">
    <p>BUY A BOOK</p>
  </a>
</nav>-->

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<!--<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <ul class="w3-navbar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <li class="w3-left" style="width:25% !important"><a href="#">HOME</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#about">ABOUT</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#photos">PHOTOS</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#contact">CONTACT</a></li>
  </ul>
</div>-->

<div id="conright">
  </div>

<!-- Page Content -->

  <!-- Header/Home -->
  <!--<header class="w3-container w3-padding-32 w3-center w3-black" id="home">-->
  <header>
      <div id="content">

       
    <div class="dropdown" style="float:right;">
                   
          <img src="ic.png" alt="prof" width="80" height="80">
        <div class="dropdown-content">
        <div class="dropdown-content" style="left:0;">
            <a href="userprof.php?id=">Go to your profile</a>
            <a href="sett.php">Settings</a>
            <a href="logout.php">Log out</a>
        </div>
    </div>
</div>
      
      
      <div style="float:right;">
          <br>
      <form action="results.php">
            <input type="text" name="fname" required placeholder="Search by books">
            &emsp;
</form>
          
      </div>
      <div style="float:right;">
          <br>
            <form action="results.php">
                <input type="text" name="fname1" required placeholder="Search by user" >
            </form>
      </div>
     <!-- <div id="myModal" class="modal">

  <!-- Modal content -->
  <!--<div class="modal-content">
    <span class="close">×</span>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">5GB Storage</li>
          <li class="w3-padding-16">Mail Support</li>
          <li class="w3-padding-16">Kichu ekta</li>
            
          <li class="w3-light-grey w3-padding-24">
              <a href="userprof.php" class ="button">Modify your account</a>
          </li>
        </ul>
      </div>
  </div>

</div>
      </div>-->



    <!--<h1 class="w3-jumbo"><span class="w3-hide-small"></span>BOOKS AND QUILLS</h1>-->
 <a href="index.php">
  <img src="newl3.png" alt="log" style="width:40%">
 </a>
  
    <!--<img src="/w3images/man_smoke.jpg" alt="boy" class="w3-image" width="992" height="1108">-->
      </div>
  </header>
  
  
<ul>
    <li><a href="#instructions">Instructions</a></li>
    <li><a href="#EditProfile">Edit your profile</a></li>
    <li><a href="#UpdateAccount">Update your account</a></li>
    <li><li><a href="#UploadPhoto">Upload your photo</a></li>
</ul>
  
  <!--<br><br><br>
<form action="results.php">
            <input type="text" name="fname" required placeholder="Search by books">
</form><br><br>
            <form action="results.php">
            <input type="text" name="fname1" required placeholder="Search by user">
            </form>
<br><br><br><br><br><br>-->
  <!-- About Section -->
  

  
  <!-- Portfolio Section -->
  
  <div class="w3-content" id="instructions">
      <div id="conins">
          <br><br><h2>Go to "Edit your profile" to change your name or password.<br>Use "Upgrade your account" to change your user type from General to Seller.<br>And "Upload your photo" is pretty self explanatory.<br>Thank you.</h2>
      
  <div class="w3-content w3-padding-8 " id="EditProfile">
      <div id="conedit">
      <br><h2 class="w3-text-black">Edit your profile information</h2>
   ` <hr style="width:200px" class="w3-opacity">
                <?php
                $id =  $_SESSION['id'];
                   $query = "SELECT * from users WHERE UserID = '$id'";
                   $result = mysqli_query($con,$query);
                   $rows = mysqli_fetch_array($result);
                   $name = $rows['Name'];
                   $email = $rows['Email'];
                   $password = $rows['Password'];
                   $type = $rows['Type'];
                   if($type == 1)
                       $type = 'General';
                   else
                       $type = 'Seller';

                if(isset($_REQUEST['name']))
                {
                    $name= stripslashes($_REQUEST['name']);
                    //escapes special characters in a string
                    $name = mysqli_real_escape_string($con,$name); 



                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con,$password);
                    $password = sha1($password);
                     $query =  "UPDATE users SET Password='$password' WHERE UserID = '$id'";

                       $result = mysqli_query($con,$query);
                        $query =  "UPDATE users SET Name='$name' WHERE UserID = '$id'";
                       $result = mysqli_query($con,$query);
                        echo "<div class='form'>
                                    <h3>Your profile has been updated!</h3></div>";
                }
                
                ?>
                <h3 color ="black" Edit your profile </h3>
                 <div class="form">
                 
                 <form name="edit profile" action="" method="post">
                        <br> <input type="text" name="name" placeholder="<?php echo htmlentities($name) ?>" required /><br>
                        <br> <input type="text" name="id" placeholder="<?php echo htmlentities($id) ?>" readonly /><br>
                        <br><input type="email" name="email" placeholder="<?php echo htmlentities($email) ?>" readonly /><br>
                        <br><input type="password" name="password" placeholder="Change your password" required /><br>
                        <br><input type="submit" name="submit" value="Save changes" /> 
                        </form>
                        </div><?php

                
                ?>
        
      </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-content w3-padding-8 " id="UpdateAccount">
      <div id="conform">
     <?php
         $id =  $_SESSION['id'];
       $query = "SELECT * from users WHERE UserID = '$id'";
       $result = mysqli_query($con,$query);
       $rows = mysqli_fetch_array($result);
       $type = $rows['Type'];
       if($type == 1)
           $type = 'General';
       else
           $type = 'Seller';
    
        if($type == 'Seller')
        {
            echo "<div class='form'><h2>Your account is already upgraded to a Seller account.</h2></div>";
        }
        else
        {
         if(isset($_POST['submit']))
            {
                $nid = stripslashes($_REQUEST['nid']);
                $nid = mysqli_real_escape_string($con,$nid);
                mysqli_query($con, "UPDATE users SET NID='$nid' WHERE UserID='".$id."'");
                mysqli_query($con, "UPDATE users SET type='2' WHERE UserID='".$id."'");
                echo "<div class='form'><h3>Your account has been upgraded! Add some books to sell.</div>";
                
            }
            else{
             ?>
            <div class="form">
            <h3> Enter your NID no to upgrade your account </h3>
            <form name="seller" action="" method="post">
            <br> <input type="text" maxlength="17" minlength="17" name="nid" placeholder="Enter 17 digit NID" required /><br>
            <br><input type="submit" name="submit" value="Upgrade you account" /> 
            </form>
            </div><?php
          }
          ?>
              <?php
        }?>
          
            
    <!--<h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    
    <p>Lets get in touch. Send me a message:</p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Name"></p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Email"></p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Subject"></p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Comment"></p>
    <p><button class="w3-btn w3-light-grey w3-padding-large w3-hover-grey">
      <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button></p>-->
    
  <!-- End Contact Section -->
    <!--<h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    
    <p>Lets get in touch. Send me a message:</p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Name"></p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Email"></p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Subject"></p>
    <p><input class="w3-input w3-border w3-padding-16" type="text" placeholder="Comment"></p>
    <p><button class="w3-btn w3-light-grey w3-padding-large w3-hover-grey">
      <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button></p>-->
    
  <!-- End Contact Section -->
  </div>
  </div>
  <div class="w3-content w3-padding-8 " id="UploadPhoto">
      <div id="conform">
     
          <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
    
    body{
        text-align: left;
     
    }

input {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    
}
input:focus {
    border: 3px solid #555;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    width: 25%;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
        <form method="post" enctype="multipart/form-data">
    Select image to upload:
    <table>
            
            image:<br> <input type="file" name="image" <br><br>
        
<input type="submit" name="submit">
        </table>
       </form>
        <?php
        require 'db.php';
        if(isset($_POST['submit']))
        {
        if(($_FILES['image']['tmp_name'])=='' || getimagesize($_FILES['image']['tmp_name'])==FALSE)
             {
                     echo "Select an image please ";
              }
            else
             {
        
                $image_tmp = $_FILES['image']['tmp_name'];
                $image_name = $_FILES['image']['name'];

                $id = $_SESSION['id'];
                $target = "uploads/user/" . $id . ".jpg";
                //change target
                $image = file_get_contents(addslashes($image_tmp));
                $image = base64_encode($image);


                global $con;

                //echo '<img height="100" width="100" src="data:image;base64,'.$image.'" >';
                /* $target = "C:/Users/HP/Documents/uploads/";
                  $target = $target.basename($_FILES['image']['name']); */

                move_uploaded_file($image_tmp, $target);
                //update d3atabase
                $sql = "UPDATE users SET Imagepath='$target' WHERE UserID = '$id'";
//Writes the information to the database
       $result=mysqli_query($con,$sql) ;
       if($result){
        echo "<h2>Image uploaded"."<br></h2>";
        //echo '<img height="100" width="100" src="data:image;base64,'.$image.'" >';
        
        }
       else{
        echo "Image not uploaded";
       }
       //$row= mysqli_fetch_array($result);
       //echo $row['image_tmp'];
       //echo '<img height="100" width="100" src="data:image;base64,'.$row[2].'" >';

      // echo "The file ".$image_name. " has been uploaded, and your information has been added to the directory";




        
}
  }

 ?>

</body> 
</html>

  </div>
  </div>
    <!-- Footer -->
  <footer class="w3-content w3-border-blue-gray w3-wide w3-padding-64 w3-text-black w3-xlarge ">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
    <p class="w3-large">Want to know <a href="about.php" class="w3-hover-text-green">about us?</a></p>
    <p class="w3-large">Have questions? Take a look at the <a href="forum.php" class="w3-hover-text-green">FAQ section</a></p>

    <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->


</body>
</html>

