
<?php

session_start();

function showError()
{
    $loginErrorMessage  = $_SESSION['loginErrorMessage'];

    if($_SESSION['loggedin'] == false){

        echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> '. $loginErrorMessage.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'; 
    }
    
}


function showSuccess()
{
    $successMessage  = $_SESSION['successMessage'];

    if($_SESSION['loggedin'] == true && $successMessage !=''){

        echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> '. $successMessage.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'; 

    $_SESSION['successMessage'] = '';
    }
    
}
        
function logout()
{
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   // session_start();

    session_distroy();
    header("Location:login.php");
    }
}




?>