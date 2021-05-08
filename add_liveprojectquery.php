<?php include ('a_connection.php');?>

<?php 
    if(isset($_GET['d_projectid']))
     {
         $id2 = $_GET['d_projectid'];
         $sql4 = "DELETE FROM live_projects WHERE project_id = '$id2'";
         $result4 = mysqli_query($conn, $sql4);
 
 
     }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        if (isset($_GET['u_projectid']))
        {
            $id2 = $_GET['u_projectid'];
            $project_name = $_POST['project_name'];
            $project_req = $_POST['project_req'];
            $proj_desc = $_POST['proj_desc'];
            $proj_deadline = $_POST['proj_deadline'];
            $proj_img_url = $_POST['proj_img_url'];
            $sql = "UPDATE live_projects SET project_name='$project_name' , project_req='$project_req', proj_desc='$proj_desc' , proj_deadline='$proj_deadline' , proj_img_url='$proj_img_url' WHERE project_id = '$id2'";
            $result = mysqli_query($conn, $sql);
            
        }

        else 
        {
           
            $project_name = $_POST['project_name'];
            $project_req = $_POST['project_req'];
            $proj_desc = $_POST['proj_desc'];
            $proj_deadline = $_POST['proj_deadline'];
            $proj_img_url = $_POST['proj_img_url'];
            $sql1 = "INSERT INTO live_projects (project_id, project_name, project_req, proj_desc, proj_deadline,proj_img_url) VALUES ('','$project_name', '$project_req', '$proj_desc', '$proj_deadline','$proj_img_url')";
          
            $result1 = mysqli_query($conn, $sql1);
            if($result1)
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Sucess : </strong> Saved
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            else
            {
      
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error : </strong> Not Saved
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
            }
    
    
            
    
        }
    }

   

    


  
?>