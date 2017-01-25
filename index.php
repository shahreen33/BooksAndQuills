<?php

session_start();
if(isset($_SESSION["id"]))
{
    ob_start();
    header('Location: homepage.php');
    ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <link rel="stylesheet" href="wss.css">
        <link rel="stylesheet" href="mycs.css">
        <title>Books and Quills-log in o sign up for more</title>
        
    </head>
    <body>
        <style>
            #content {
  width: 1366px;
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

            </style>
        <header>
      <div id="content">

      
      
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
         <br>
        <br>
         <br>
        <br>
         <br>
        <br>
        <br>
        <br>
        <br>
        &ensp;New here?
        <br>
        <a href="signup.php"  class="button">SIGN UP</a>
        <br>
        <br>
        &ensp;Already have an account?
        <br>
        <a href="login.php" class="button">LOG IN</a>
        
        <footer class="w3-content w3-border-blue-gray w3-wide w3-padding-64 w3-text-black w3-xlarge ">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
    <p class="w3-small-large">Want to know <a href="about.php" class="w3-hover-text-green">about us?</a></p>
    <p class="w3-small-large">Have questions? Take a look at the <a href="forum.php" class="w3-hover-text-green">FAQ section</a></p>

    <!-- End footer -->
  </footer>
        
    </body>
</html>
