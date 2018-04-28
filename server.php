<?php
session_start();

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect("localhost", "root", "","example");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Register Logik
if (isset($_GET['subreg'])) {
	// gesendete Daten von register.php mit GET
    $username = $_GET['username'];
    $password = $_GET['password'];
    $password2 = $_GET['password2'];

    $checkuser = "select count(*) from user where username='$username'";

    $query = mysqli_query($checkuser);

    $existquery =  mysqli_fetch_assoc($query);

    if($existquery==1){
    	echo "already exist";
    	header("Location: registration.php");
    }else if ($password!=$password2){
    	echo "Passwords do not match.";
    	header("Location: registration.php");
    }else {
    	$adduser = "insert into user values('$username','$password')";
    	$query = mysqli_query($conn,$adduser);
    	header("Location: login.php");
    }
}

//----------------log in---------------------
if (isset($_GET['sublogin'])) {

		$username = $_GET["username"];

		$pass = mysqli_query($conn,"select password from user where username ='$username'");

		$pass = mysqli_fetch_assoc($pass);

		if($_GET["password"]==$pass["password"]){
			echo "Hello $username";
		}else{
			header("Location: login.php");
			echo "Again!";
		}
}
?>
