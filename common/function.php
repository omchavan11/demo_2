
<?php
session_start();

function showError()
{
    $loginErrorMessage  = $_SESSION['loginErrorMessage'];

    if(empty($_SESSION['loggedin'])){

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
    // print_r($_SESSION);exit;
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
        
  

?>