<?php 
include ('conn.php');

header('Content-type: application/vnd-ms-excel');
$filename="user_data.xls";
header("Content-Disposition: attachment;filename=\"$filename\"");

?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>status</th>
                <th>user role</th>
            
            </tr>
         </thead>
    


     <?php 
            //   $sql = "SELECT * FROM `users`"; 
            $sql= "SELECT * FROM `users` ORDER BY `id` DESC";

            $result = mysqli_query($conn, $sql);
            $id = 0;
            while($row = mysqli_fetch_assoc($result)){
                $id = $id + 1;

                if ($row['status'] == 1){
                $status = "Active";
                }else if ($row['status'] == 0){
                $status =  "Deactive";
                }else{ 
                $status = "NA";
                }
                echo "<tr>
                <th scope='row'>". $id . "</th>
                <td>". $row['name'] . "</td>
                <td>". $row['email'] . "</td>
                <td>".$status."</td>
                <td>". $row['role'] . "</td>
                
                </tr>";
            } 
                            
    ?>
    </table>

