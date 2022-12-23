<?php include ('conn.php'); 
 
     $data = " 
    <table  border='1'>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>status</th>
                <th>user role</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>status</th>
                <th>user role</th>
                </tr>
        </tfoot>
        <tbody>";

      
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
                $data.= "<tr>
                <th scope='row'>". $id . "</th>
                <td>". $row['name'] . "</td>
                <td>". $row['email'] . "</td>
                <td>".$status."</td>
                <td>". $row['role'] . "</td>
                </tr>";
            } 
             $data.="</table>";

       $name="Epoertal - ".date("d-m-Y");
       header("Content-Type: application/vnd.ms-excel");
       header("Content-disposition : attachment; filename=$name.xls");

       echo $data;
?>

