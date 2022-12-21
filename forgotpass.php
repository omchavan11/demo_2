<?php
 include ("page/conn.php");

//  echo phpinfo();
//  exit;


//  $msg = "First line of text\nSecond line of text";

//  // use wordwrap() if lines are longer than 70 characters
//  $msg = wordwrap($msg,70);
 
//  // send email
//  echo mail("05omkar.chavan@gmail.com","My subject",$msg);
//  exit;
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;


 function sendMail($email, $reset_token)
 {
   include ('PHPMailer/PHPMailer.php');
   include ('PHPMailer/SMTP.php');
   include ('PHPMailer/Exception.php');

   $mail = new PHPMailer(true);
  
   try 
  {
   
    
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '05omkar.chavan@gmail.com';                     //SMTP username
    $mail->Password   = 'shivabhai123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('05omkar.chavan@gmail.com','E_Portal');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password reset link from EPortal';
    $mail->Body    = "We got your request from to reset your password <br>
    click here for reset <br> 
    <a href='http://localhost/omkar/eportal_demo1/updatepassword.php?email=$email&reset_token=$reset_token'> 
    Reset Password </a>";

    $mail->send();
    
    return true;

  }
  catch (Exception $e) 
  {
    echo '<pre>';
    print_r ($e);
    exit;
    return false; 
  }   
  }

  if(isset($_POST['send-reset-link']))
  {
    $sql="SELECT * FROM `users` WHERE `email`='$_POST[email]'";
    $result= mysqli_query($conn, $sql); 
    if($result)
    {
      if(mysqli_num_rows($result)==1)
      {
        $reset_token=bin2hex(random_bytes(16));
        date_default_timezone_set('Asia/kolkata');
        $date=date("Y-m-d");
        $sql= "UPDATE `users` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email` ='$_POST[email]'";
        if(mysqli_query($conn, $sql) && sendMail ($_POST['email'],$reset_token))
        {
            echo "<script> alert('please check Mail');
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