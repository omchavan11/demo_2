

<?php include('page/header.php'); ?>
<?php include('page/conn.php');  ?>
<?php include ('saveUsers.php'); ?> 

<?php
//session_start();
?>
<!-- edit body -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="user" action="tables.php" method="post">
        <input type="hidden" name="snoEdit" id="snoEdit">

                                        <div class="form-group">
                                        <label for="name">Username:</label>
                                            <input type="text" class="form-control "
                                                id="nameEdit" 
                                                name="nameEdit"placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                        <label for="name">Email:</label>
                                            <input type="email" class="form-control "
                                                id="EmailEdit" aria-describedby="emailHelp"
                                                name="EmailEdit"placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                        <label for="name">Status:</label>
                                        <select id="StatusEdit" class="form-control"  name="StatusEdit" placeholder="Status">
                                                <option value="status">Status</option>
                                                <option value ="active">Active</option>
                                                <option value ="deactive">Deactive</option> 
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="pass">User role:</label>
                                        <select id="roleEdit" class="form-control" name="roleEdit" id="roleEdit">
                                               <option value="user role">Select User Role</option>
                                               <option value="support">Support</option>
                                               <option value="developer">Developer</option>
                                               <option value="tester">Tester</option>
                                               <option value="network">Network</option>
                                        </select>
                                            </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Users</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Additional data for users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>status</th>
                                            <th>user role</th>
                                            <th>Modify</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SNo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>status</th>
                                            <th>user role</th>
                                            <th>Modify</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php 
        //   $sql = "SELECT * FROM `users`"; 
          $sql= "SELECT * FROM `users` ORDER BY `sno` DESC";
 // $sql= "INSERT INTO `users` (`sno`, `name`, `Email`, `Status`, `role`) VALUES ( NULL, 'nikhil', ' nikhil@gmail.com', 'Active', 'Tester')";

          $result = mysqli_query($conn, $sql);
          $sno = 0;
       
          while($row = mysqli_fetch_assoc($result)){
             $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['Email'] . "</td>
            <td>". $row['Status'] . "</td>
            <td>". $row['role'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> 
            <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>
            
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        Email = tr.getElementsByTagName("td")[1].innerText;
        Status = tr.getElementsByTagName("td")[2].innerText;
        role = tr.getElementsByTagName("td")[3].innerText;
        console.log(name, Email,Status,role);
        nameEdit.value = name;
        EmailEdit.value = Email;
        StatusEdit.value = Status;
        roleEdit.value = role;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
        //   window.location = `tables.php?delete= ${sno}`;
          window.location = `tables.php?delete=${sno}`;
        //  window.location = `tables.php`;


          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>

</body>

</html>