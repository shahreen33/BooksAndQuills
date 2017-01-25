<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
<title>Recover your password</title>
</head>
<body>
<?php
include "UserFactory.php";
$NewUserFactory = UserFactory::getInstance();
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
      

	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
       
         $query = "SELECT * FROM users WHERE Email='$email'";
         $result = mysqli_query($con,$query);
         $count = mysqli_num_rows($result);
         if($count == 0)
         {
             
                echo "<div class='form'>
<h3>Sorry, the email address you submitted doesn't belong to any account</h3></div>";
   
            echo "<br/>Click here to <a href='password_recovery.php'>to try again.</a></div>";
         }
         
         else
         {
             $rows = mysqli_fetch_array($result);
             $name = $rows['Name'];
             $id = $rows['UserID'];
             $password = $rows['Password'];
             $type = $rows['Type'];
             if($type == 1)
                 $type = 'General';
             else
                 $type = 'Seller';
             
             
             $NewUser = $NewUserFactory->getUser($name, $id, $email,$password,$type);
             
             $NewUser->setState(2);
             
             echo "<div class='form'>
              <h3>Your password has been changed successfully. An email was sent to your account. Please login using the sent password.</h3>
              <br/>Click here to <a href='login.php'>Login</a></div>";

         }
      
        
       
    }
    else{
            ?>
            <div class="form">
            <h1>Recover your password</h1>
            <form name="password_recovery" action="" method="post">
            <br><input type="email" name="email" placeholder="Write down the Email address through which you registered." required /><br>
            <br><input type="submit" name="submit" value="Recover your password" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
</body>
</html>