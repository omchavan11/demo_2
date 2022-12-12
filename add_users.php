<?php include('page/header.php'); ?>
<?php include('page/conn.php'); ?>


<h1 class="h3 mb-2 text-gray-800">User Add</h1>

        <!-- Outer Row -->
        <div class="row justify-content-center"  >

            <div class="col-xl-12 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-2">
                    <div class="card-body p-0">
                     
                                
                                <div class="p-5"> 
                                    
                                    <div class="text-center">
                                    
                                    </div>
                                    <form class="user" action="saveUsers.php" method="post">
                                        <div class="form-group">
                                        <label for="name">Username:</label>
                                            <input type="text" class="form-control "
                                                id="Username" name="name"placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                        <label for="name">Email:</label>
                                            <input type="email" class="form-control "
                                                id="Email" aria-describedby="emailHelp"
                                                name="Email"placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                        <label for="name">Status:</label>
                                        <select id="status" class="form-control"  name="Status" placeholder="Status">
                                                <option value="status">Status</option>
                                                <option value ="active">Active</option>
                                                <option value ="deactive">Deactive</option> 
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="pass">User role:</label>
                                        <select id="pass" class="form-control" name="role" id="role">
                                               <option value="user role">Select User Role</option>
                                               <option value="support">Support</option>
                                               <option value="developer">Developer</option>
                                               <option value="tester">Tester</option>
                                               <option value="network">Network</option>
                                        </select>
                                            </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                     
                                       
                                    </form>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php include ('page/footer.php');?>