<?php
include('connection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Verify | Avodoc</title>
    <!-- Social media CDN -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="style-verification.css">
    <link rel="icon" href="../images/logo3.png" type="image/gif" />
  </head>
  <style>
  </style>

<body>
    <!-- Recover password -->
    <div class="container">
      <div class="forms-container">
        <div class="reset-password">
          <form action="connection.php" class="sign-in-form" method="POST">
            <h2 class="title">Verify Account</h2>
           	<div class="input-field">
              <i class="fas fa-key"></i>
              <input type="text" placeholder="OTP code" name="otp_code" id="code">
            </div>   
            <input type="submit" value="Verify" class="btn solid" name="verify">
          </form>
        </div>
        </div>
            
      <!-- left panel -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Verify Your Account?</h3>
            <p>
                Dear User, Kindly fill up your OTP code that you received by email<br>
                We will help you to verify your account ASAP.
            </p>
          </div>
          <img src="img.svg" class="image" alt="" />
        </div>
      </div>
  </div>
</body>
</html>