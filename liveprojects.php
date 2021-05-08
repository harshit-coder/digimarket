<?php include ("header.php");?>
<?php include ("connection.php");?>
<main>
    <section class="section-2 container-fluid p-0">
        <div class="cover"
            style=" background: url('https://image.freepik.com/free-vector/modern-business-background-with-digital-technology-design_1361-3299.jpg');">
            <div class="content text-center container text-white">
                <h1> LIVE PROJECTS</h1>
                <p>PLEASE GIVE SOME 4-5 LINE CONTENT HERE?</p>
            </div>
        </div>
    </section>
    <section class="container  " style="position:relative;top:30px">
        <!-- Page Content -->
        <div class="container">
            <div class="row proj">
                <?php 
                    $sql = "SELECT * FROM live_projects "; 
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result))
                    {   
                        $project_id = $row['project_id'];
                        $project_name = $row['project_name'];
                        $project_req = $row['project_req'];
                        $proj_desc = $row['proj_desc'];
                        $proj_deadline = $row['proj_deadline'];
                        $proj_img_url = $row['proj_img_url'];
                        echo'<div class="col-md-12 portfolio-item ">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="./liveproject1.php?projectid=' . $project_id . '">' . $project_name . '</a>
                                    </h4>
                                    <p class="card-text"></p>
                                    <div class="card-footer text-muted">
                                        Deadline: ' . $proj_deadline . '

                                    </div>
                                </div>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </section>
</main>
<?php include ("footer.php");?>