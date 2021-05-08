<?php include ("header.php");?>
<?php include ("connection.php");?>

<div class="container my-4">
    <section>
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h5 class="text-uppercase">your Details</h5>
                <p>Click update if you want to update your details</p>
            </div>
        </div>
        <div class="row">
            <?php
                                
            if (isset($_SESSION['user_id']) && ($_SESSION['userlogin'] == true))

            {
                $id1 = $_SESSION['user_id'];
                $sql1 = "SELECT * FROM users where user_id=$id1";
                $result1 =  mysqli_query($conn, $sql1);
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $user_name = $row1['user_name'];
                    $user_email = $row1['user_email'];
                    $user_password = $row1['user_password'];
                    echo'  <div class="col-xl-6 col-md-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between p-md-1">
                                            <div class="d-flex flex-row">
                                                <div class="align-self-center">
                                                    <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                                </div>
                                                <div>
                                                    <h4>Name</h4>
                                                    <p class="mb-0">' . $user_name . '</p>
                                                </div>
                                            </div>
                                        <div class="align-self-center">
                                        <a href="./user_update.php" class="btn btn-dark px-5 py-2 ">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between p-md-1">
                                            <div class="d-flex flex-row">
                                                <div class="align-self-center">
                                                    <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                                </div>
                                                <div>
                                                    <h4>Email Id</h4>
                                                    <p class="mb-0">'. $user_email .'</p>
                                                </div>
                                            </div>
                                        <div class="align-self-center">
                                        <a href="./user_update.php" class="btn btn-dark px-5 py-2 ">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between p-md-1">
                                            <div class="d-flex flex-row">
                                                <div class="align-self-center">
                                                    <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                                </div>
                                                <div>
                                                    <h4>Password</h4>
                                                    <p class="mb-0">' . $user_password . '</p>
                                                </div>
                                            </div>
                                        <div class="align-self-center">
                                        <a href="./user_update.php" class="btn btn-dark px-5 py-2 ">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
            }
            ?>
        </div>
    </section>


    <section class="cover container text-center " style="position:relative;top:30px">
        <h3>Viewed Courses</h3>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php 
            $sql = "SELECT distinct course FROM v_course where user = '$id1'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) 
            {
                
                $course=$row['course'];
                $sql2 = "SELECT * FROM courses where course_id  = '$course'";
                $result2 = mysqli_query($conn, $sql2);
                while($row2 = mysqli_fetch_assoc($result2))
                {

                    $course_id = $row2['course_id']; 
                    $course_name=$row2['course_name']; 
                    $course_desc=$row2['course_desc']; 
                    $course_img=$row2['course_img_url']; 
                    echo'  <div class="col-md-3">
                            <div class="card">
                                <img src="' . $course_img . '" class=" img-fluid card-img-top " style="height: 200px;" alt="... ">
                                    <div class="card-body ">
                                        <a href="./allcourses.php?courseid=' . $course_id . '">
                                            <h5 class="card-title ">' . $course_name . '</h5>
                                        </a>
                                        <p class="card-text ">' . $course_desc . '</p>
                                    </div>
                            </div>
                          </div>';
                } 
            }
           ?>
        </div>
    </section>
</div>



<?php include ("footer.php");?>