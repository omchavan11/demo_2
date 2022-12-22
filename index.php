<?php include('common/function.php'); ?>
<?php include('page/header.php'); ?>
<?php include('page/conn.php'); ?>

<?php
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        $_SESSION['loginErrorMessage'] = 'Unauthorized';
        
        // $_SESSION['loggedin'] = false;
        echo ' <script> location.replace("login.php"); </script>'; exit;
    }else if( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        showSuccess(); 
    }
?>

<?php include('page/footer.php'); ?>
