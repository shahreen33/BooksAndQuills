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
        $query = "SELECT UserId FROM users WHERE UserId='$id'";
         $result = mysqli_query($con,$query);
         $count = mysqli_num_rows($result);
        
         if($count!=0){
             $iderror = true;
         }
         
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
        $query = "SELECT Email FROM users WHERE Email='$email'";
         $result = mysqli_query($con,$query);
         $count = mysqli_num_rows($result);
         if($count != 0)
             $emailerror = true;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
       // $password = hash('sha256', $password);
        $contact_no = stripslashes($_REQUEST['contact_no']);
	$contact_no = mysqli_real_escape_string($con,$contact_no);
      
        $query = "INSERT into users (Name, UserID, Email, Password, ContactNo) VALUES ('$name','$id', '$email', '.md5($password).', '$contact_no')";
        $result = mysqli_query($con,$query);
        if($result && !$iderror && !$emailerror){
            echo "<div class='form'>
<h1>You are registered successfully.</h1>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
        
        else
        {
            if($emailerror && $iderror)
            {
                echo "<div class='form'>
<h1>Ooops! There has been a problem!</h1>
<br/>User name and Email is already in use. </div>";
            }
            
            else if($emailerror && !$iderror)
            {
                echo "<div class='form'>
<h1>Ooops! There has been a problem!</h1>
<br/>Email is already in use. </div>";
            }
            
            else if(!$emailerror && $iderror)
            {
                
                        echo "<div class='form'>
        <h1>Ooops! There has been a problem!</h1>
        <br/>User name is already in use. </div>";
                    
            }
            
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
            <br><input type="text" name="contact_no" placeholder="Contact Number" required /><br>
            <br><input type="submit" name="submit" value="Sign Up" /> 
            </form>
            </div>
            <!--<a href="signup.php" class="button">SIGN UP</a>-->
            <?php 
            
    } ?>
</body>
</html>