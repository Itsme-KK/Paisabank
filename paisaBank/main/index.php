<!DOCTYPE html>
<html lang="en">
<head>
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
      $bankname = $row['bankname'];
      $ifsc = $row['ifsc'];
      $branchcode = $row['branchcode'];
  }
  ?>
  <title>paisa bank</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style-index.css">

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php"><span class="paisa">Paisa</span> Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile/index.php"><span class="glyphicon glyphicons-user"></span><?php echo $username ?></a></li> 
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>ONLINE TRANSACTIONS</h3>
          <p>Secure Transactions with secure payment methods...</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>FAST FREE ONLINE SERVICES</h3>
          <p>Access from anywhere in the globe...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What You Can Do</h3><br>
  <div class="row">
    <a href="money-transfer.php">
      <div class="col-sm-4">
        <img src="images/4.png" class="img-responsive" style="width:100%" alt="Image">
      <h4>Transfer Money</h4>
    </div>
    </a>
    <a href="debit.php">
      <div class="col-sm-4"> 
        <img src="images/3.png" class="img-responsive" style="width:100%" alt="Image">
      <h4>Debit Money</h4>    
    </div>
    </a>
    
    <div class="col-sm-4">
      <div class="well" style="background-color: #76d7c4">
       <h4>Safe And Secure Service.</h4>
      </div>
      <div class="well" style="background-color: #f7dc6f">
       <h4>Fast Transactions.</h4>
      </div>
      <div class="well" style="background-color: #f39c12">
       <h4>Reliable and Easy to Use.</h4>
      </div>
      <div class="well" style="background-color: #bdc3c7">
       <h4>Can be Access Glbaly.</h4>
      </div>
    </div>
  </div>
</div><br>

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