<?php include ("connection.php");?>
<?php

   $adminlogin = false;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
        if (isset($_POST['admin']))
        {
            $admin_name=$_POST["admin_name"];
            $admin_password=$_POST["admin_password"];
            $sql = "SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_password='$admin_password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $admin_id = $row['admin_id'];
                    $adminlogin = true;
                    $_SESSION['admin_id'] = $admin_id;
                    $_SESSION['adminlogin'] = $adminlogin ;
                    header('Location: ../admin/admin_homepage.php');
                }
            }
            else
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error : </strong> Wrong ID
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';


            }
        }
   }
?>