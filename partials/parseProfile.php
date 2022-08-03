<?php 
include_once "../resources/database.php";

       if(isset($_SESSION['id']) || isset($_GET['user_identify']))
       {
              if(isset($_GET['user_identify']))
              {
                 $url_encoded_id = $_GET['user_identify'];
                 $decode_id = base64_decode($url_encoded_id);
                 $user_id_array = explode("encodeuserid",$decode_id);
                 $id = $user_id_array[1];
              }
              else 
              {
              $id = $_SESSION['id'];
              }
              $query = "select * from students_information where id = :id";
              $status = $con->prepare($query);
              $status->execute(array(':id'=>$id));

              while($row = $status->fetch())
              {
                     $rollno = $row['rollno'];
                     $username = $row['fullname'];
                     $deptment = $row['department'];
                     $gender = $row['gender'];
                     $dob = $row['dob'];
                     $mobile = $row['mobile'];
                     $email = $row['email'];
                     $address = $row['address'];

              }
              $user_pic = "upload_images/".$username.".jpg";
              $default = "../upload_images/defaultPic.jpg";

               if(file_exists($user_pic))
              {
                     $profile_picture = $user_pic;
              }
              else
              {
                     $profile_picture = $default;
              }

              $encode_id = base64_encode("encodeuserid{$id}");
             
       }
?>