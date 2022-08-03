<?php 
 
 $dsn = 'mysql:host=localhost;dbname=onlineassignmentsubmission';
 $user = 'root';
 $password = 'root';
 $error = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// $con = new PDO($dsn,$user,$password,$error);

try
{
       $con = new PDO($dsn,$user,$password,$error);
      //  echo "success";
}
catch(PDOException $ex)
{
   echo 'failed' .$ex->getMessage();
}
?>