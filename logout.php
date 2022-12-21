<?php  

include('common/function.php');

    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();

    // print_r($_SESSION);exit;
    header("location:login.php");
?>