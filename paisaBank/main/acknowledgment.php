<!DOCTYPE html>
<html lang="en">
<head>
  <title>acknowledgement</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>

  <?php
    session_start();
    if(!$_SESSION['username']){
      header("location: ../index.php");
      die;
    }
  ?>
  
</head>
<body>

<div class="container-fluid text-center">    
  <div class="row content">

    <img src="images/ack.gif" alt="acknowledgement">
    <h2>Payment/Money Transfer Successfull...</h2>
    <h3><a href="index.php">Continue Banking</a></h3>
  
  </div>
</div>
</div>


</body>
</html>