<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "auth.php";
require 'db.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="wss.css">
        <link rel="stylesheet" href="my.css">
        <link rel="stylesheet" href="tabst.css">
        <link rel="stylesheet" href="slides.css">

        <title>Books and Quills - Home</title>
    </head>
    <body>
        <h1>BOOKS & QUILLS</h1>
        <h2>Welcome <?php echo $_SESSION['id']?> !</h2>
        <a href="logout.php" class="button" >LOG OUT</a>
        <ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'RAB')">Recently added books</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'BBook')">Buy books</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Go')">Go to your profile</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'ABook')">Add a book</a></li>
</ul>

<div id="RAB" class="tabcontent">
  <!--<h3></h3>-->
  <p>Database</p>
</div>

<div id="BBook" class="tabcontent">
  
    <h3>Enter your query</h3>
  <br>
  <input type="text" name="in_side" value="" size="30" required placeholder="Search..." />
</div>

<div id="Go" class="tabcontent">
   
<?php
         $query = "SELECT * FROM users WHERE UserId='".$_SESSION['id']."'";
         $result = mysqli_query($con,$query);
         $row = mysqli_fetch_array($result);
         $name = $row['Name'];
         $id = $row['UserID'];
         $email = $row['Email'];
         $password = $row['Password'];
         $type = $row['Type'];
         if($type == 1)
             $type = "General";
         else 
             $type = "Seller";
    
         echo "<h3>USER NAME: ". $name."<br></h3>";
         echo "<h3>USER ID: ". $id."<br></h3>";
         echo "<h3>EMAIL: ". $email."<br></h3>";
         echo "<h3>TYPE: ". $type."<br></h3>";
    ?>
   
</div>
  <div id="ABook" class="tabcontent">
      <a href="bookInsertion.php" class ="button">Add a Book</a>
</div>
        
<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
        <?php
        // put your code here
        ?>
    </body>
</html>
