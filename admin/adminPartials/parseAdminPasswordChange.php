<?php 
include_once "../resources/database.php";
include_once "../resources/sweetalert.php";

if(isset($_POST['adminChangePassword']))
{
       $id = $_POST['hiddenid'];
       $curr = $_POST['admincurrPass'];
       $newPass = $_POST['adminnewPass'];
       $confirmPass = $_POST['adminconfirmPassword'];

       if($newPass != $confirmPass)
       {
              echo $welcome =  "<script type=\"text/javascript\">
              Swal.fire({
               title: 'Error',
               text: 'New Password and Confirm Password Does not Match',
               icon: 'error',
               timer: 4000,
               showConfirmButton: true});
 
              setTimeout(function(){
 
                      window.location.href = '../admin/adminPasswordChange.php';
             },4000);
                
             </script>";
       }
       else 
       {
              try 
              {
                     $sqlSquery = "select password from admin_information where id = :id";
                     $s = $con->prepare($sqlSquery);

                     $s->execute(array(':id' => $id));

                     if($r = $s->fetch())
                     {
                         $password_from_db = $r['password'];

                         if($password_from_db == $curr)
                         {
                                      $sqlUpdate = "update admin_information set password = :password where id = :id";
                                      $s = $con->prepare($sqlUpdate);
                                      $s->execute(array(':password' => $newPass, ':id' => $id));

                                      if($s->rowCount() == 1)
                                      {
                                          echo $welcome =  "<script type=\"text/javascript\">
                                          Swal.fire({
                                           title: 'Operation Successful',
                                           text: 'you passsword was updated successfully',
                                           icon: 'success',
                                           timer: 3000,
                                           showConfirmButton: true });
                             
                                          setTimeout(function(){
                             
                                                  window.location.href = '../admin/adminPasswordChange.php';
                                         },3000);
                                            
                                         </script>";
                                      }
                                      else 
                                      {
                                          echo $welcome =  "<script type=\"text/javascript\">
                                          Swal.fire({
                                           title: 'Warning',
                                           text: 'Not Changes Saved',
                                           icon: 'warning',
                                           timer: 4000,
                                           showConfirmButton: false });
                             
                                          setTimeout(function(){
                             
                                                  window.location.href = '../admin/adminPasswordChange.php';
                                         },4000);
                                            
                                         </script>";
                                      }
                         }
                         else 
                         {
                            echo $welcome =  "<script type=\"text/javascript\">
                            Swal.fire({
                             title: 'OOPS',
                             text: 'old password is not correct,please try again',
                             icon: 'error',
                             timer: 5000,
                             ConfirmButtonText: true });
               
                            setTimeout(function(){
               
                                    window.location.href = '../admin/adminPasswordChange.php';
                           },5000);
                              
                           </script>";
                         }
                     }
                     else 
                     {

                     }
              }
              catch(PDOException $e)
              {
                 echo "error occured . $e";
              }

       }
}


?>