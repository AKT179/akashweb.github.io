<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <button onclick = "window.location.href='https://drive.google.com/file/d/1nryIMYEdYDBC6ouSLlnb16eqYLCPgCjz/view?usp=sharing';">Pushpa</button>
	
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>