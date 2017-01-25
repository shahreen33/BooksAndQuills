<!DOCTYPE html>
<?php
include 'auth.php';
require 'db.php';
?>
<html>
    <head>
<title>Books And Quills - Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="wss.css">
<link rel="stylesheet" href="newcss.css">
<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
<link rel="stylesheet" href="prof.css">
<link rel="stylesheet" href="drop.css">
<link rel="stylesheet" href="profmod.css">
<link rel="stylesheet" href="slide.css">


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
    padding-top: 20px;
    width: 200px;
    height: 700px;
    position: fixed;
    background-color: coral;
    margin-top: 160px;
    /*background-image: url("conback.jpg");*/
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
    background-color:  #993300;
    color: white;
}

li a:hover:not(.active) {
    background-color: #993300;
    color: white;
}
#conform {
  width: 900px;
  height: 700px;
  position:  static;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: 25px;
  margin-top: 160px;
  background-color: #ccc;
  background-image: url("conback.jpg");

}
#conintro {
  width: 900px;
  height: 700px;
  position:  static;
  /*background-image: url("back.jpg");*/
  border: none;
  /*padding-left: 20px;
  padding-right: 20px;*/
  margin-left: -10px;
  margin-top: 20px;
  background-color: lightblue;
  /*background-image: url("conback.jpg");*/
}
#conintrochild {
  width: 400px;
  height: 700px;
  position: static;
  /*background-image: url("back.jpg");*/
  border: none;
  /*padding-left: 20px;
  padding-right: 20px;*/
  margin-left: 500px;
  margin-top: -723px;
  background-color: cornflowerblue;
  /*background-image: url("conback.jpg");*/
}

  
#conmain {
  width: 900px;
  height: 700px;
  position:  static;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: -10px;
  margin-top: 160px;
  background-color: #ccc;
  background-image: url("conback.jpg");
}
#conright {
    text-align: left;
  width: 230px;
  height: 768px;
  position: fixed;
  /*background-image: url("back.jpg");*/
  border: none;
  padding-top: 20px;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: 1120px;
  margin-top: 160px;
  background-color: cornflowerblue;
  /*background-image: url("conback.jpg");*/
  color: black;
}
#content {
  width: 1350px;
  height: 160px;
  position: fixed;
  /*background-color: #330000  ;*/
  background-image: url("contentholder.png");
  border: none;
  padding-left: 0px;
  margin-left: 0px;
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
    color: black;
}
.w3-row-padding img {margin-bottom: 12px;
margin-top: 12px;}
/* Set the width of the sidenav to 120px */
/*.w3-sidenav {width: 120px;background:  #f44336 ;
             margin-top: 130px;
/*background-image: url("contentholder.png");*/

/* Add a left margin to the "page content" that matches the width of the sidenav (120px) */
#main {margin-left: 0px;}
#Recent{
    
    margin-left: 220px;
    padding-top: 150px;
}
#home{
    
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
font-size: 25px;

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
    <p class="w3-large">Want to know <a href="about.php" class="w3-hover-text-brown">about us?</a></p>
    <p class="w3-large">Have questions? Take a look at the <a href="forum.php" class="w3-hover-text-brown">FAQ section</a></p>

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
          
            
      <div style="float:right;">
          <br>
          <form action="#Bbook">
          <input type="submit" name="submit" value="Search by category" >
            &emsp;
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
    <li><a href="#home">Home</a></li>
    <li><a href="#Abook">Add a book</a></li>
    <li><a href="#Bbook">Categorised Search</a></li>
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
  
  <div class="w3-content" id="home">
      <div id="conintro">
<div class="mySlides fade">
    <img src="combined.png" alt="sl1" style="width:100%">
  
</div>

<div class="mySlides fade">
  <img src="combined1.png" alt="sl2" style="width:100%">
  
  
</div>

<div class="mySlides fade">
  <img src="combined2.png" alt="sl3" style="width:100%">
  
</div>
          <div class="mySlides fade">
              <img src="combined3.png" alt="sl4" style="width:100%">
  
</div>
          
</div>
<br>
<!--<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>i
  <span class="dot"></span>
</div>-->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    //var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    
    slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


</div>
      <!--<br><br><h2>Hello there! Welcome to the world of book hoarders!<br>We are here to let you experience one of the most efficient buying and selling services there are. It would mean a lot if you take a trip and let us know how can we be better.<br>Thank you. </h2>
      <!--<div class="w3-content w3-section" style="max-width:1400px">
    <img class="mySlides" alt="name_1" src="dula.jpg" style="width:100%">
    <img class="mySlides" alt="name_2" src="onti.jpg" style="width:100%">
    <img class="mySlides" alt="name_3" src="rakhi.jpg" style="width:100%">
    <img class="mySlides" alt="name_4" src="dadi.PNG" style="width:100%">
