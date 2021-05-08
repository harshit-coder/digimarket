<?php include ("user_loginquery.php");?>
<?php include ("admin_loginquery.php");?>

<?php include ("connection.php");?>
<?php include ("header.php");?>


<main>
    <section class="section-22 container p-0">

        <div class="row">

            <div class="col-md-6">
                <img class="img-fluid rounded my-4 "
                    src="https://image.freepik.com/free-vector/log-into-several-devices-responsive-app-design-wifi-zone-gadgets-online-communication-social-networking-web-connection-initialize-sign-up-vector-isolated-concept-metaphor-illustration_335657-1999.jpg"
                    alt="">
            </div>

            <div class="col-md-6">
                <!-- Page Content -->
                <div class="container mt-4 ml-3 mr-3">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a style=" background-color:white" class="nav-link active text-black" id="tab-login"
                                data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login"
                                aria-selected="true">User Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a style=" background-color:white;" class="nav-link text-black" id="tab-register"
                                data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register"
                                aria-selected="false">Admin login</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                            aria-labelledby="tab-login">
                            <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">User Login </h3>
                            <form action="user_login.php" method="post">


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" name="user_email" id="user_email" class="form-control"
                                        required />
                                    <label for="user_email" class="form-label">User Email ID</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="user_password" id="user_password" class="form-control"
                                        required />
                                    <label for="user_password" class="form-label">Password</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-dark btn-block mb-4" name="user">Log in</button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Not a member? <a href="index.php">Register</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">

                            <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Admin Login </h3>
                            <form action="user_login.php" method="post">


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" name="admin_name" id="admin_name" class="form-control"
                                        required />
                                    <label for="admin_name" class="form-label">Admin Name</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="admin_password" id="admin_password"
                                        class="form-control" required />
                                    <label for="admin_password" class="form-label">Admin Password</label>
                                </div>


                                <!-- Submit button -->
                                <button type="submit" class="btn btn-dark btn-block mb-4" name="admin">Log in</button>


                            </form>
                        </div>
                    </div>
                    <!-- Pills content -->
                </div>
                <!-- /.container -->
            </div>
        </div>


    </section>


</main>

<?php include ("footer.php");?>