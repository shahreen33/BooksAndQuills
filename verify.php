<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
<html >
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="signup.css" >
     <link rel="stylesheet" href="custom.css"  >
    <title>Books And Quills</title>
    
</head>
<body>
    <!-- start header div --> 
    
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
        <?php
         
           require 'db.php';
           if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    global $con;
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
    
    echo $email ;
    echo $hash;
    
    $search = "SELECT * FROM users WHERE Email='".$email."' AND hash='".$hash."' AND verified='0'"; 
    $result = mysqli_query($con,$search);
    $match  = mysqli_num_rows($result);
    $rows = mysqli_fetch_array($result);
    $type = $rows['Type'];
    
    echo $match;
                 
    if($match > 0){
        if($type == 2)
        {
            if(isset($_REQUEST['nid']))
            {
                $nid = stripslashes($_REQUEST['nid']);
                $nid = mysqli_real_escape_string($con,$nid);
                mysqli_query($con, "UPDATE users SET NID='$nid' WHERE Email='".$email."' AND hash='".$hash."' AND verified='0'");
                mysqli_query($con, "UPDATE users SET verified='1' WHERE Email='".$email."' AND hash='".$hash."' AND verified='0'");
                echo "<div class='form'><h3>Your account has been activated, you can now <a href='login.php'>Login</a></h3></div>";
                
            }
            else{
             ?>
            <div class="form">
            <h3> As you are a seller, enter your NID no to verify your account </h3>
            <form name="seller" action="" method="post">
             <br> <input type="text" name="nid" placeholder="Enter 17 digit NID" required /><br>
            <br><input type="submit" name="submit" value="Sign Up" /> 
            </form>
            </div>
            <?php
        }
        }
        else
        {
            $nid = '';
            mysqli_query($con, "UPDATE users SET verified='1' WHERE Email='".$email."' AND hash='".$hash."' AND verified='0'");
            echo "<div class='form'><h3>Your account has been activated, you can now <a href='login.php'>Login</a></h3></div>";
        }
        // We have a match, activate the account
        
    }else{
        // No match -> invalid url or account has already been activated.
        echo "<div class='form'><h3>The url is either invalid or you already have activated your account.</h3>,/div>";
    }
                 
}else{
    // Invalid approach
    echo '<div class="form"><h3>Invalid approach, please use the link that has been send to your email.</h3></div>';
}
           
             
        ?>
        <!-- stop PHP Code -->
 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>