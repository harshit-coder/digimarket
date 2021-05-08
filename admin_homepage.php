<?php include ('a_header.php');?>
<?php include ('a_connection.php');?>
<div class="container">
    <section>
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h5 class="text-uppercase text-black text-center">Operations</h5>
                <p>Hello Admin</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fas fa-pencil-alt text-info fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <a href="./a_allcourses.php">
                                    <h3>Courses</h3>
                                    <p class="mb-0">Add courses</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="far fa-comment-alt text-warning fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <a href="user_details.php">
                                    <h3>Users</h3>
                                    <p class="mb-0">User details</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fas fa-chart-line text-success fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <a href="a_bloglist.php">
                                    <h3>Blogs</h3>
                                    <p class="mb-0">Add blogs</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <a href="a_liveprojects.php">
                                    <h3>Live projects</h3>
                                    <p class="mb-0">Add live projects</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?php include ('a_footer.php');?>