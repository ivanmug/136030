<?php
    session_start();
    include('connect/connection.php');

    if(isset($_POST["register"])){
        $username = $_POST["uname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $check_query = mysqli_query($connect, "SELECT * FROM login where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($connect, "INSERT INTO login (username, email, password, status) VALUES ('$username', '$email', '$password_hash', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='ivanmugunga123@gmail.com';
                    $mail->Password='aejokeznxqyvwgpd';
    
                    $mail->setFrom('ivanmugunga123@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
                    
                    $mail->isHTML(true);
                    $mail->Subject="Your verification code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verification OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Avodoc</b>
                    ";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Registration Failed, Invalid Email Error: {$mail->ErrorInfo}"?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Registered Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
            }
        }
    }

    if(isset($_POST["login"])){
        $email = mysqli_real_escape_string($connect, trim($_POST['email']));
        $password = trim($_POST['password']);

        $sql = mysqli_query($connect, "SELECT * FROM login where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["status"] == 0){
                    ?>
                    <script>
                        alert("Please verify email account before login.");
                        window.location.replace('signup-login.php');
                    </script>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    ?>
                    <?php $_SESSION['farmer'] = $fetch['id']; ?>
                    <script>
                        
                        alert("login in successfully");
                        window.location.replace('../index2.php');
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("email or password invalid, please try again.");
                        window.location.replace('signup-login.php');
                    </script>
                    <?php
                }
            }
                
    }

    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               alert("Invalid OTP code");
           </script>
           <?php
        }else{
            mysqli_query($connect, "UPDATE login SET status = 1 WHERE email = '$email'");
            ?>
             <script>
                 alert("Verfiy account done, you may sign in now");
                   window.location.replace("signup-login.php");
             </script>
             <?php
        }

    }


    if(isset($_POST["recover"])){
        include('connect/connection.php');
        $email = $_POST["email"];

        $sql = mysqli_query($connect, "SELECT * FROM login WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
            </script>
            <?php
        }else if($fetch["status"] == 0){
            ?>
               <script>
                   alert("Sorry, your account must verify first, before you recover your password !");
                   window.location.replace("index.php");
               </script>
           <?php
        }else{
            // generate token by binaryhexa 
            $token = rand(100000,999999);

            //session_start ();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            
            $mail->Username='ivanmugunga123@gmail.com';
            $mail->Password='aejokeznxqyvwgpd';

            
            $mail->setFrom('ivanmugunga123@gmail.com', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);
            ;

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://localhost/avodoc/login/reset_psw.php
            <br><br>
            <p>With regards,</p>
            <b>Avodoc</b>";

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo " Invalid Email "?>");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        window.location.replace("notification.php");
                    </script>
                <?php
            }
        }
    }


    if(isset($_POST["reset"])){
        include('connect/connection.php');
        $psw = $_POST["password"];

        $token = $_SESSION['token'];
        $Email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($connect, "SELECT * FROM login WHERE email='$Email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if($Email){
            $new_pass = $hash;
            mysqli_query($connect, "UPDATE login SET password='$new_pass' WHERE email='$Email'");
            ?>
            <script>
                window.location.replace("signup-login.php");
                alert("<?php echo "Your password has been succesful reset"?>");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Please try again"?>");
            </script>
            <?php
        }
    }

?>


