<?php include ("register_query.php");?>
<?php include ("header.php");?>
<?php include ("connection.php");?>



<main style="background-color: cadetblue;">

    <section class="section-22 container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <section class="mx-auto my-5">

                        <div class="card card-form mt-2 mb-4">
                            <div class="card-body rounded-top pink darken-4">
                                <h3 class="font-weight-bold text-center text-uppercase text-white my-4">Register
                                </h3>
                                <form class="pb-5 px-2" action="register.php" method="post">
                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <i class="far fa-user fa-lg text-white fa-fw me-3"></i>
                                        <div class="form-outline form-white w-100">
                                            <input type="text" name="user_name" id="user_name" class="form-control"
                                                required />
                                            <label class="form-label" for="user_name">User Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <i class="far fa-envelope fa-lg text-white fa-fw me-3"></i>
                                        <div class="form-outline form-white w-100">
                                            <input type="text" name="user_email" id="user_email" class="form-control"
                                                required />
                                            <label class="form-label" for="user_email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center pb-3">
                                        <i class="far fa-star fa-lg text-white fa-fw me-3"></i>
                                        <div class="form-outline form-white w-100">
                                            <input type="password" name="user_password" id="user_password"
                                                class="form-control" required />
                                            <label class="form-label" for="user_password">Password</label>

                                        </div>
                                    </div>
                                    <button
                                        class="text-white btn btn-outline-danger btn-rounded btn-block my-4 z-depth-0"
                                        type="submit">Sign in</button>
                                </form>

                            </div>

                        </div>

                    </section>
                </div>

            </div>
        </div>


    </section>



</main>

<?php include ("footer.php");?>