<?php
 include ("page/conn.php");
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 use PHPMailer\PHPMailer\SMTP;

//  echo phpinfo();
//  exit;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

 function sendMail($email, $reset_token)
 {
   
   
   $mail = new PHPMailer();
   //print_r($mail);exit;
  
  //  try 
  //  {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '05omkar.chavan@gmail.com';                     //SMTP username
    $mail->Password   = 'yzoouatdxqfmnsit';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('05omkar.chavan@gmail.com','05omkar.chavan@gmail.com');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password reset link from EPortal';
    $mail->Body    = "We got your request from to reset your password <br>
    click here for reset <br> 
    <a href='http://localhost/omkar/eportal_demo1/updatepassword.php? email=$email & reset_token= $reset_token'> 
    Reset Password </a>";

    $mail->send();
    return true;

  // }
  // catch (Exception $e) 
  // {
  //   // echo '<pre>';
  //   // print_r ($e);
  //   // exit;
  //   return false; 
  // }   
  }

  if(isset($_POST['send-reset-link']))
  {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql="SELECT * FROM `users` WHERE `email`='$email' limit 1";
    $result= mysqli_query($conn, $sql);
    
    if($result)
    {
      if(mysqli_num_rows($result)>0)
      {
        //echo "<script> alert('If working')</script>";
        $reset_token=bin2hex(random_bytes(16));
        date_default_timezone_set('Asia/kolkata');
        $date=date("Y-m-d");
        $sql= "UPDATE `users` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email` ='$email'";
        if(mysqli_query($conn, $sql) && sendMail($email , $reset_token))
        {
            echo "<script> alert('please check Mail first');
            window.location.href='login.php'
            </script>";
        }else
        {
            echo "<script> alert('Server down!');
            window.location.href='login.php'
            </script>";
        }
      }else{
        echo "<script> alert('Email not found');
        window.location.href='login.php'
        </script>";
      }
    }else 
    {
        echo "<script> alert('cannot run query');
        window.location.href='login.php'
        </script>";
    }
 }
?>