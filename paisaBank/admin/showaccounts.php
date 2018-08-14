<!DOCTYPE html>
<html>
<head>
	<title>transaction</title>
	<link rel="stylesheet" type="text/css" href="css/style-accounts.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
		session_start();
		require_once("../init.php");
		$username = $_POST['username'];

		if(!$_SESSION['username']){
	      header("location: ../index.php");
	      die;
	    }

		$sql = "select * from accounts where username = '$username'";

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
					<th>Account Number</th>
					<th>Balance</th>
					<th>Bank Name</th>
					<th>IFSC Code</th>
					<th>Branch Code</th>
					<th>Card Number</th>
					<th>CVV Code</th>
					<th>Expiry Date</th>
				</tr>
				<?php
				    while($row = mysqli_fetch_assoc($result)){
				        echo "<tr>";
						    echo "<td>".$row['account_no']."</td>";
						    echo "<td>".$row['balance']."</td>";
						    echo "<td>".$row['bankname']."</td>";
						    echo "<td>".$row['ifsc']."</td>";
						    echo "<td>".$row['branchcode']."</td>";
						    echo "<td>".$row['card_no']."</td>";
						    echo "<td>".$row['cvv']."</td>";
						    echo "<td>".$row['month']." - ".$row['year']."</td>";
				    	echo "</tr>";
				    }
				?>
			</table>
		</div>
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