<?php include ("header.php");?>
<?php include ("connection.php");?>

<main>
    <section class="container" style="position: relative; top:30px;">
        <!-- Page Content -->
        <div class="container">
            <?php
            $id1 = $_GET['courseid'];
            $sql5 = "SELECT * FROM courses where course_id='$id1' "; 
            $result5 = mysqli_query($conn, $sql5);
            while($row5 = mysqli_fetch_assoc($result5)) 
            {   
                $course_id = $row5['course_id']; 
                $course_name=$row5['course_name']; 
                echo'<h1 class="mt-4 mb-3">' . $course_name . '</h1>';
            }

         
            echo'<div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="list-group text-left cont">';

                        $sql1 = "SELECT * FROM topics WHERE course_id=$id1";
                        $result1 =  mysqli_query($conn, $sql1);
                        while($row1 = mysqli_fetch_assoc($result1))
                        {
                            $topic_id = $row1['topic_id'];
                            $topic_name = $row1['topic_name'];
                            $topic_sno = $row1['topic_sno'];
                            echo '<a href="./course1.php?courseid=' . $id1 . '&topic=' . $topic_sno . '" class="list-group-item">' . $topic_sno .'. ' . $topic_name .'</a>';
                        }

                    echo'  </div></div>';
                ?>

            <!-- Content Column -->
            <div class="col-lg-9 mb-4 sec">

                <?php

                    if(isset($_GET['topic']))
                    {
                        $id2 = $_GET['topic'];
                        $sql2 = "SELECT * FROM topics WHERE topic_sno=$id2 and course_id=$id1";
                        $result2 =  mysqli_query($conn, $sql2);
                        while($row2 = mysqli_fetch_assoc($result2))
                        {
                            $topic_id = $row2['topic_id'];
                            $topic_name = $row2['topic_name'];
                            $topic_date = $row2['topic_date'];
                            $topic_url = $row2['topic_url'];
                            $topic_post = $row2['topic_post'];
                            $topic_img_url = $row2['topic_img_url'];
                
                
                            echo'<h2>' .$topic_name  . '</h2>
                                <small>Uploaded on: ' .$topic_date  . '</small>
                                <div class="embed-responsive embed-responsive-16by9 ">
                                    <iframe class="embed-responsive-item " src="' .$topic_url  . '" allowfullscreen></iframe>
                                </div>
                                <div>
                                    <p class="text-left mt-5">' .$topic_post  . '
                                    </p>
                                </div>
                                <img src="' .$topic_img_url  . '" alt="" class="img-fluid mt-5" style="height: auto;max-width: 100%;">
                                <div class="mt-5">
                                    <h3 style=" font-family:"Times New Roman", Times, serif">Useful Links:</h3>
                                    <hr>
                                
                                </div>';
                        }
                    }

                    else   
                    {

                        $sql2 = "SELECT * FROM topics WHERE course_id=$id1 and topic_sno=1";
                        $result2 =  mysqli_query($conn, $sql2);
                        while($row2 = mysqli_fetch_assoc($result2))
                        {
                            $topic_id = $row2['topic_id'];
                            $topic_name = $row2['topic_name'];
                            $topic_date = $row2['topic_date'];
                            $topic_url = $row2['topic_url'];
                            $topic_post = $row2['topic_post'];
                            $topic_img_url = $row2['topic_img_url'];

                            echo'<h2>' .$topic_name  . '</h2>
                            <small>Uploaded on: ' .$topic_date  . '</small>
                            <div class="embed-responsive embed-responsive-16by9 ">
                                <iframe class="embed-responsive-item " src="' .$topic_url  . '" allowfullscreen></iframe>
                            </div>
                            <div>
                                <p class="text-left mt-5">' .$topic_post  . '</p>
                            </div>
                            <img src="' .$topic_img_url  . '" alt="" class="img-fluid mt-5" style="height: auto;max-width: 100%;">
                            <div class="mt-5">
                                <h3 style=" font-family:"Times New Roman", Times, serif">Useful Links:</h3>
                                <hr>
                                <a href="">Link url attached</a>
                            </div>';

                        }
                    }

                ?>
            </div>
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</main>
<!-- Remove the container if you want to extend the Footer to full width. -->
<?php include ("footer.php");?>