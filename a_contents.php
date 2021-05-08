<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>
<?php include ("add_contentquery.php");?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 mb-4 bg-white ">
            <nav class="navbar navbar-fixed-top bg-dark ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars" style="color: white;">All Topics</i>
                    </button>
                </div>
            </nav>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class=" bg-white">
                    <div class="list-group">
                    <?php
                    $id1 = $_GET['courseid'];
                    $sql1 = "SELECT * FROM topics WHERE course_id='$id1'";
                    $result1 =  mysqli_query($conn, $sql1);
                    while($row1 = mysqli_fetch_assoc($result1))
                    {
                        $topic_id = $row1['topic_id'];
                        $topic_name = $row1['topic_name'];
                        $topic_sno = $row1['topic_sno'];
                        $topic_date = $row1['topic_date'];
                        $topic_post = $row1['topic_post'];
                        $topic_url = $row1['topic_url'];
                        $topic_img_url = $row1['topic_img_url'];
                        echo '<span><a href="a_course1.php?courseid=' . $id1 . '&topicsno=' . $topic_sno . '" class="list-group-item ">' . $topic_sno .'. ' . $topic_name .'</a>
                        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop' . $topic_id . '">Update</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop' . $topic_id . '"  data-mdb-backdrop="static"  data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Update The Topic</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">  
                                                    <form action="a_contents.php?courseid=' . $id1 . '&u_topicid=' . $topic_id . '" method="post">
                                                    <div class="form-outline mb-4">
                                                         <input  type="Number" value="' . $topic_sno . '" name="topic_sno" id="topic_sno" class="form-control" />
                                                         <label class="form-label"  for="topic_sno">Topic serial No. (All courses starts with serial No. 1) </label>
                                                   </div>
                                                  
                                                           <div class="form-outline mb-4">
                                                          <input type="text" value="' . $topic_name . '" name="topic_name" id="topic_name" class="form-control" />
                                                          <label class="form-label"  for="topic_name">Topic name</label>
                                                           </div>
                                                     
                                                       <label  class="form-label" for="topic_date">Uploading date</label>
                                                           <div class="form-outline mb-4">
                                                               <input type="date" value="' . $topic_date . '" name="topic_date" id="topic_date" class="form-control" />
                                                           </div>
                                                      
                               
                                                   <!-- Number input -->
                                                   <div class="form-outline mb-4">
                                                        <textarea type="text" name="topic_post" id="topic_post" class="form-control" rows="4">'. $topic_post .'</textarea>
                                                        <label    class="form-label"  for="topic_post">Topic description</label>
                                                 
                                                   </div>
                               
                                                 
                                                     <div class="form-outline mb-4">
                                                       <input type="url" value="' . $topic_img_url . '" name="topic_img_url" id="topic_img_url" class="form-control" />
                                                       <label class="form-label"   for="topic_img_url">image url</label>
                                                     
                                                   </div>
                               
                                                      <div class="form-outline mb-4">
                                                            <input type="url" value="' . $topic_url . '" name="topic_url" id="topic_url" class="form-control" />
                                                            <label class="form-label"   for="topic_url">video url</label>
                                                   
                                                   </div>
                                                   <!-- Submit button -->
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
                                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal' . $topic_id . '">Delete</button></span>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal' . $topic_id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button></div>
                                            <div class="modal-body">Are you sure you want to delete this
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                            <a href="./a_contents.php?courseid=' . $id1 . '&d_topicid=' . $topic_id . '" class="btn btn-primary">Delete&rarr;</a>                         
                                        </div>
                                        </div>
                                    </div>
                                    </div>';

                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>


            
<?php
        echo '<div class="col-lg-9 mb-4">
                <h3 class="text-center text-black">Add content in the course</h3>
                <form action="a_contents.php?courseid=' . $id1 . '"  method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                     <div class="form-outline mb-4">
                   
                          <input type="Number" name="topic_sno" id="topic_sno" class="form-control" />
                          <label class="form-label" for="topic_sno">Topic serial No.</label>
                    </div>

                      
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                          
                                <input type="text" name="topic_name" id="topic_name" class="form-control" />
                                <label class="form-label" for="topic_name">Topic name</label>
                            </div>
                        </div>
                        <div class="col">
                        <label cllass="form-label" for="topic_date">Uploading date</label>
                            <div class="form-outline">
            
                                <input type="date" name="topic_date" id="topic_date" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                  
                        <textarea type="text" name="topic_post" id="topic_post" class="form-control" rows="4"></textarea>
                        <label class="form-label" for="topic_post">Topic description</label>
                    </div>

                  
                      <div class="form-outline mb-4">
               
                          <input type="url" name="topic_img_url" id="topic_img_url" class="form-control" />
                          <label class="form-label" for="topic_img_url">image url</label>
                      </div>

                       <div class="form-outline mb-4">
                    
                          <input type="url" name="topic_url" id="topic_url" class="form-control" />
                          <label class="form-label" for="topic_url">video url</label>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                </form>
            </div>';


?>
        </div>
        <!-- /.row -->
    </div>
    <!-- Navbar -->
    <!-- MDB -->

 <?php include ("a_footer.php");?>