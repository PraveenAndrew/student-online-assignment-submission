<?php 
 include_once "../resources/database.php";
 include_once "../resources/sweetalert.php";
 
     if(isset($_POST['registerBtn']))
     {
              $welcome = '';

              $rollno = $_POST['rollno'];
              $name = $_POST['fullname'];
              $dept = $_POST['department'];
              $gender = $_POST['gender'];
              $dob = date('Y-m-d',strtotime($_POST['dateofbirth']));
              $phone = $_POST['number'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $password = $_POST['password'];
              $confirmpassword = $_POST['confirmpassword'];

              // $hash_password = password_hash($password,PASSWORD_DEFAULT);
              // $hash_confirmpassword = password_hash($confirmPassword,PASSWORD_DEFAULT);

              $statments = $con->prepare("insert into students_information (rollno,fullname,department,gender,dob,mobile,email,address,password,confirmpassword)values(:rollno,:fullname,:department,:gender,:dob,:mobile,:email,:address,:password,:confirmpassword)");

              $statments->execute(array(':rollno' => $rollno,':fullname' =>  $name,':department' =>  $dept,':gender' =>  $gender,':dob' => $dob,':mobile' =>  $phone,':email' =>  $email,':address' =>  $address,':password' => $password,':confirmpassword' =>  $confirmpassword));

               if($statments->rowCount() == 1)
             {
               echo $welcome =  
                   "<script type=\"text/javascript\">
                            Swal.fire(
                            {
                                   title: 'Congratulations $name',
                                   text: 'Registration Successfully Completed!',
                                   icon: 'success',
                                   timer: 2000,
                                   showConfirmButton: false });
                     
                                   setTimeout(function(){
                     
                                          window.location.href = 'login.php';
                           },2000);
                
                  </script>";
             }
       else
       {
              echo $welcome =  
              "<script type=\"text/javascript\">
                       Swal.fire(
                       {
                              title: 'Congratulations $name',
                              text: 'Registration Successfully Completed!',
                              icon: 'error',
                              timer: 2000,
                              showConfirmButton: false });
           
             </script>";
       }
    }
//     else 
//     {
//            echo $welcome = "someting went wrong please try again in later";
//     }


?>