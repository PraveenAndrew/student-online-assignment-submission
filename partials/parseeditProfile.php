<?php 
 include_once "../resources/database.php";
 include_once "../resources/sweetalert.php";

 if(isset($_POST['updateProfileBtn']))
 {
        $rollno = $_POST['rollno'];
        $name = $_POST['fullname'];
        $mobile = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $hidden_id = $_POST['hidden_id'];

        $sqlUpdate = "update students_information set rollno = :rollno, fullname = :fullname,mobile = :mobile,email = :email,address = :address where id = :id";

        $statments = $con->prepare($sqlUpdate);
        $statments->execute(array(':rollno' => $rollno,':fullname' => $name,':mobile' => $mobile,':email' => $email,':address' => $address,':id' => $hidden_id));
 
       if($statments->rowCount() == 1 )
       {
              echo $welcome =  "<script type=\"text/javascript\">
               Swal.fire({
               title: 'Updated!',
               text: 'Profile Update Successfully .',
               icon: 'success',
                 });
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
               </script>"; 
       }

}

?>