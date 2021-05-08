<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>
<?php include ("add_coursequery.php");?>



<div class="container">
        <br>
    <div class="row">
        <div class="col-md-4">
            <h2 class="text-dark text-center">Add course  </h2>
                <form action="a_allcourses.php" method="post">

                    <div class="form-group mb-4">
                        <label for="cat_id">select category</label>
                        <select class="form-control" name="cat_id" id="cat_id" >
                            <?php 
                                $sql3 = "SELECT * FROM category "; 
                                $result3 = mysqli_query($conn, $sql3);

                                while($row = mysqli_fetch_assoc($result3))
                                {

                                    $cat_id = $row['cat_id'];
                                    $cat_name = $row['cat_name'];
                                    echo '<option value="' . $cat_id .'">' . $cat_name . '</option>';
                                }

                            ?>

                        </select>
                    
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text"  name="course_name" id="course_name" class="form-control" />
                        <label class="form-label" for="course_name">Course Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control"  name="course_desc" id="course_desc" rows="4"></textarea>
                        <label class="form-label" for="course_desc">Description of course</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="url" class="form-control"  name="course_img_url" id="course_img_url"/>
                        <label class="form-label" for="course_img_url">Image for your course</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                </form>
        </div>
           

        <div class="col-md-8">
            <h1 class="mt-4 mb-3">Courses list</h1>
            <?php 
                $sql1 = "SELECT * FROM category ";
                $result1 =  mysqli_query($conn, $sql1);
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    $cat_id1 = $row1['cat_id'];
                    $cat_name1 = $row1['cat_name'];
                    echo ' <h3 class="text-center text-black">' . $cat_name1 . '</h3> ';
                    $sql2 = "SELECT * FROM courses "; 
                    $result2 = mysqli_query($conn, $sql2);

                    while($row = mysqli_fetch_assoc($result2))
                    {

                        $cat_id = $row['cat_id'];
                        $course_id = $row['course_id'];
                        $course_name=$row['course_name'];
                        $course_desc=$row['course_desc'];
                        $course_img=$row['course_img_url'];
                        if ($cat_id1 == $cat_id)
                        {
                            echo '<div class="card mb-4">
                        
                                        <div class="card-body">
                                      
                                            <a href="a_course1.php?courseid=' . $course_id . '"><h2 class="card-title">' . $course_name . '</h2></a>
                                            <p class="card-text">' . $course_desc . '</p>
                                            <!-- Button trigger modal -->
                                            <a href="./a_contents.php?courseid=' . $course_id . '" class="btn btn-primary">Add contents&rarr;</a>                         
                                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop' . $course_id . '">Update</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop' . $course_id . '"  data-mdb-backdrop="static"  data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Update course</h5>
                                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">  
                                                            <form action="a_allcourses.php?u_courseid=' . $course_id . '" method="post">
                                                                <div class="form-group mb-4">
                                                                    <label class="form-label" for="cat_id">select category</label>
                                                                    <select class="form-control" name="cat_id" id="cat_id" >
                                                                        <option value="' . $cat_id1 . '" selected>' . $cat_name1 . '</option>';
                                                                        $sql3 = "SELECT * FROM category where cat_id != '$cat_id1'"; 
                                                                        $result3 = mysqli_query($conn, $sql3);
                                                                        while($row3 = mysqli_fetch_assoc($result3))
                                                                        {
                                        
                                                                            $cat_id = $row3['cat_id'];
                                                                            $cat_name = $row3['cat_name'];
                                                                            echo '<option value="' . $cat_id .'">' . $cat_name . '</option>';
                                                                        }
                                                                    echo ' </select>
                                                                </div>
                                                                <div class="form-outline mb-4">
                                                                <input type="text" value="' . $course_name . '" name="course_name" id="course_name" class="form-control" />
                                                                <label class="form-label" for="course_name" >Course Name</label>
                                                                </div>
                                                                <div class="form-outline mb-4">
                                                                    <textarea class="form-control"  name="course_desc" id="course_desc" rows="4">' . $course_desc . '</textarea>
                                                                    <label class="form-label" for="course_desc">Description of course</label>
                                                                    </div>
                                                                <div class="form-outline mb-4">
                                                                <input type="url"  value="' . $course_img . '" class="form-control"  name="course_img_url" id="course_img_url"/>
                                                                <label class="form-label" for="course_img_url">Image for your course</label>
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
                                            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal' . $course_id . '">Delete</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal' . $course_id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button></div>
                                                    <div class="modal-body">Are you sure you want to delete this
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                                    <a href="./a_allcourses.php?d_courseid=' . $course_id . '" class="btn btn-primary">Delete&rarr;</a>                         
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>';
                        }
                    }
                }   
            ?>
        </div>
    </div>
</div>
<?php include ("a_footer.php");?>