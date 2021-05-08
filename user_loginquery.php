<?php include ("connection.php");?>

<?php

   $userlogin = false;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {    
        if(isset($_POST['user']))
        {
            $user_email=$_POST["user_email"];
            $user_password=$_POST["user_password"];
            $sql = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if($num == 1)
            {
                $userlogin = true;
                while($row = mysqli_fetch_assoc($result))
                {
                    $userlogin = true;
                    $user_id= $row["user_id"];
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['userlogin'] = $userlogin ;
                    header('Location: index.php');
                }
            }
            else
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Error : </strong> Wrong ID or Password, No data found
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';


            }
        }
   }
?>