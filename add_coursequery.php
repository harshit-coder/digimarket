<?php include ('a_connection.php');?>

<?php 
    if(isset($_GET['d_courseid']))
     {
         $id2 = $_GET['d_courseid'];
         $sql4 = "DELETE FROM courses WHERE course_id = '$id2'";
         $result4 = mysqli_query($conn, $sql4);
 
 
     }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        if (isset($_GET['u_courseid']))
        {
            $id2 = $_GET['u_courseid'];
            $cat_id = $_POST['cat_id'];
            $course_name = $_POST['course_name'];
            $course_desc = $_POST['course_desc'];
            $course_img = $_POST['course_img_url'];
            $sql = "UPDATE courses SET course_img_url= '$course_img', cat_id= '$cat_id' , course_name='$course_name', course_desc='$course_desc' where course_id='$id2'";
            $result = mysqli_query($conn, $sql);
            
        }

        else 
        {
            $cat_id = $_POST['cat_id'];
            $course_name = $_POST['course_name'];
            $course_desc = $_POST['course_desc'];
            $course_img = $_POST['course_img_url'];
            
         
            $sql = "INSERT INTO courses (course_img_url,course_id, cat_id, course_name , course_desc) VALUES ('$course_img','','$cat_id','$course_name','$course_desc')";
              
            $result = mysqli_query($conn, $sql);
            if($result)
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