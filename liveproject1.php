<?php include ("header.php");?>
<?php include ("connection.php");?>
<main>
    <section class="container project1" style="position: relative; top:30px;">
        <div class="container">
            <?php
                $id2 = $_GET['projectid'];
                $sql2 = "SELECT * FROM live_projects WHERE project_id=$id2";
                $result2 =  mysqli_query($conn, $sql2);
                while($row2 = mysqli_fetch_assoc($result2))
                {
                    $project_id = $row2['project_id'];
                    $project_name = $row2['project_name'];
                    $project_req = $row2['project_req'];
                    $proj_desc = $row2['proj_desc'];
                    $proj_deadline = $row2['proj_deadline'];
                    $proj_img_url = $row2['proj_img_url'];
                    echo '<div class="row">
                            <div class="col-md-8">
                                <h1 class="mt-4 mb-3">' . $project_name . '</h1>
                                <img class="img-fluid" src="' . $proj_img_url . '" alt="">
                            </div>
                            <div class="col-md-4">
                                <h3 class="my-3">Project Description</h3>
                                <p>' . $proj_desc . '</p>
                                <p>Send yout details to the Email Id for joining the project: Alinaproject22@gmail.com</p>
                                <h3 class="my-3">Project Details</h3>
                                <ul>
                                    <li>Deadline: ' . $proj_deadline . ' </li>
                                    <li>Requirements: ' . $project_req . ' </li>
                                    
                                </ul>
                            </div>
                        </div>';

                }
            ?>
            <h3 class="my-4">Other Projects</h3>
            <!-- Page Content -->

            <?php
                $id2 = $_GET['projectid'];
                $sql3 = "SELECT * FROM live_projects WHERE project_id != $id2";
                $result3 = mysqli_query($conn, $sql3);
                while($row3 = mysqli_fetch_assoc($result3))
                { 
                    $project_id = $row3['project_id']; 
                    $project_name = $row3['project_name'];
                    $project_req= $row3['project_req']; 
                    $proj_desc = $row3['proj_desc']; 
                    $proj_deadline = $row3['proj_deadline']; 
                    $proj_img_url = $row3['proj_img_url']; 
                    echo'<div class="row proj">
                            <div class="col-md-12 portfolio-item ">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="./liveproject1.php?projectid=' . $project_id . '">' . $project_name . '</a>
                                    </h4>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer text-muted">
                                    Deadline: ' . $proj_deadline . '

                                </div>
                            </div>
                        </div>'; 
                } 
            ?>
        </div>

    </section>
</main>
<?php include ("footer.php");?>