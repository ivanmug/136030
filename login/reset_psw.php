<?php
include('connection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Reset | Avodoc</title>
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
            <h2 class="title">Reset</h2>
           	<div class="input-field">
              <i class="fas fa-key"></i>
              <input type="text" placeholder="New Password" name="password" id="password" required autofocus>
              <i class="bi bi-eye-slash" id="togglePassword"></i>
            </div>   
            <input type="submit" value="Reset" class="btn solid" name="reset">
          </form>
        </div>
        </div>
            
      <!-- left panel -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Reset your Password?</h3>
            <p>
                Dear User, Kindly enter your new password<br>
                We will help you reset your password ASAP.
            </p>
          </div>
         
          <a href="signup-login.php"><img src="img.svg" class="image" alt="" /></a>
        </div>
      </div>
  </div>
</body>
</html>