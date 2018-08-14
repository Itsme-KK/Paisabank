<?php

	require_once("init.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$aadhar_no = $_POST['aadhar_no'];

    $sql = "insert into users (username,password,firstname,lastname,contact,email,aadhar_no) values ('$username','$password','$firstname','$lastname','$contact','$email','$aadhar_no')";

    $result = mysqli_query($con, $sql);

    if(!$result){
    	echo "Error:".mysqli_error($con);
    }else{
    	$_SESSION['username'] = $username;
    	header("location: index.php");
    }
?>