<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Accoount Info</title>
  
  <link rel="stylesheet" href="css/cloudflare,css">
  <link rel='stylesheet prefetch' href='css/bootstrapcdn.css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <?php
        session_start();
        if(!$_SESSION['username']){
          header("location: ../../index.php");
          die;
        }
        $username = $_SESSION['username'];
      ?>
  
</head>

<body>
  
<div class="container">
  <form action="account_details.php" method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" required placeholder="Account Number" name="account_no" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" required placeholder="Balance..." name="balance" />
        <div class="input-icon"><i class="fa fa-money"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" required placeholder="Bank Name" name="bankname" />
        <div class="input-icon"><i class="fa fa-code"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Enter IFSC" name="ifsc" required/>
        <div class="input-icon"><i class="fa fa-money"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" required placeholder="Bankranch code" name="branchcode" />
        <div class="input-icon"><i class="fa fa-code"></i></div>
      </div>
    </div>
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group input-group-icon">
        <input type="text" required placeholder="Card Number" name="card_no" />
        <div class="input-icon"><i class="fa fa-credit-card"></i></div>
      </div>
      <div class="col-half">
        <div class="input-group input-group-icon">
          <input type="text" required placeholder="Card CVC" name="cvv" />
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
      </div>
      <div class="col-half">
        <div class="input-group">
          <select name="month" required>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <select name="year" required>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" required id="terms" required/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <div class="row">
    	<div class="input-group">
    		<BUTTON><h4>Submit</h4></BUTTON>
    	</div>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
