<?php

    include('../db.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $pwdEncrypt = password_hash($password, PASSWORD_DEFAULT);
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar!");window.history.back()</script>';
    }else if ($confirmPassword != $password){
        echo '<script>alert("Confirm Password tidak sama!");window.history.back()</script>';
    }else {
        $sql = "INSERT INTO users(email, password, verif_code) VALUES ('$email', '$pwdEncrypt', '$code')";
        $query = mysqli_query($con,$sql);

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->Username = 'ourtrip.service@gmail.com';
        $mail->Password = 'Password@test';
        $mail->setFrom('no-reply@ourtrip.xyz', 'OurTrip Service');
        $mail->addAddress($email);
        $mail->Subject = 'Verification Account - OurTrip.xyz';
        $body = "Hi, ".$email."<br>Please verif your email before access our website : <br>https://ourtrip.xyz/process/verifikasi.php?code=".$code;
        $mail->Body = $body;
        $mail->AltBody = "Verification Account";

        
        if(!$mail->send()){
            echo
                'Mailer Error: '. $mail->ErrorInfo;
        }else{
            echo
                '<script>
                alert("Email has been sent. Verify your account!");
                window.location = "../page/index.php"
                </script>';
        }
    }
        
?>