<?php include ("header.php");?>
<?php include ("connection.php");?>
<main>
    <section class="container" style="position: relative; top:30px;">

        <!-- Page Content -->
        <div class="container blo">
            <div class="row blo">

                <div class="col-md-8">

                    <?php
                $id2 = $_GET['blogid'];
                $sql2 = "SELECT * FROM blog WHERE blog_id = '$id2'";
                $result2 =  mysqli_query($conn, $sql2);
                while($row2 = mysqli_fetch_assoc($result2))
                {
                    $blog_id = $row2['blog_id'];
                    $blog_name = $row2['blog_name'];
                    $blog_date = $row2['blog_date'];
                    $blog_url = $row2['blog_url'];
                    $blog_desc = $row2['blog_desc'];
                    $blog_image_url = $row2['blog_image_url'];
                    echo ' <h3 class="mt-4 mb-3">' .$blog_name  . '</h3>
                        <img class="img-fluid rounded" src="' .$blog_image_url  . '" alt="">
                        <hr>
                        <!-- Date/Time -->
                        <p>Posted on ' .$blog_date  . '</p>
                        <hr>
                        <!-- Post Content -->
                        <p>' .$blog_desc  . '</p>
                        <hr>
                        <h3>Other Useful links</h3>
                        <hr>
                        <a href="' .$blog_url  . '">View Link</a>
                       ';
                
                }
            ?>

                </div>
                <div class="col-md-4">
                    <h1 class="mt-5 mb-3">Other Posts</h1>
                    <?php

                        $sql3 = "SELECT * FROM blog WHERE blog_id != '$id2'";
                        $result3 =  mysqli_query($conn, $sql3);
                        $i = 1;
                        while($row3 = mysqli_fetch_assoc($result3))
                        {
                            if($i <=3)
                            {
                                $blog_id = $row3['blog_id'];
                                $blog_name = $row3['blog_name'];
                                $blog_date = $row3['blog_date'];
                                $blog_url = $row3['blog_url'];
                                $blog_desc = $row3['blog_desc'];
                                $blog_image_url = $row3['blog_image_url'];
                                echo '<section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card">
                                        <div class="card-body d-flex flex-row">
                                            <div>
                                                <h5 class="card-title font-weight-bold mb-2">' .$blog_name  . '</h5>
                                                <p class="card-text"><i class="far fa-clock pe-2"></i>' .$blog_date  . '</p>
                                            </div>
                                        </div>
                                        <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                            <img class="img-fluid" src="' . $blog_image_url . '" alt="Card image cap" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-link link-danger p-md-1 my-1" href="./blog1.php?blogid=' . $blog_id. '">Read more</a>

                                            </div>
                                        </div>
                                    </div>
                                </section>';
                            }
                            $i++;
                        }
                    ?>


                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </section>

</main>
<?php include ("footer.php");?>