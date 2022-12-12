<?php include('page/header.php'); ?>
<?php include('page/conn.php'); ?>
<?php
//session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   // header("location: login.php");
    exit;
}


// $login = false;
// $showError = false;
// if($_SERVER["REQUEST_METHOD"] == 'POST'){
//    // if (isset( $_POST['name'])){
//         include 'page/conn.php';
       
//           $name = $_POST ["name"];
//           $Email = $_POST["Email"];
          

//           $sql= "SELECT * FROM users WHERE name ='$name' AND Email ='$Email'";
//             //$sql = "Select * from users where name='$name'";
//             $result= mysqli_query($conn , $sql);
//             $num= mysqli_num_rows($result);
//              if ($num == 1)
//     {
//         while($row=mysqli_fetch_assoc($result)){
//             if (password_verify($Email, $row['Email'])){ 
//             $login = true;
//             session_start();
//             $_SESSION['loggedin']= true;
//             $_SESSION['name']= $name;
//            // $_SESSION['Email']= $Email;
//            header("Location: .php");
    
//     }
//     else{
//     $showError="Invalid";
//     }
//     }
// } 
//     else{
//         $showError = "Invalid Credentials";
//     }
// }
?>
<?php include('page/footer.php'); ?>
