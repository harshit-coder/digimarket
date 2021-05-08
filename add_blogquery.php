<?php include ('connection.php');?>

<?php 
    if(isset($_GET['d_blogid']))
     {
         $id2 = $_GET['d_blogid'];
         $sql4 = "DELETE FROM blog WHERE blog_id = '$id2'";
         $result4 = mysqli_query($conn, $sql4);
 
 
     }
    else if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        if (isset($_GET['u_blogid']))
        {
            $id2 = $_GET['u_blogid'];
            $blog_name = $_POST['blog_name'];
            $blog_date = $_POST['blog_date'];
            $blog_desc = $_POST['blog_desc'];
            $blog_url = $_POST['blog_url'];
            $blog_image_url = $_POST['blog_image_url'];
            $sql = "UPDATE blog SET blog_name='$blog_name' , blog_date='$blog_date', blog_desc='$blog_desc' , blog_url='$blog_url' , blog_image_url='$blog_image_url' WHERE blog_id = '$id2'";
            $result = mysqli_query($conn, $sql);
            
        }

        else 
        {
           
            $blog_name = $_POST['blog_name'];
            $blog_date = $_POST['blog_date'];
            $blog_desc = $_POST['blog_desc'];
            $blog_url = $_POST['blog_url'];
            $blog_image_url = $_POST['blog_image_url'];
            $sql1 = "INSERT INTO blog  SET blog_id = '', blog_name='$blog_name', blog_date='$blog_date', blog_desc='$blog_desc', blog_url = '$blog_url' , blog_image_url='$blog_image_url'";
          
            $result1 = mysqli_query($conn, $sql1);
            if($result1)
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success : </strong> Saved
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            else
            {
      
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error : </strong> Not saved  ' . mysqli_error($conn) . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
            }
    
    
            
    
        }
    }

   

    


  
?>