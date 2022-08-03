<?php 
include_once "../resources/database.php";
include_once "../resources/sweetalert.php";

  if(isset($_POST['adminUpdateProfile']))
 {
      $name = $_POST['name'];
      $class = $_POST['class'];
      $subject = $_POST['subject'];
      $subjectcode = $_POST['subjectcode'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $hidden = $_POST['hidden_id'];

      $query = "update admin_information set name = :name, class = :class, subject = :subject, subject_code = :subjectcode, phone = :phone, email = :email where id = :id";

      $s = $con->prepare($query);
      $s->execute(array(':name' => $name, ':class' => $class, 'subject' => $subject, 'subjectcode' => $subjectcode, ':phone' => $phone, ':email' => $email, ':id' => $hidden));

      if($s->rowCount() == 1)
      {
       echo $welcome =  "<script type=\"text/javascript\">
       Swal.fire({
       title: 'Updated!',
       text: 'Profile Update Successfully .',
       icon: 'success',
         });
         setTimeout(function(){
   
              window.location.href = '../adminProfile.php';
     },1500);
        </script>";
      }
      else 
      {
       echo $welcome =  "<script type=\"text/javascript\">
       Swal.fire({
       title: 'Nothing Happened',
       text: 'You have not made any changes .',
       confirmButtonText: 'OK',
       icon: 'info',
       });
       setTimeout(function(){
   
              window.location.href = '../edit-AdminProfile.php';
     },1500);
        </script>"; 
      }

      
 }
?>