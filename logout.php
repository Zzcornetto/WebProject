<?php  
session_start();

session_unset(); 
session_destroy(); 
//echo $_SESSION["checklogin"];
header('location:main.php');
?>