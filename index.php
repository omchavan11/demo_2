<?php include('page/header.php'); ?>
<?php include('page/conn.php'); ?>

<?php// include('common/function.php');?>
<?php
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location: login.php");
    exit;
}
?>


<?php
    
    if( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        showSuccess();
        // session_destroy();
    }
?>
<?php include('page/footer.php'); ?>
