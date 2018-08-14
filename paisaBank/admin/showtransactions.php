<!DOCTYPE html>
<html>
<head>
	<title>Transactions</title>
	<link rel="stylesheet" type="text/css" href="css/style-accounts.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php
		require_once("../init.php");
		session_start();
		if(!$_SESSION['username']){
	      header("location: ../index.php");
	      die;
	    }
		$username = $_POST['username'];

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
		<h1 class="text"><a href="index.php"><span class="paisa">Paisa</span> Bank</a></h1>
	</div>
	<hr>
	<div class="container">
		<div style="overflow-x:auto;">
			<table>
				<tr>
				<th>Transaction ID</th>
				<th>Amount</th>
				<th>Date and Time</th>
				<th>From Account Number</th>
				<th>To Account Number</th>
			</tr>
			<?php
			    while($row = mysqli_fetch_assoc($result)){
			    	echo "<tr>";
					    echo "<td>".$row['transaction_id']."</td>";
					    echo "<td>".$row['amount']."</td>";
					    echo "<td>".$row['date']."</td>";
					    echo "<td>".$row['from_account']."</td>";
					    echo "<td>".$row['to_account']."</td>";
			    	echo "</tr>";
			    }
			?>
			</table>
		</div>
	</div>
	<footer class="container-fluid text-center">
  <div class="logo">
    <h2><a href="index.php"><span class="paisa">Paisa</span> Bank</a></h2>
  </div>
  <div class="copyright">
    <p> &copy; Paisa Bank. All Rights Reserved | Design by <a href="#">AKS Team</a></p>
  </div>
</footer>
</body>
</html>