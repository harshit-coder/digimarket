<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>
<?php include ("add_liveprojectquery.php");?>
<div class="container">
        <br>
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-4 mb-3">Add  a Live project</h1>
                <form action="a_liveprojects.php" method="post">
                <div class="row mb-4">
                    <div class="col">
                            <div class="form-outline">
                                <input type="text" name="project_name" id="project_name" class="form-control" />
                                <label class="form-label" for="project_name">Project Tittle</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="project_req" id="project_req" class="form-control" />
                                <label class="form-label" for="project_req">Requirements Need from students for projects</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline">
                        <textarea type="text" name="proj_desc" id="proj_desc" class="form-control" rows="4"></textarea>
                        <label class="form-label" for="proj_desc">Project Description</label>
                    </div>
                    <!-- Message input -->
                    <label class="form-label" for="proj_deadline"> Project deadline</label>
                    <div class="form-outline mb-4">
                          <input type="date" name="proj_deadline" id="proj_deadline" class="form-control" />
                      
                    </div>
                       <div class="form-outline mb-4">
                          <input type="url" name="proj_img_url" id="proj_img_url" class="form-control" />
                        <label class="form-label" for="proj_img_url">Project Image Url</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                </form>
        </div>
           

        <div class="col-md-4">
            <h1 class="mt-4 mb-3">Your projects</h1>
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
                    echo '<div class="card mb-4">
                                <div class="card-body">
                                    <a href="a_liveproject1.php?projectid=' . $project_id . '"><h3 class="card-title text-black text-center">' . $project_name . '</h2></a>
                                    <p class="card-text">' . $project_req . '</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop' . $project_id . '">Update</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop' . $project_id . '"  data-mdb-backdrop="static"  data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Update This Project</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">  
                                                    <form action="a_liveprojects.php?u_projectid=' . $project_id . '" method="post">
                                                        <div class="row mb-4">
                                                        <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" value="' . $project_name . '" name="project_name" id="project_name" class="form-control" />
                                                                    <label class="form-label" for="project_name">Project Tittle</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-outline">
                                                                    <input type="text" value="' . $project_req . '" name="project_req" id="project_req" class="form-control" />
                                                                    <label class="form-label" for="project_req">Requirements Need from students for projects</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-outline">
                                                            <textarea type="text"  name="proj_desc" id="proj_desc" class="form-control" rows="4">' . $proj_desc . '</textarea>
                                                            <label class="form-label" for="proj_desc">Project description</label>
                                                        </div>
                                    
                                                        <!-- Message input -->
                                                        <label class="form-label" for="proj_deadline">Project Deadline</label>
                                                        <div class="form-outline mb-4">
                                                            <input type="date" value="' . $proj_deadline . '" name="proj_deadline" id="proj_deadline" class="form-control" />
                                                          
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <input type="url" value="' . $proj_img_url . '" name="proj_img_url" id="proj_img_url" class="form-control" />
                                                            <label class="form-label" for="proj_img_url">Project Image Url</label>
                                                        </div>
                                
                                                        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                            
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>                
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal' . $project_id . '">Delete</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal' . $project_id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button></div>
                                            <div class="modal-body">Are you sure you want to delete this
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                            <a href="./a_liveprojects.php?d_projectid=' . $project_id . '" class="btn btn-primary">Delete&rarr;</a>                         
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>';
                    
                }
                   
            ?>
        </div>
    </div>
</div>
<?php include ("a_footer.php");?>