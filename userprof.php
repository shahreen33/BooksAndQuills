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
 <link rel="stylesheet" href="mycs.css">
<link rel="stylesheet" href="table.css">



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
    font-size: 25px;
    font-family: cursive ;
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
  margin-left: -10px;
  margin-top: 150px;
  background-color: cornflowerblue;
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
  margin-left: -10px;
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
#content2 {
  width: 150px;
  height: 200px;
  position: fixed;
  background-color:  whitesmoke ;
  border: none;
  margin-top: 20px;
  
}
.button1 {
    background-color: #4CAF50 ;
    border: none;
    color: white;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 5px 8px;
    cursor: pointer;
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
#booksettings{
    
    margin-left: 0px;
    padding-top: 150px;
}
#userinfo{
    
    margin-left: 220px;
    padding-top: 150px;
}

            h7{
                font-size: 15px;
            }
            h8{
                font-size: 18px;
            }

            table {

border: none;
    border-collapse: collapse;
    width: 100%;
    padding-left: 0px;
    background-color:  #ffcc66;
    border: 1px solid black;
}

th {
    height: 20px;
text-align: center;
padding: 0px 0px 0px 0px;
font-size: 15px;

}

td{
text-align: left;
padding: 0px 5px 5px 5px;
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
     <div id="content2"> 
         <?php
         $id =  $_GET['id'];
       if($id == "")
           $id = $_SESSION['id'];
         $query = "SELECT Imagepath from users WHERE UserID = '$id'";
         $result = mysqli_query($con,$query);
         $rows = mysqli_fetch_array($result);
         $image_id = $rows['Imagepath'];
         
         if($image_id=='')
         {
             echo "<img src='sure.png' alt='avatar' height='150' width='150' >";
         }
             
         else
         {
        
             
            echo "<img src='".$image_id."' height='150' width='150' >";
          }
         ?>
<!--        <img src="sure.png" alt="avatar" style="width:150px;height:150px;">-->
        <a href="sett.php#UploadPhoto" class="button">UPLOAD</a>
        
    </div>
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
            <form action="user_results.php">
                <input type="text" name="fname" required placeholder="Search by user" >
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
    <li><a href="#userinfo">User Information</a></li>
    <li><a href="#booklist">List of books you want to sell</a></li>
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
  
  <div class="w3-content" id="userinfo">
      <div id="conins">
        <?php
       
     
       require 'db.php';
       
       $id =  $_GET['id'];
       if($id == "")
           $id = $_SESSION['id'];
       $query = "SELECT * from users WHERE UserID = '$id'";
       $result = mysqli_query($con,$query);
       $rows = mysqli_fetch_array($result);
       $name = $rows['Name'];
       $email = $rows['Email'];
       $type = $rows['Type'];
       if($type == 1)
           $type = 'General';
       else
           $type = 'Seller';
       
        echo "<h2><b>Basic Information</b></h2><br>";
        echo"<h4><b>Name:".$name."</b></h4> <h4><b>ID:".$id."</b></h4><h4><b>Email:".$email."</b></h4><h4><b>Account type:".$type."</b></h4>";
      
      ?>  
        
      </div>
      
 

  <!-- Contact Section -->
  <div class="w3-content w3-padding-8 " id="booklist">
      <div id="conform">
           
      <h5><b>List of books you want to sell</b></h5>
             <?php
             
             $User_id =  $_GET['id'];
             if($User_id == "")
             {
                $User_id = $_SESSION['id'];
           //  echo $Book_id;
             
             $query1 = "SELECT * FROM sellerbooks WHERE Seller_id='$User_id'";
             $result1 = mysqli_query($con,$query1);
             $num = mysqli_num_rows($result1);
             
             //mysqli_fetch_all($result, MYSQLI_ASSOC);
             mysqli_fetch_all($result1,MYSQLI_ASSOC);
             foreach($result1 as $row)
             {
                  //$link = "StrategyPatternDemo.php?show=user&id=".$row['UserID'];
                  //$type = $tanzir['Type'];
                 
                echo "<table>";
                 echo "<tr>";
                $Book_id = $row['Book_info'];
                $Seller_id = $row['Seller_id'];
                $condition = $row['ConditionOf'];
                $price = $row['Price'];
                
               
                $query2 = "SELECT * FROM books WHERE Book_Author='$Book_id'";
                $result2 = mysqli_query($con,$query2);
                $r = mysqli_fetch_array($result2);
                $Book_name = $r['Name'];
                $author = $r['Author'];
               $link = "MarkAsSold.php?seller=$Seller_id&book=$Book_id";
           // echo "<th align=\"left\"><img src=\"sure.png\" alt=\"avatar\" style=\"width:100px;height:100px;>\"></th>";
            echo "<td>".$Book_name."<br><h7>By ".$author."</h7><br>Condition: ".$condition."<br>Price:".$price."</td>";
            echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
            echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
            echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><a href=$link class='button1'><h8>Mark as sold</h8></a></th>";
           echo "</tr>";
            /*echo "<th>".$_GET["fname"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href=\"userprof.php\">Go to profile</a></b></td>";
            echo "</tr>";*/
            echo "</table>";
            //echo "<br>";
             }
             }
 else {
      $query1 = "SELECT * FROM sellerbooks WHERE Seller_id='$User_id'";
             $result1 = mysqli_query($con,$query1);
             $num = mysqli_num_rows($result1);
             echo $num;
             //mysqli_fetch_all($result, MYSQLI_ASSOC);
             mysqli_fetch_all($result1,MYSQLI_ASSOC);
             foreach($result1 as $row)
             {
                  //$link = "StrategyPatternDemo.php?show=user&id=".$row['UserID'];
                  //$type = $tanzir['Type'];
                 
                echo "<table>";
                 echo "<tr>";
                $Book_id = $row['Book_info'];
                $Seller_id = $row['Seller_id'];
                $condition = $row['ConditionOf'];
                $price = $row['Price'];
                
               $link = "RequestToBuy.php?seller=$Seller_id&book=$Book_id";
                $query2 = "SELECT * FROM books WHERE Book_Author='$Book_id'";
                $result2 = mysqli_query($con,$query2);
                $r = mysqli_fetch_array($result2);
                $Book_name = $r['Name'];
                $author = $r['Author'];
               
           // echo "<th align=\"left\"><img src=\"sure.png\" alt=\"avatar\" style=\"width:100px;height:100px;>\"></th>";
            echo "<td>".$Book_name."<br><h7>By ".$author."</h7><br>Condition: ".$condition."<br>Price:".$price."</td>";
            echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
            echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>";
            echo "<th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><a href=$link class='button1'><h8>Want to buy</h8></a></th>";
           echo "</tr>";
            /*echo "<th>".$_GET["fname"]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><a href=\"userprof.php\">Go to profile</a></b></td>";
            echo "</tr>";*/
            echo "</table>";
            //echo "<br>";
             }
 }
            ?>
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

