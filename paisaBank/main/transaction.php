<!DOCTYPE html>
<html>
<head>
	<title>transaction</title>
	<link rel="stylesheet" type="text/css" href="css/style-transactions.css">
	<?php
		session_start();
		require_once("../init.php");
		$username = $_SESSION['username'];

		if(!$_SESSION['username']){
	      header("location: ../index.php");
	      die;
	    }

		$sql = "select * from accounts where username = '$username'";

		$result = mysqli_query($con,$sql);
	    while($row = mysqli_fetch_assoc($result)){
	      
	        $account_no = $row['account_no'];
	    }

		$sql = "select * from accounts natural join transactions where username = '$username' AND from_account = '$account_no' OR to_account = '$account_no'";

		$result = mysqli_query($con,$sql);
	?>

</head>
<body>
	<div class="heading">
		<h1 class="text"><a href="index.php"><span cla ss="paisa">Paisa</span> Bank</a></h1>
	</div>
	<br>
	<hr>
	<br>
<div style="overflow-x:auto;">
	<table class="container">
		<tr>
			<th>Transaction ID</th>
			<th>Amount</th>
			<th>Date and Time</th>
			<th>From Account Number</th>
			<th>To Account Number</th>
		</tr>
		<?php
		    while($row = mysqli_fetch_assoc($result)){
		      
		        echo "<tr><td>" . $row["transaction_id"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["date"] . "</td><td>" . $row["from_account"] . "</td><td>" . $row["to_account"] . "</td></tr>";
		    }
		?>
	</table>
</div>
</body>
</html>