<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="formular" action="server.php" method="get">
		<input type="text" name="username" placeholder="Username" required>
		<input type="text" name="password" placeholder="Password" required>
		<input type="text" name="password2" placeholder="Password" required>
		<input type="submit" name="subreg" value="Register">
	</form>
</body>
</html>