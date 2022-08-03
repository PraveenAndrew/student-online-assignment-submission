<?php    
include_once "../admin/resources/session.php";
unset($_SESSION['name']);
session_destroy();
header('Location: ../students/index.php');  
exit;  
?>