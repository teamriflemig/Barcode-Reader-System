<?php
ob_start();
//Unset the variables stored in session
unset($_SESSION['ID']);
unset($_SESSION['username']);
unset($_SESSION['user_type']);
session_destroy();
header("location: LoginSys.php");
exit();
?>
