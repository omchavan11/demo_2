
<?php include('page/conn.php'); ?>

<?php

  //session_start();

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    // $delete = true;
    // $sql = "DELETE FROM `users` WHERE `id` = $id";
    $sql = "DELETE FROM `users` WHERE`id` = $id";
    $result = mysqli_query($conn, $sql);
    $_SESSION['deleteUser'] = "Data delete Successfully";
    // header("Location: tables.php");

  } 

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if (isset( $_POST['idEdit'])){
      // Update the record
      $id    = $_POST["idEdit"];
      $name   = $_POST["nameEdit"];
      $email  = $_POST["emailEdit"];
      //$status = $_POST["statusEdit"];
      if (strtolower($_POST["statusEdit"]) == "active"){
        $status = 1;
      } else{
        $status = 0;

      }
      $role   = $_POST["roleEdit"];
    
      // Sql query to be executed
      //   $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`id` = $id";

      $sql= "UPDATE `users` SET `name` = '$name', `email` = '$email ', `status` = '$status', `role` = '$role' WHERE `users`.`id` = $id";
      $result = mysqli_query($conn, $sql);

      if($result){
        // $update = true;
        $_SESSION['updateUser'] = "Data update Successfully";
        //header("Location: tables.php");
      
        // $_SESSION['update'] =true;
      }
    } else {
      $name = $_POST["name"];
      $email = $_POST["email"];       
      $role = $_POST["role"];
      if (strtolower($_POST["status"]) == "active"){
        $status = 1;
      } else{
        $status = 0;

      }
      if($name !="" && $email !="" && $role !="" && $status !="")
      {
      // Sql query to be executed
      $sql= "INSERT INTO `users` (`id`, `name`, `email`, `status`, `role`) VALUES ( NULL, '$name', ' $email', '$status', '$role')";

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
    else{
          echo "<script> alert('fill the form');</script>";  
     }
  }
}
?>