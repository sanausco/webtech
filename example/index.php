<?php 
		include("connection.php");
   		session_start();
		
		
		$username = $_GET["username"];

		$pass = mysqli_query($conn,"select password from user where username ='$username'");

		$pass = mysqli_fetch_assoc($pass);

		echo $pass["password"];

		if($_GET["password"]==$pass["password"]){
			echo "OKAY";
		}else{
			echo "KACKE";
		}

	?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form class="formular" action="index.php" method="get">
			<input type="text" name="username" placeholder="Username">
			<input type="text" name="password" placeholder="Password">
			<input type="submit" name="submit" value="Log In">
		</form>
	</div>
</body>
</html>