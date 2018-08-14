<!DOCTYPE html>
<html>
<head>
	<title>transaction</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
		session_start();
		require_once("../init.php");
		$username = $_SESSION['username'];

		if(!$_SESSION['username']){
	      header("location: ../index.php");
	      die;
	    }

		$sql = "select * from users";

		$result = mysqli_query($con,$sql);
	?>

	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();   
		});
	</script>

</head>
<body>
	<div class="heading">
		<h1 class="text"><span class="paisa">Paisa</span> Bank<a href="logout.php" style="color: black"><span class="glyphicon glyphicon-log-out"></span></a></h1>
	</div>
	<hr>
		
	<div class="container">	
		<div style="overflow-x:auto;">
			<table>
				<tr>
					<th>USERNAME</th>
					<th>NAME</th>
					<th>CONTACT</th>
					<th>EMAIL ID</th>
					<th>AADHAR NUMBER</th>
				</tr>
				<?php
				    while($row = mysqli_fetch_assoc($result)){
				      	echo "<tr>";
						    echo "<td>".$row['username']."</td>";
						    echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
						    echo "<td>".$row['contact']."</td>";
						    echo "<td>".$row['email']."</td>";
						    echo "<td>".$row['aadhar_no']."</td>";
				    	echo "</tr>";
				    }
				?>
			</table>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6">
				<form action="showaccounts.php" method="post">
					<h4>Search Users Accounts Details...</h4>
					<label>Enter User's Username : </label>
					<input type="text" name="username" required class="form-control" placeholder="Enter UserName" style="width: 50%"><br>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</div>
			<div class="col-sm-6">
				<form action="showtransactions.php" method="post">
					<h4>Search Users Transactions Details...</h4>
					<label>Enter User's Username : </label>
					<input type="text" name="username" required class="form-control" placeholder="Enter UserName" style="width: 50%"><br>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>