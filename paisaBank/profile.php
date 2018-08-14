<?php

	require_once("init.php");

	session_start();
	$username =  $_SESSION['username'];

	$sql = "select * from users where username = '$username'";

	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result)){
		
		$password = $row['passsword'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$contact = $row['contact'];
		$email = $row['email'];
		$aadhar_no = $row['aadhar_no'];
	}
?>