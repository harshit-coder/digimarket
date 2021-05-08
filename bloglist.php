<?php include ("header.php");?>
<?php include ("connection.php");?>

<main>
    <section class="section-2 container-fluid p-0">
        <div class="cover" style=" background: url('https://image.freepik.com/free-vector/modern-business-background-with-digital-technology-design_1361-3299.jpg');
            ">
            <div class="content text-center container text-white">
                <h1> Blogs Home</h1>
                <p>PLEASE GIVE SOME 4-5 LINE CONTENT HERE?</p>
            </div>

        </div>

    </section>

    <section class="container bloglist  " style="position:relative;top:30px">

        <div class="mt-5">


            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <!-- Blog Post -->
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


        echo ' 
        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="./blog1.php?blogid=' . $blog_id . '">
                                            <img src="' . $blog_image_url .'" alt="" class="card-img-top img-fluid " style="height: auto;max-width: 100%;">


                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="card-title">' . $blog_name .'</h3>

                                        <a href="./blog1.php?blogid=' . $blog_id . '" class="btn ">Read  &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on   ' . $blog_date .'

                            </div>
                        </div>';
    }
?>



                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header text-white" style="background-color: #7c4dff;">About the Author</h5>
                        <div class="card-body">
                            <p>Alina Tomy</p>
                            WRITE SOMETHING ABOUT YOURSELF 4-5 LINE
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->

        </div>
    </section>


</main>

<?php include ("footer.php");?>