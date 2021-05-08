
   <?php include ("a_header.php");?>
   <?php include ("a_connection.php");?>


    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
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

        echo '<h3 class="text-center text-black px-2 mx-2">' . $project_name . '</h3>

         
       
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="' . $proj_img_url . '" alt="">
            </div>

            <div class="col-md-4">
               
                <p>Description: ' . $proj_desc . '</p>
                <p>Deadline date: ' . $proj_deadline . '</p>
              
              <p> Requirements: ' . $project_req . '</p>
            </div>

        </div>
        <!-- /.row -->';
    }



        ?>
    

    </div>
    <!-- /.container -->

  <?php include ("a_footer.php");?>