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
            <h2 class="title">User Password Recover</h2>
           	<div class="input-field">
              <i class="fas fa-key"></i>
              <input type="text" placeholder="Email Address" name="email" id="email_address" required autofocus>
            </div>   
            <input type="submit" value="Recover" class="btn solid" name="recover">
          </form>
        </div>
        </div>
            
      <!-- left panel -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Verify Your Account?</h3>
            <p>
                Kindly enter your email address that you used when you signed up<br>
                We will help you recover your password ASAP.
            </p>
          </div>
          
          <a href="signup-login.php"><img src="img.svg" class="image" alt="" /></a>
        </div>
      </div>
  </div>
</body>
</html>