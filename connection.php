<?php 
	$connection = mysqli_connect("localhost","root","","test");
	 
	if (mysqli_connect_errno()) {
		echo "connection Failed : " . mysqli_connect_error();
	}
?>