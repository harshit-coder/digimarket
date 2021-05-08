<?php include ("course_viewquery.php");?>
<?php include ("header.php");?>
<?php include ("connection.php");?>
<main>
    <section class="section-2 container-fluid p-0">
        <div class="cover"
            style=" background: url('https://image.freepik.com/free-vector/modern-business-background-with-digital-technology-design_1361-3299.jpg');">
            <div class="content text-center container text-white">
                <h1> DIGICATION: A E-LEARNING PLAFORM</h1>
                <p>PLEASE GIVE SOME 4-5 LINE CONTENT HERE?</p>
            </div>
        </div>
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <?php 
            $sql = "SELECT * FROM category "; 
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)) 
            { 
                $cat_id1 = $row['cat_id']; 
                $cat_name1 = $row['cat_name']; 
                echo '<div class="container mt-4"><h2 style="font-family: Times New Roman, Times, serif;padding:20px;">' . $cat_name1 . ':</h2>';
                $sql1 = "SELECT * FROM courses "; 
                $result1 = mysqli_query($conn, $sql1);
                echo '<section class="container text-center " style="position:relative;top:30px">
                    <div class="row row-cols-1 row-cols-md-2 g-4">'; 
                while($row1 = mysqli_fetch_assoc($result1)) 
                { 
                    $cat_id = $row1['cat_id']; 
                    $course_id = $row1['course_id']; 
                    $course_name=$row1['course_name']; 
                    $course_desc=$row1['course_desc']; 
                    $course_img=$row1['course_img_url']; 
                    if ($cat_id1 == $cat_id)
                        {   echo'<div class="col-md-3">
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
                      
                echo'</div></section></div>';
            }
    ?>
        <!-- Remove the container if you want to extend the Footer to full width. -->

    </section>
</main>
<!-- Remove the container if you want to extend the Footer to full width. -->
<?php include ("footer.php") ?>