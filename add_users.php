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
                            <form name ="addform" class="user" action="saveUsers.php" method="post" 
                                    onsubmit=" return validation()">
                                <div class="form-group">
                                <label for="name">Username:</label>
                                    <input type="text" class="form-control "
                                        id="Username" name="name"placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                <label for="name">Email:</label>
                                    <input type="email" class="form-control "
                                        id="email" aria-describedby="emailHelp"
                                        name="email"placeholder="Enter Email Address..." required>
                                </div>
                                <div class="form-group">
                                <label for="name">status:</label>
                                <select id="status" class="form-control"  name="status" placeholder="status" required>
                                        <option value="">status</option>
                                        <option value ="active">Active</option>
                                        <option value ="deactive">Deactive</option> 
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="pass">User role:</label>
                                <select id="pass" class="form-control" name="role" id="role" required>
                                        <option value="">Select User Role</option>
                                        <option value="support">Support</option>
                                        <option value="developer">Developer</option>
                                        <option value="tester">Tester</option>
                                        <option value="network">Network</option>
                                </select>
                                    </div>
                                    <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" required>
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include ('page/footer.php');?>