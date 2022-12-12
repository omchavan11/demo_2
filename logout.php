<?php  //include('common/function.php'); ?>

<?php
            session_start();
        
            session_destroy();
            session_unset();
            header("location: login.php");
            exit;

//             if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//                 $_SESSION['loggedin'] = false;
//                // $_SESSION['loginmessage'] = 'Unauthorized';
//                 logout();
//                 session_unset();
//                 session_destroy();
//                 header("location: login.php");
//                 exit;
//             }    
  
// ?>
<?php
// session_start();
// session_unset();
// // unset($_SESSION["id"]);
// // unset($_SESSION["name"]);
// header("Location:login.php");
?>