<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style-about.css">

  <?php
    session_start();
    if(!$_SESSION['username']){
      header("location: ../index.php");
      die;
    }
  ?>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><span class="paisa">Paisa</span> Bank</a>
    </div>
  </div>
</nav>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">About Us</h3>
  <p>Paisa Bank was Founded in the Year 2002 By "AKS Team", When people did not knew about NetBanking, Paisa Bank was the only bank who used to have Online Banking Services , Awarded as the NetBanking System .</p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Us?</h3><br>

  <div>
    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJL6NVMubI5zsRFW-eZPRJabM&key=AIzaSyDAcgikWASCZzv--pT2hJ2IvZjAuH7PxBU" allowfullscreen></iframe> 
  </div>
  <hr>
  <h2 class="text-center">OUR TEAM</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <div class="container">
        <img src="images/khalid.jpg" alt="khalid khan" class="image">
        <div class="overlay">
          <div class="text">khalid khan</div>
          <div class="text1">CEO, Chair Person, Founder</div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="container">
        <img src="images/arsh.png" alt="Arsh Dange" class="image">
        <div class="overlay">
          <div class="text">Arsh Dange</div>
          <div class="text1">COO, Chair person</div>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="container">
        <img src="images/sushil.jpg" alt="Sushil Yadav" class="image">
        <div class="overlay">
          <div class="text">Sushil Yadav</div>
          <div class="text1">CFO, Chief product Officer</div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-4">
      <i class="fa fa-home" style="font-size: 50px; color: skyblue;"></i>
      <h3>Visit Us</h3>
      <p>Head Quarter: The Capital,BKC,Mumbai Paisa Bank Plaza, Noida</p>
    </div>
    <div class="col-sm-4">
    <i class="fa fa-envelope-o" style="font-size: 50px; color: skyblue;"></i> 
      <h3>Mail Us</h3>
      <p><a href="mailto:info@example.com">paisabank@gmail.com</a></p>
    </div>
    <div class="col-sm-4">
    <i class="fa fa-phone" style="font-size: 50px; color: skyblue;"></i> 
      <h3>Call us</h3>
      <p>+91-9769588064</p> 
      <p>+91-6888688688</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">

  <div class="logo">
    <h2><a href="index.php"><span class="paisa">Paisa</span> Bank</a></h2>
    
    <span class="fa-stack">
      <a href="https://www.facebook.com/profile.php?id=100004645659545"><i class="fa fa-facebook fa-stack-1x"></i></a>
  </span>
  <span class="fa-stack">
      <a href="https://plus.google.com/+khalidkhan28"><i class="fa fa-google-plus fa-stack-1x"></i></a>
  </span>
  <span class="fa-stack">
      <a href="https://github.com/ksameerk28"><i class="fa fa-github fa-stack-1x"></i></a>
  </span>
  <span class="fa-stack">
      <a href="https://www.instagram.com/khalidkhan28/"><i class="fa fa-instagram fa-stack-1x"></i></a>
  </span>
  <span class="fa-stack">
      <a href="https://www.linkedin.com/in/khalid-khan-a166b1139/"><i class="fa fa-linkedin fa-stack-1x"></i></a>
  </span>
  <span class="fa-stack">
      <a href="https://twitter.com/Khalid_khan26"><i class="fa fa-twitter fa-stack-1x"></i></a>
  </span>

  </div>
  <div class="copyright">
    <p> &copy; Paisa Bank. All Rights Reserved | Design by <a href="#">AKS Team</a></p>
  </div> 
</footer>

</body>
</html>