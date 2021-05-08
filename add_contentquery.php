<?php include ('a_connection.php');?>

<?php 
    if(isset($_GET['d_topicid']))
     {
         $id2 = $_GET['d_topicid'];
         $sql4 = "DELETE FROM topics WHERE topic_id = '$id2'";
         $result4 = mysqli_query($conn, $sql4);
     }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        if (isset($_GET['u_topicid']))
        {
            $id2 = $_GET['u_topicid'];
            $topic_name = $_POST['topic_name'];
            $topic_date = $_POST['topic_date'];
            $topic_post = $_POST['topic_post'];
            $topic_url = $_POST['topic_url'];
            $topic_img_url = $_POST['topic_img_url'];
            $topic_sno = $_POST['topic_sno'];
            $sql = "UPDATE topics SET topic_sno='$topic_sno', topic_name='$topic_name' , topic_date='$topic_date', topic_post='$topic_post' , topic_url='$topic_url' , topic_img_url='$topic_img_url' WHERE topic_id = '$id2'";
            $result = mysqli_query($conn, $sql); 
        }
        else 
        {
            $id1 = $_GET['courseid'];
            $topic_name = $_POST['topic_name'];
            $topic_date = $_POST['topic_date'];
            $topic_post = $_POST['topic_post'];
            $topic_url = $_POST['topic_url'];
            $topic_img_url = $_POST['topic_img_url'];
            $topic_sno = $_POST['topic_sno'];
            $sql1 = "INSERT INTO topics (topic_sno ,course_id, topic_name, topic_date , topic_post, topic_url,topic_img_url, topic_id ) VALUES ('$topic_sno','$id1','$topic_name','$topic_date','$topic_post','$topic_url','$topic_img_url','')";
            $result1 = mysqli_query($conn, $sql1);
            if($result1)
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success: </strong> Saved
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            else
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error : </strong> Not saved
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
            }
        }
    }

?>