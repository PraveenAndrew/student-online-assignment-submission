<?php 
include_once "../resources/database.php";

if(isset($_SESSION['id']))
{
       $id = $_SESSION['id'];
       $query = $con->prepare('select * from admin_information where id = :id');
       $query->bindParam(':id',$id,PDO::PARAM_INT);
       $query->execute();

              while($row = $query->fetch())
              {
              $id = $row['id'];
              $name = $row['name'];
              $class = $row['class'];
              $subject = $row['subject'];
              $subjectcode = $row['subject_code'];
              $gender = $row['gender'];
              $phone = $row['phone'];
              $dob = $row['dob'];
              $email = $row['email'];
              $password = $row['password'];
              }

              $admin_images = "adminPicture/".$name.".jpg";
              $defaultAdmin_images = "adminPicture/default.jpg";

              if(file_exists($admin_images))
              {
                     $profile_picture = $admin_images;
              }
              else 
              {
                     $profile_picture = $defaultAdmin_images;
              }
              $encode_id = base64_encode("iamawebdeveloper{$id}");
}




?>       