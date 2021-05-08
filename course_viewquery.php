<?php include ('connection.php');?>


<?php
    session_start();
    if(isset($_GET['courseid']))
    {
        if (isset($_SESSION['user_id']) && ($_SESSION['userlogin'] == true))
        {
            $id1 = $_GET['courseid'];
            $id2 = $_SESSION['user_id'];
            $sql1 = "INSERT INTO v_course (p_id,user, course) VALUES ('','$id2', '$id1')";
            $result1 = mysqli_query($conn, $sql1);
           
            header('Location: ./course1.php?courseid=' . $id1 . '');
        }
        else
        {
            
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error: </strong>   Please log in First to view the course
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    
    }
?>