</div>
    <!-- End Grid/Pricing tables -->
    
    <!-- Testimonials -->
    
  <!-- End About Section -->
  

  
  <!-- Portfolio Section -->
 

  <!-- Contact Section -->
  <div class="w3-content w3-padding-8 " id="Abook">
      <div id="conform">
         <?php
include "BookFactory.php";
$NewBookFactory = BookFactory::getInstance();
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
                $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($con,$name); 
        $author = stripslashes($_REQUEST['author']);
  
        $author = mysqli_real_escape_string($con,$author); 
        $genre = stripslashes($_REQUEST['genre']);
        //escapes special characters in a string
	$genre = mysqli_real_escape_string($con,$genre);
	$pagecount = stripslashes($_REQUEST['pagecount']);
	$pagecount = mysqli_real_escape_string($con,$pagecount);
  
	$publishers = stripslashes($_REQUEST['publishers']);
	$publishers = mysqli_real_escape_string($con,$publishers);
        
        $synopsis = stripslashes($_REQUEST['synopsis']);
	$synopsis = mysqli_real_escape_string($con,$synopsis);
        
        
        
        $NewBook = $NewBookFactory->getBook($name,$author, $genre, $pagecount,$publishers,$synopsis);
        $success = $NewBook->insertBook($NewBook->getName(), $NewBook->getAuthor(), $NewBook->getGenre(),$NewBook->getPageCount(),$NewBook->getPublishers(),$NewBook->getSynopsis());
     
     
        if($success){
            echo "<div class='form'>
<h1>Your book has been inserted successfully.</h1>
<br/>Click here to <a href='homepage.php'>Go to Home</a></div>";
        } 
        
        else
        {
                echo "<div class='form'>
<h3>Ooops! There has been a problem!</h3>
<h3>Book name is already in Database.</h3> </div>";
                ?>
             <div class="form">
            <form name="bookInsertion" action="" method="post">
            <br> <input type="text" name="name" placeholder="Name" required /><br>
            <br> <input type="text" name="author" placeholder="Author" required /><br>
            <br> <input type="text" name="genre" placeholder="Genre" required /><br>
            <br><input type="text" name="pagecount" placeholder="Pages" required /><br>
            <br><input type="text" name="publishers" placeholder="Published by" required /><br>
            <br><input type="text" name="synopsis" placeholder="Synopsis" /><br>
            <br><input type="submit" name="submit" value="Add this book" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
         <?php   
        }
    }
    else{
            ?>
            <div class="form">
            <h1>Add A book</h1>
            <form name="bookInsertion" action="" method="post">
            <br> <input type="text" name="name" placeholder="Name" required /><br>
            <br> <input type="text" name="author" placeholder="Author" required /><br>
            <br> <input type="text" name="genre" placeholder="Genre" required /><br>
            <br><input type="text" name="pagecount" placeholder="Pages" required /><br>
            <br><input type="text" name="publishers" placeholder="Published by" required /><br>
            <br><input type="text" name="synopsis" placeholder="Synopsis" /><br>
            <br><input type="submit" name="submit" value="Add this book" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
            
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
  <div class="w3-padding-8 w3-content" id="Bbook">
        <div id="conform">
            <?php
        require 'db.php';
        
        echo "<h2>Categories</h2>";
       
        
        
        global $con;
        $query = "SELECT DISTINCT Genre AS Genre FROM books ORDER BY Genre";
        $result = mysqli_query($con, $query);
        mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach($result as $row)
        {
            $Gname = $row['Genre'];
            $query = "SELECT COUNT(*) AS count FROM books WHERE Genre='$Gname'";
            $res= mysqli_query($con, $query);
            $r = mysqli_fetch_array($res);
            $count = $r['count'];
            $link = "showBooksofCategory.php?Cat_id=".$Gname;
                echo "<table>";
                echo "<tr>";
                echo "<th><a href=$link><h3>$Gname($count)</h3></a></th>";
               echo "</tr>";
               echo "</table>";
                
        }
        
        ?>
        </div>
  </div>
  
    <!-- Footer -->
<!--  <footer class="w3-content w3-border-blue-gray w3-wide w3-padding-64 w3-text-black w3-xlarge ">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
    <p class="w3-large">Want to know <a href="about.php" class="w3-hover-text-green">about us?</a></p>
    <p class="w3-large">Have questions? Take a look at the <a href="forum.php" class="w3-hover-text-green">FAQ section</a></p>

     End footer 
  </footer>-->

<!-- END PAGE CONTENT -->


</body>
</html>

