<?php 
	session_start();
	include 'connection.php';

	$username = $_GET['username'];
	$password = $_GET['password'];

	$data = mysqli_query($connection,"select * from user where username='$username' and password='$password'");

	$check = mysqli_num_rows($data);

	if($check > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:feed.php");
	} else {
		header("location:index.php?message=failed");
	}
?>