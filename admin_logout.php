
<?php include ("connection.php");?>
<?php
    session_start();
    unset($_SESSION['admin_id']);
    $_SESSION['adminlogin'] = false;
   	header('Location: ../Mainwebsite/index.php');
?>
