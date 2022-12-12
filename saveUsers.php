
<?php include('page/conn.php'); ?>

<?php

  //session_start();

  if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    // $delete = true;
    // $sql = "DELETE FROM `users` WHERE `sno` = $sno";
    $sql = "DELETE FROM `users` WHERE`sno` = $sno";
    $result = mysqli_query($conn, $sql);
    $_SESSION['deleteUser'] = "Data delete Successfully";
    // header("Location: tables.php");

  } 

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if (isset( $_POST['snoEdit'])){
      // Update the record
      $sno    = $_POST["snoEdit"];
      $name   = $_POST["nameEdit"];
      $Email  = $_POST["EmailEdit"];
      $Status = $_POST["StatusEdit"];
      $role   = $_POST["roleEdit"];
    
      // Sql query to be executed
      //   $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";

      $sql= "UPDATE `users` SET `name` = '$name', `Email` = '$Email ', `Status` = '$Status', `role` = '$role' WHERE `users`.`sno` = $sno;";
      $result = mysqli_query($conn, $sql);

      if($result){
        // $update = true;
        $_SESSION['updateUser'] = "Data update Successfully";
        //header("Location: tables.php");
      
        // $_SESSION['update'] =true;
      }
    } else {
      $name = $_POST["name"];
      $Email = $_POST["Email"]; 
      $Status = $_POST["Status"];
      $role = $_POST["role"];

      // Sql query to be executed
      $sql= "INSERT INTO `users` (`sno`, `name`, `Email`, `Status`, `role`) VALUES ( NULL, '$name', ' $Email', '$Status', '$role')";

      $result = mysqli_query($conn, $sql);
      if($result){ 
        // $insert = true;
        $_SESSION['storeUser'] = "Data insert Successfully";
        header("Location: tables.php");

      }
      else{
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      }
    }
}
?>