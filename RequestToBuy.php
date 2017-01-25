<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
<title>Request to buy</title>
</head>
<body>
<?php
include "UserFactory.php";
$NewUserFactory = UserFactory::getInstance();
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['message'])){
        // removes backslashes
      
	$message = stripslashes($_REQUEST['message']);
        //escapes special characters in a string
	$message = mysqli_real_escape_string($con,$message); 
       
     
        session_start();
       $Buyer_id = $_SESSION['id'];
       $query = "SELECT * from users WHERE UserID = '$Buyer_id'";
       $result = mysqli_query($con,$query);
       $rows = mysqli_fetch_array($result);
       $Buyer_name = $rows['Name'];
       $Buyer_email = $rows['Email'];
       $Seller_id = $_GET['seller'];
       $Book_id = $_GET['book'];
       
       $query = "SELECT * from users WHERE UserID = '$Seller_id'";
       $result = mysqli_query($con,$query);
       $rows = mysqli_fetch_array($result);
       $Seller_name = $rows['Name'];
       $Seller_email = $rows['Email'];
        echo $message;
       $Seller_password = $rows['Password'];
       
        $type = 'Seller';
             
             
             $NewUser = $NewUserFactory->getUser($Seller_name, $Seller_id, $Seller_email,$Seller_password,$type);
             
             $NewUser->message = $message;
             $NewUser->buyer_email = $Buyer_email;
             $NewUser->buyer_id = $Buyer_id;
             $NewUser->book_id = $Book_id;
             $NewUser->setState(3);
              echo "<div class='form'>
                            <h3>An email was sent to the seller with your message and contact informations. He/she will contact with you later.</h3>";
                           
      
}
   
    else{
            ?>
            <div class="form">
            <h2> Request Seller to buy this book.</h2>
            <form name="sellerrequest" action="" method="post">
            <br> <input type="text" name="message" placeholder="Write down your message" required /><br>
            <br><input type="submit" name="submit" value="Submit your message!" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
</body>
</html>