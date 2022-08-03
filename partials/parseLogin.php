<?php 

  include_once "../resources/sweetalert.php";
  include_once "../resources/database.php";
  include_once "../resources/session.php";
 
 if(isset($_POST['loginBtn']))
 {
        $phone = $_POST['number'];
        $password = $_POST['password'];
       //  $hash_password = password_hash($password,PASSWORD_DEFAULT);

       //  echo $hash_password;

        $query = $con->prepare("select * from students_information where mobile = :phone");
        $query->bindValue(":phone",$phone);
        $query->execute();
        if($phone != $query)
        {
                $welcome = "invalid phone";
        }
        while($row = $query->fetch())
        {
               $id = $row['id'];
               $name = $row['fullname'];
               $hash_confirmpassword = $row['password'];
              //  echo $id;
              //  echo $name;
              //  echo $hash_confirmpassword;
              if($password == $hash_confirmpassword)
               {
                      $_SESSION['id'] = $id;
                      $_SESSION['name'] = $name;

                      echo $welcome =  "<script type=\"text/javascript\">
                      Swal.fire({
                       title: 'welcome back $name',
                       text: 'You are being logged in.',
                       icon: 'success',
                       timer: 5000,
                       showConfirmButton: false });
         
                      setTimeout(function(){
         
                              window.location.href = 'studentsAdmin.php';
                     },5000);
                        
                     </script>";
               } 
               else 
               {
                      echo $welcome = "invalid phone number and password";
               }
        }
 }



?>