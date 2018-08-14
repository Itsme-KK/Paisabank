<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <?php

  require_once("../../init.php");

  session_start();
  $username =  $_SESSION['username'];

  if(!$_SESSION['username']){
      header("location: ../../index.php");
      die;
    }

  $sql = "select * from users where username = '$username'";

  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result)){
    
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $contact = $row['contact'];
    $email = $row['email'];
    $aadhar_no = $row['aadhar_no'];
  }
?>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php"><span class="paisa">Paisa</span> Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<hr>
<div class="title">
  <h2>ABOUT ME</h2>
</div>
<hr>

<div class="container">    
  <div class="row">
    <div class="col-sm-3"></div>

      <div class="col-sm-6"> 
        <table class="table">
          <tr>
            <td><h4>USERNAME : </h4></td>
            <td><h4><?php echo $username;?></h4></td>
          </tr>
          <tr>
            <td><h4>NAME : </h4></td>
            <td><h4><?php echo $firstname." ".$lastname;?></h4></td>
          </tr>
          <tr>
            <td><h4>CONTACT NUMBER : </h4></td>
            <td><h4><?php echo $contact;?></h4></td>
          </tr>
          <tr>
            <td><h4>EMAIL ID : </h4></td>
            <td><h4><?php echo $email;?></h4></td>
          </tr>
          <tr>
            <td><h4>AADHAR NUMBER : </h4></td>
            <td><h4><?php echo $aadhar_no;?></h4></td>
          </tr>
        </table>
      </div>

    <div class="col-sm-3"></div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
   <div class="logo">
    <h2><a href="../index.php"><span class="paisa">Paisa</span> Bank</a></h2>
  </div>
  <p> &copy; Paisa Bank. All Rights Reserved | Design by AKS Team</p> 
</footer>

</body>
</html>
