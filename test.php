
<?php
$name = $_POST['name'];
$Email = $_POST['Email'];

   include('page/conn.php');
   
   if($conn->connect_error) 
   {
        die("Failed to connect: " .$conn->connect_error);
   }else{
        $stmt = $conn->prepare("select * from users where name = ? ");
        $stmt->bind_param("s", $name );
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows > 0 ) {
            $data = $stmt_result->fetch_assoc();
            if($data['Email'] === $Email){
                echo"<h2> successfully</h2>";

            }
        }else{
            echo "<h2> invalid</h2>";

        }
   }

?>
