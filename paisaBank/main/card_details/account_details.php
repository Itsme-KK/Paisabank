<?php
	require_once("../../init.php");

    session_start();

	$account_no = $_POST['account_no'];
	$username =  $_SESSION['username'];
	$balance = $_POST['balance'];
	$bankname = $_POST['bankname'];
	$ifsc = $_POST['ifsc'];
	$branchcode = $_POST['branchcode'];
	$card_no = $_POST['card_no'];
	$cvv = $_POST['cvv'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$sql = "insert into accounts (account_no,username,balance,bankname,ifsc,branchcode,card_no,cvv,month,year) values('$account_no','$username','$balance','$bankname','$ifsc','$branchcode','$card_no','$cvv','$month','$year')";

	$result = mysqli_query($con, $sql);

    if(!$result){
    	echo "Error:".mysqli_error($con);
    }else{
    	header("location: ../index.php");
    }
?>