<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
<title>Books And Quills - Add this book for selling</title>
</head>
<body>
<?php

require('db.php');
session_start();
$User_id = $_SESSION['id'];
global $con;
// If form submitted, insert values into the database.
 $query1 = "SELECT Type FROM users WHERE UserId='$User_id'";
 $result1 = mysqli_query($con,$query1);
 $rows = mysqli_fetch_array($result1);
 if($rows['Type']==1)
 {
     header("Location: sett.php#UpdateAccount");
     
 }
 else {
     
if (isset($_REQUEST['condition'])){
        // removes backslashes
       $condition = stripslashes($_REQUEST['condition']);
        //escapes special characters in a string
	$condition = mysqli_real_escape_string($con,$condition); 
        
	$price = stripslashes($_REQUEST['price']);
	$price = mysqli_real_escape_string($con,$price);
  
        $Book_id = $_GET['Book_id'];
        
        
         // $q = "INSERT INTO books(Name, Author, Genre, PageCount, Publishers, Synopsis, Book_Author) VALUES ('$name', '$author','$genre', '$pagecount','$publishers','$synopsis' ,'$book_author')";
         $query =  "INSERT INTO sellerbooks (Seller_id, Book_info, ConditionOf, Price) VALUES ('$User_id', '$Book_id', '$condition', '$price')";
         $result = mysqli_query($con,$query);
         
        if($result){
            echo "<div class='form'>
<h1>Your book has been inserted successfully.</h1>
<br/>Click here to <a href='homepage.php'>Go to Home</a></div>";
        } 
        
        else
        {
 
                echo "<div class='form'>
<h3>Ooops! There has been a problem!</h3>
<br/>Try a new book.</div>";
   
         
        }
    }else{
            
            
            
            ?>
            
            <div class="form">
            <h3>Add some info of your copy of this book..</h3>
            <form name="sellerbookInsertion" action="" method="post">
            <br> <input type="text" name="condition" placeholder="Condition (New / Fairly ok / Old etc)" required /><br>
            <br><input type="text" name="price" placeholder="Price" required /><br>
            <br><input type="submit" name="submit" value="Add this book" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    }
 }?>
</body>
</html>