<?php
  $showAlert= false;
  $showerror= false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'page/conn.php';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpass = $_POST["cpass"];
        $exists = false;
        if(($password == $cpass) && $exists == false){
            $sql ="INSERT INTO `users` (`id`, `name`, `email`, `password`)
             VALUES (NULL, '$name', '$email', '$password')";
             $result= mysqli_query($conn,$sql);
             if ($result){
                         $showAlert = true;
             }
                }
                else{
                    $showerror="Password do not matched";
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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <?php 
                        if($showAlert){
                            echo '
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> You are logged in
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';  }
                            if($showerror){
                                echo '
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> '.$showerror.'
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';  }
                        ?>  

                            <div class="p-5">
                                <div class="text-center">
                                     <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div>
                                        <form class="user was-validated " action="" method="POST" name=" novalidate">
                                     <div class="form-group row">
                                        <div class="col-sm-12 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                            placeholder="First Name"required>
                                         </div>
                                         
                                    </div>
                                     <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address"required>
                                 </div>
                                      <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password"  name ="password"placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                                            required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="cpass" name="cpass" placeholder="Repeat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                                            required>
                                    </div>
                                </div>
                               
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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

   

</body>

</html>