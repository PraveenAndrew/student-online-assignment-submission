<?php 
include_once "../resources/database.php";
include_once "../resources/sweetalert.php";

if(isset($_POST['changePassword'])) 
{
     $hidden_id = $_POST['hidden_id'];
     $current_password = $_POST['currPass'];
     $new_password = $_POST['newPass'];
     $confirm_password = $_POST['confirmPassword'];

     if($new_password != $confirm_password)
     {
       echo $r =  "<script type=\"text/javascript\">
       Swal.fire({
       title: 'Error',
       text: 'New Password and Old Password Doesn't Match!',
       timer:2000,
       icon: 'error',
       confirmButtonText: 'Thank You' });

       setTimeout(function(){

              window.location.href = '../students/passwordchange.php';
     },2000);
       </script>";

     }
     else 
     {
            try 
            {
                   $sql = $con->prepare('select password from students_information where id = :id');
                   $sql->execute(array(':id' => $hidden_id));

                   if($r= $sql->fetch())
                   {
                          $password_from_db = $r['password'];

                          if($current_password == $password_from_db)
                          {
                                 $query = $con->prepare('update students_information set password = :password where id = :id');
                                 $query->execute(array(':password' => $new_password,':id' => $hidden_id));

                                 if($query->rowCount() == 1)
                                 {
                                   echo $r =  "<script type=\"text/javascript\">
                                   Swal.fire({
                                   title: 'Operation Successfully',
                                   text: 'You password was updated successfully',
                                   timer:4000,
                                   icon: 'success',
                                   confirmButtonText: 'Thank You' });

                                   setTimeout(function(){
         
                                          window.location.href = '../students/studentsAdmin.php';
                                 },4000);
                                   </script>";
                                 }
                                 else 
                                 {
                                   echo $r =  "<script type=\"text/javascript\">
                                   Swal.fire({
                                   title: 'Error',
                                   text: 'Not Changed Saved',
                                   timer:4000,
                                   icon: 'error',
                                   confirmButtonText: 'Thank You' });

                                   setTimeout(function(){
         
                                          window.location.href = '../students/passwordchange.php';
                                 },4000);
                                   </script>";
                                 }
                          }
                          else 
                          {
                            echo $r =  "<script type=\"text/javascript\">
                            Swal.fire({
                            title: 'Warning',
                            text: 'Current Password not correct ! Please enter correctly',
                            timer:4000,
                            icon: 'warning',
                            confirmButtonText: 'Ok' });

                            setTimeout(function(){
  
                                   window.location.href = '../students/passwordchange.php';
                          },4000);
                            </script>";
                          }

                   }
                   else 
                   {
                     echo $error = "something went wrong";
                   }
            }
            catch(PDOException $e)
            {
                   $error = $e->getMessage();
            }
     }
}

?>