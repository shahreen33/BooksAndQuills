<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
global $con;
$con= mysqli_connect("localhost","root","","booksandquills");
// Check connection
if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>