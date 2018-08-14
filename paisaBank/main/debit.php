<!DOCTYPE html>
<html lang="en">
<head>
  <title>Service</title>
  <?php
    require_once("../init.php");

    session_start();

    if(!$_SESSION['username']){
      header("location: ../index.php");
      die;
    }
    
    $username =  $_SESSION['username'];
    $sql = "select * from accounts where username = '$username'";

    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
    
      $account_no = $row['account_no'];
      $balance = $row['balance'];
      $bankname = $row['bankname'];
      $ifsc = $row['ifsc'];
      $branchcode = $row['branchcode'];
      $card_no = $row['card_no'];
      $cvv = $row['cvv'];
      $month = $row['month'];
      $year = $row['year'];
  }

  $sql1 = "select * from users where username = '$username'";
  $result1 = mysqli_query($con,$sql1);
    while($row = mysqli_fetch_assoc($result1)){
    
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
    }
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style-debit.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <a href="index.php"><h4><span class="paisa">Paisa</span> Bank</h4></a>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="active"><a href="transaction.php">Check Your Transactions</a></li>
        <li><h5>Account Holder's Name : </h5>
          <h4><?php echo "$lastname ". "$firstname";?></h4>
        </li>
        <li><h5>Account Number : </h5>
          <h4><?php echo "$account_no"; ?></h4>
        </li>
        <li><h5>Balance : </h5>
          <h4><?php echo "$balance"; ?></h4>
        </li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <div class="heading"  >
        <h1><span class="paisa">Paisa</span> Bank</h1>
      <h4>Safe, Secure And Reliable Way To Online Banking...</h4>
      <hr>
      <hr>
      <div class="container-fluid">
        <form action="transferring.php" method="post">
          <div class="row">
            <div class="col-sm-3">
              <label>Enter Your Account Number : </label>
            </div>
            <div class="col-sm-6">
               <input type="text" required name="account_no" placeholder="Enter Account Number">
              <br>
              <h4>If Not Have Any <a href="card_details/index.php"> Add One</a></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <label>Amount To Debit : </label>
            </div>
            <div class="col-sm-6">
              <input type="text" required name="amount" placeholder="Enter Amount">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <label>Receiver : </label>
            </div>
            <div class="col-sm-6">
              <input type="text" required name="receiver" placeholder="name of the Receiver">
            </div>
          </div>
          <hr>
          <input type="submit" value="PAY">
        </form>
      </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <div class="logo"><h2><a href="index.php"><span class="paisa">Paisa</span> Bank</a></h2></div>
  <div class="copyright">
    <p> &copy; Paisa Bank. All Rights Reserved | Design by <a href="#">AKS Team</a></p>
  </div>
</footer>

</body>
</html>