<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Books and Quills - Home</title>
<link rel="stylesheet" href="my.css" />
</head>
<body>
<h1>BOOKS & QUILLS</h1>
<h2>Welcome <?php echo $_SESSION['id']; ?>!</h2>
<br><input name="Add A book" type="Add A book" value="Add A book" /><br>

<a href="logout.php">Logout</a>

</body>
</html>