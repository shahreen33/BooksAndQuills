 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="signup.css" >
<link rel="stylesheet" href="custom.css">
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['id'])){
        // removes backslashes
	$id = stripslashes($_REQUEST['id']);
        //escapes special characters in a string
	$id = mysqli_real_escape_string($con,$id);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
      //  $password = hash('sha256', $password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE UserID='$id' and password='.md5($password).'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['id'] = $id;
           
            // Redirect user to index.php
	    header("Location: homepage.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<h2>Always good to have you here</h2>
<form action="" method="post" name="login">
    <br><input type="text" name="id" placeholder="User Name" required /><br>
    <br><input type="password" name="password" placeholder="Password" required /><br>
    <br><input name="submit" type="submit" value="Login" /><br>
</form>
<p>Not registered yet? <a href='signup.php'>Sign Up</a></p>
</div>
<?php } ?>
</body>
</html>