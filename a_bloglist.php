<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>
<?php include ("add_blogquery.php");?>
<div class="container">
        <br>
    <div class="row">
        <div class="col-md-8">
            <h2 class="text-center text-black mx-2">Add blogs  </h2>
                <form action="a_bloglist.php" method="post">
                   
                            <div class="form-outline mb-4">
                                <input type="text" name="blog_name" id="blog_name" class="form-control" />
                                <label class="form-label" for="blog_name">Tittle</label>
                            </div>
                       
                       
                        <label class="form-label" for="blog_date">Blog Date</label>
                            <div class="form-outline mb-4">
                      
                                <input type="date"   name="blog_date"  id="blog_date" class="form-control" />
                            </div>
                     
                    <div class="form-outline mb-4">
                        <textarea type="text" name="blog_desc" id="blog_desc" class="form-control" rows="100" ></textarea>
                        <label class="form-label" for="blog_desc">Blog description</label>
                    </div>
                    <div class="form-outline mb-4">
                          <input type="url" name="blog_url" id="blog_url" class="form-control" />
                        <label class="form-label" for="blog_url">Any other url you want to attach at the end of blog</label>
                    </div>
                       <div class="form-outline mb-4">
                          <input type="url" name="blog_image_url" id="blog_image_url" class="form-control" />
                        <label class="form-label" for="blog_image_url">Blog image url</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                </form>
        </div>
           

        <div class="col-md-4">
            <h2 class="text-center text-black mx-2">Your blogs</h2>
            <?php 
                $sql = "SELECT * FROM blog "; 
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result))
                {
                    $blog_id = $row['blog_id'];
                    $blog_name = $row['blog_name'];
                    $blog_date = $row['blog_date'];
                    $blog_desc = $row['blog_desc'];
                    $blog_url = $row['blog_url'];
                    $blog_image_url = $row['blog_image_url'];
                    echo '<div class="card mb-4">
                                <div class="card-body">
                                    <a href="a_blog1.php?blogid=' . $blog_id . '"><h4 class="card-title text-black">' . $blog_name . '</h4></a>
                                    <p class="card-text">' . $blog_date . '</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop' . $blog_id . '">Update</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop' . $blog_id . '"  data-mdb-backdrop="static"  data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Update Blog</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">  
                                                    <form action="a_bloglist.php?u_blogid=' . $blog_id . '" method="post">
                                                      
                                                                <div class="form-outline mb-4">
                                                                    <input type="text" value="' . $blog_name . '" name="blog_name" id="blog_name" class="form-control" />
                                                                    <label class="form-label" for="blog_name">Tittle</label>
                                                                </div>
                                                          
                                                                <label class="form-label" for="blog_date">Date</label>
                                                                <div class="form-outline mb-4">
                                                                    <input type="date" value="' . $blog_date . '"   name="blog_date"  id="blog_date" class="form-control" />
                                                                
                                                                </div>
                                                         
                                                        <div class="form-outline mb-4">
                                                            <textarea type="text" name="blog_desc" id="blog_desc" class="form-control" rows="8" col="8">' . $blog_desc . '</textarea>
                                                            <label class="form-label" for="blog_desc">Blog description</label>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <input type="url" value="' . $blog_url . '"  name="blog_url" id="blog_url" class="form-control" />
                                                            <label class="form-label" for="blog_url">Any other url that you want to attach at the end of the blog</label>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <input type="url" value="' . $blog_image_url . '"  name="blog_image_url" id="blog_image_url" class="form-control" />
                                                            <label class="form-label" for="blog_image_url">Blog image url</label>
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
                                    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal' . $blog_id . '">Delete</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal' . $blog_id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button></div>
                                            <div class="modal-body">Are you sure you want to delete this
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                            <a href="./a_bloglist.php?d_blogid=' . $blog_id . '" class="btn btn-primary">Delete&rarr;</a>                         
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