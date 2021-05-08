<?php include ("user_updatequery.php");?>
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
                                <h3 class="font-weight-bold text-center text-uppercase text-white my-4">Update
                                </h3>
                                <?php
                                
                                if (isset($_SESSION['user_id']) && ($_SESSION['userlogin'] == true))

                                {
                                    $id1 = $_SESSION['user_id'];
                                    $sql1 = "SELECT * FROM users where user_id='$id1'";
                                    $result1 =  mysqli_query($conn, $sql1);
                                    while($row1 = mysqli_fetch_assoc($result1))
                                    {
                                        $user_name = $row1['user_name'];
                                        $user_email = $row1['user_email'];
                                        $user_password = $row1['user_password'];

                                        echo'<form class="pb-5 px-2" action="user_update.php" method="post">
                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <i class="far fa-user fa-lg text-white fa-fw me-3"></i>
                                        <div class="form-outline form-white w-100">
                                            <input  value="' . $user_name  . '" type="text" name="user_name" id="user_name" class="form-control" required />
                                            <label class="form-label" for="user_name">User Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <i class="far fa-envelope fa-lg text-white fa-fw me-3"></i>
                                        <div class="form-outline form-white w-100">
                                            <input  value="' . $user_email .'"  type="text" name="user_email" id="user_email" class="form-control" required/>
                                            <label class="form-label" for="user_email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center pb-3">
                                        <i class="far fa-star fa-lg text-white fa-fw me-3"></i>
                                        <div class="form-outline form-white w-100">
                                            <input value="'. $user_password .'"  type="text" name="user_password" id="user_password"
                                                class="form-control" required />
                                            <label class="form-label" for="user_password">Password</label>

                                        </div>
                                    </div>
                                    <button
                                        class="text-white btn btn-outline-danger btn-rounded btn-block my-4 z-depth-0"
                                        type="submit">Update</button>
                                </form>';
                            }
                        }

                    ?>

                            </div>

                        </div>

                    </section>
                </div>

            </div>
        </div>


    </section>



</main>

<?php include ("footer.php");?>