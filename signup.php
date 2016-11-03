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
$NewUserFactory = new UserFactory();
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
        $iderror = false;
        $emailerror = false;
        $count = 0;
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
        
        $type = $_REQUEST['type'];
        
        
        $NewUser = $NewUserFactory->getUser($name, $id, $email,$password,$type);
        $success = $NewUser->insertUser($NewUser->getName(),$NewUser->getId(),$NewUser->getEmail(),$NewUser->getPassword(),$NewUser->type);
     
        if($success){
            echo "<div class='form'>
<h1>You are registered successfully.</h1>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
        
        else
        {
                echo "<div class='form'>
<h1>Ooops! There has been a problem!</h1>
<br/>User name or Email is already in use. </div>";
   
            echo "<br/>Click here to <a href='signup.php'>Sign up</a></div>";
        }
    }else{
            ?>
            <div class="form">
            <h1>Sign Up</h1>
            <h2> Welcome to our community </h2>
            <form name="registration" action="" method="post">
            <br> <input type="text" name="name" placeholder="Name" required /><br>
            <br> <input type="text" name="id" placeholder="User Name" required /><br>
            <br><input type="email" name="email" placeholder="Email" required /><br>
            <br><input type="password" name="password" placeholder="Password  (Must be more than 6 characters)" required /><br>
            <br> <input type="radio" name="type" value="General"> General<br>
            <br> <input type="radio" name="type" value="Seller" > Seller<br>
            <br><input type="submit" name="submit" value="Sign Up" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
</body>
</html>