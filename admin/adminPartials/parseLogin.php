<?php 
include_once "../resources/database.php"; 
include_once "../resources/sweetalert.php";
include_once "../resources/session.php";

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
        $adminNumber = $_POST['adminNumber'];
        $adminPassword = $_POST['adminPassword'];

       
        $query = $con->prepare("select * from admin_information where phone = ? AND password = ? ");
        $query->execute(array($adminNumber,$adminPassword));

       
       // $query = $con->prepare("select * from admin_information where phone = :phone AND password = :password");
       // $query->bindValue(":phone",$adminNumber);
       // $query->bindValue(":password",$adminPassword);
       // $query->execute();
        try 
        {
             if($query->rowCount() == 1)
            {
              while($row = $query->fetch())
              {
              $id = $row['id'];
              $name = $row['name'];
              $password = $row['password'];

              if($adminPassword == $password)
              {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;

                echo $welcome =  "<script type=\"text/javascript\">
                Swal.fire({
                 title: 'WELCOME BACK $name',
                 text: 'You are being logged in.',
                 icon: 'success',
                 timer: 5000,
                 showConfirmButton: false });
   
                setTimeout(function(){
   
                        window.location.href = '../admin/adminPages.php';
               },5000);
                  
               </script>";

              } 
              else 
              {
                     echo "your password is wrong";
              }
           
        }
        
       }
       else 
       {
              echo $welcome =  "<script type=\"text/javascript\">
              Swal.fire({
               title: 'Wrong Phone Number and Password',
               text: 'Check Your Mobile Number and Password',
               icon: 'error',
               timer: 5000,
               showConfirmButton: false });
 
              setTimeout(function(){
 
                      window.location.href = '../admin/adminLogin.php';
             },5000);
                
             </script>";

       }
     }
      catch(PDOException $e)
      {
             echo "some thing went wrong . $e";
      }
      
}

       
     
?>