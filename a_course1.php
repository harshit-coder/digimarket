
<?php include ("a_header.php");?>
<?php include ("a_connection.php");?>
    <div class="container">
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-lg-3 mb-4 bg-white ">
                <nav class="navbar navbar-fixed-top bg-dark ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars" style="color: white; padding:2px 2px">All Topics</i>
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
        echo '<a href="a_course1.php?courseid=' . $id1 . '&topicsno=' . $topic_sno . '" class="list-group-item ">' . $topic_sno .'. ' . $topic_name .'</a>';
    }
?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Column -->
<?php

if(isset($_GET['topicsno']))
{
    $id2 = $_GET['topicsno'];
    $sql2 = "SELECT * FROM topics WHERE topic_sno='$id2' and course_id='$id1'";
    $result2 =  mysqli_query($conn, $sql2);
    while($row2 = mysqli_fetch_assoc($result2))
    {
        $topic_id = $row2['topic_id'];
        $topic_name = $row2['topic_name'];
        $topic_date = $row2['topic_date'];
        $topic_url = $row2['topic_url'];
        $topic_post = $row2['topic_post'];
        $topic_img_url = $row2['topic_img_url'];
      echo '<div class="col-lg-9 mb-4">
             <div>    
            </div>
                <h2 class="text-center text-black">' .$topic_name  . '</h2>
                <small>Uploaded on :' .$topic_date  . '</small>
                <br>
              
                <img class="card-img-top" src="' .$topic_img_url  . '" alt="">
                <p>' .$topic_post  . '</p>
              
                 <iframe width="420" height="315"src="' .$topic_url  . '"></iframe>
        </div>';
    }
}
else{
    $sql2 = "SELECT * FROM topics WHERE course_id='$id1' and topic_sno=1";
    $result2 =  mysqli_query($conn, $sql2);
    while($row2 = mysqli_fetch_assoc($result2))
    {
        $topic_id = $row2['topic_id'];
        $topic_name = $row2['topic_name'];
        $topic_date = $row2['topic_date'];
        $topic_url = $row2['topic_url'];
        $topic_post = $row2['topic_post'];
        $topic_img_url = $row2['topic_img_url'];
      echo '<div class="col-lg-9 mb-4">
             <div>
            </div>
                <h2 class="text-center text-black">' .$topic_name  . '</h2>
                <small>Uploaded on :' .$topic_date  . '</small>
                <br>
            
                <img class="card-img-top" src="' .$topic_img_url  . '" alt="">
                <p>' .$topic_post  . '</p>
               
                 <iframe width="420" height="315"src="' .$topic_url  . '"></iframe>
        </div>';
    }
    }
?>
    </div>
        <!-- /.row -->
    </div>
    <?php include ("a_footer.php");?>