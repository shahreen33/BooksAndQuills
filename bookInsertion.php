<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
<title>Sign Up</title>
</head>
<body>
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
        $author = striplashes($_REQUEST['author']);
        $author = mysqli_real_escape_string($con,$author); 
        $genre = stripslashes($_REQUEST['genre']);
        //escapes special characters in a string
	$genre = mysqli_real_escape_string($con,$genre);
        $genre = strtolower($genre);
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
<h1>Ooops! There has been a problem!</h1>
<br/>Book name is already in Database. </div>";
   
            echo "<br/>Click here to <a href='bookInsertion.php'>Add a new book</a></div>";
        }
    }else{
            ?>
            <div class="form">
            <h1>Add A book</h1>
            <form name="bookInsertion" action="" method="post">
            <br> <input type="text" name="name" placeholder="Name" required /><br>
            <br> <input type="text" name="author" placeholder="Author" required /><br>
            <br> <input type="text" name="genre" placeholder="genre" required /><br>
            <br><input type="text" name="pagecount" placeholder="Pages" required /><br>
            <br><input type="text" name="publishers" placeholder="Published by" required /><br>
            <br><input type="text" name="synopsis" placeholder="Synopsis" /><br>
            <br><input type="submit" name="submit" value="Add this book" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
</body>
</html>