<?php
	
	require_once("../init.php");
	session_start();
	$username =  $_SESSION['username'];

	$from_account = $_POST['account_no'];
	$amount = $_POST['amount'];
	$to_account = $_POST['receiver'];

	$sql = "select * from accounts where username = '$username'";

	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result)){
		
		$balance = $row['balance'];
	};

	if($balance > $amount){

		$balance = $balance - $amount;

		$sql1 = "update accounts set balance = '$balance' where username = '$username'";

		$sql = "insert into transactions (amount,date,from_account,to_account) values('$amount',now(),'$from_account','$to_account')";

		$result1 = mysqli_query($con, $sql1);

		$result = mysqli_query($con, $sql);

	    if($result && $result1){
	    	header("location: acknowledgment.php");
	    } else{
	    	echo "Error:".mysqli_error($con);
	    }
	} else{
		$error = "Amount Should Be Greater Than Your Account Balance...";
		header("location: money-transfer.php");
	}
?>