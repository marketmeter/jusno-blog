<?php 
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['user_id']);
unset($_SESSION['market_id']);

session_destroy();
header("location:login.php");
?>
