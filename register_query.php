<?php include ("connection.php");?>

<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        if (!$conn)
        {
          die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else
        { 
     
            $sql = "INSERT INTO users (user_id, user_name, user_password , user_email) VALUES ('','$user_name','$user_password','$user_email')";

            $result = mysqli_query($conn, $sql);

            if ($result)
            {
               header('Location: user_login.php');
            }

            else

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Error : </strong>This Password is already there use another one
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

            ;
        }
    }
?>