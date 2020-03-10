<?php
	include "connection.php";
	$name = $_POST["full-name"];
	$username = $_POST["user-name"];
	$website = $_POST["website"];
	$bio = $_POST["bio"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$gender = $_POST["gender"];

	if ($_POST["full-name"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET name='$name'");
	}
	if ($_POST["user-name"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET username='$username'");
	}
	if ($_POST["website"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET website='$website'");
	}
	if ($_POST["bio"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET bio='$bio'");
	}
	if ($_POST["email"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET email='$email'");
	}
	if ($_POST["phone"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET phone_number='$phone'");
	}
	if ($_POST["gender"]!="") {
	    $query = mysqli_query($connection, "UPDATE profile SET gender='$gender'");
	}

	if ($query) {
		header("location:profile.php");
	} else { 
		header("location:edit-profile.php");
	}
?>