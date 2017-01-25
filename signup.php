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
include "UserFactory.php";
$NewUserFactory = UserFactory::getInstance();
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
      
	$name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($con,$name); 
        $id = stripslashes($_REQUEST['id']);
        //escapes special characters in a string
	$id = mysqli_real_escape_string($con,$id);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
  
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $password = sha1($password);
       
        $type = $_REQUEST['type'];
        
        
        $NewUser = $NewUserFactory->getUser($name, $id, $email,$password,$type);
        $success = $NewUser->insertUser($NewUser->getName(),$NewUser->getId(),$NewUser->getEmail(),$NewUser->getPassword(), $NewUser->type);
        
        if($success){
       
         
                       $NewUser->setState(1);
                       echo "<div class='form'>
                            <h1>You are registered successfully.</h1>
                            <h3>An email was sent to your account for verification. Please click on the link provided there and verify your account to log in.</h3>
                            <br/>Click here to <a href='login.php'>Login</a></div>";
        
     }
      else
      {
                echo "<div class='form'>
                        <h1>Ooops! There has been a problem!</h1>
                        <br/>User name or Email is already in use. </div>";
   
                echo "<br/>Click here to <a href='signup.php'>Sign up</a></div>";
       }
}
   
    else{
            ?>
            <div class="form">
            <h1>Sign Up</h1>
            <h2> Welcome to our community </h2>
            <form name="registration" action="" method="post">
            <br> <input type="text" name="name" placeholder="Name" required /><br>
            <br> <input type="text" name="id" placeholder="User Name" required /><br>
            <br><input type="email" name="email" placeholder="Email" required /><br>
            <br><input type="password" name="password" placeholder="Password  (Must be more than 6 characters)" required /><br>
            <br><h3>What type of User do you want to be?</h3>
            <br> <input type="radio" name="type" value="General"/> <b>General</b> <br>
            <br> <input type="radio" name="type" value="Seller"/> <b> Seller</b> <br>
            <br><input type="submit" name="submit" value="Sign Up" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
</body>
</html>