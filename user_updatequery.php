<?php include ("connection.php");?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        session_start();
        if (isset($_SESSION['user_id']) && ($_SESSION['userlogin'] == true))
        {
            $id2 = $_SESSION['user_id'];
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $sql = "UPDATE users SET user_email= '$user_email' , user_password='$user_password', user_name = '$user_name' where user_id='$id2'";
            if (!mysqli_query($conn,$sql))
            {
                echo("Error description: " . mysqli_error($conn));
            }
            header('Location: user1_detail.php');
        }
    }
    else {
        echo'samp page';
    }

    
 


?>