<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: welcome.php");
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM newusers WHERE email='$email' AND userpassword='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        echo 'Login success';
		//$_SESSION['email'] = $row['email'];
		header("Location: dashboard.php");
	} 
    else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}



?>

