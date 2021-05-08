
<?php include ("connection.php");?>
<?php
    session_start();
    unset($_SESSION['user_id']);
    $_SESSION['userlogin'] = false;
   	header('Location: index.php');
	
?>
