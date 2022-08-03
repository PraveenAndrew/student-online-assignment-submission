<?php    
include_once "./session.php";
unset($_SESSION['username']);
session_destroy();
header('Location: index.php');  
exit;  
?>