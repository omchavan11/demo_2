

<?php include ('page/conn.php');?>
<?php  //include ('log.php');?>


<?php
$login = false;
$showError = false;
include('common/function.php');
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] == 'POST'){
   // if (isset( $_POST['name'])){
        include 'page/conn.php';
       
          $name = $_POST ["name"];
          $password = $_POST["password"];
          
          $sql= "SELECT * FROM users WHERE name ='$name' AND password ='$password'";
          
            $result= mysqli_query($conn,$sql);
            $num= mysqli_num_rows($result);
             if ($num == 1) 
             {
                        $login = true;
                        $_SESSION['loggedin'] = true;
                        $_SESSION['successMessage'] = 'Login successfull';
                        $_SESSION['name']= $name;
                        $_SESSION['password']= $password;
                        header("Location: index.php");
                }
                else{
                    $_SESSION['loggedin'] = false;
                    $_SESSION['loginErrorMessage'] = 'Invalid credentials';
                }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E_portal</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

    
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <!-- // <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <?php
                                    // print_r($_SESSION);exit;
                                    if( isset($_SESSION['loginErrorMessage']) ){
                                        showError();
                                        session_destroy();
                                    }
                                ?>
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user  was-validated" action="" method="POST"  novalidate>
                                        <div class="form-group">
                                            <input type="name" class="form-control form-control-user"
                                                id="name" name="name" 
                                                placeholder="Enter name..." required>
                                             </div>
                                             <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="password" required>
                                                
                                             </div>
                                             <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" required>
                                                    <label class="custom-control-label" for="customCheck" >Remember
                                                    Me</label>
                                                </div>
                                             </div>
                                                <!-- <a href="index.php" class="btn btn-primary btn-user btn-block"> 
                                                Login
                                                 </a> -->
                                            <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script> 
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
<?php //session_destroy(); ?>
</body>
</html>