<?php 
include_once "../resources/database.php";

 $query = "select * from students_information";
 $sqlQuery = $con->prepare($query);
 $sqlQuery->execute();
 
  if(isset($_GET['deleteid']))
  {
         $deleteId = $_GET['deleteid'];

         $query1 = "delete from students_information where id = :id";
         $sqlQuery1 = $con->prepare($query1);
         $sqlQuery1->execute(array(':id' => $deleteId));

         if($sqlQuery1 == true)
         {
              echo $welcome =  "<script type=\"text/javascript\">
              Swal.fire({
               title: 'Operation Successfully',
               text: 'successfully delete the data',
               icon: 'success',
               timer: 4000,
               showConfirmButton: true });
                
             </script>";
         }
         else 
         {
              echo $welcome =  "<script type=\"text/javascript\">
              Swal.fire({
               title: 'error',
               text: 'something went wrong! please try again',
               icon: 'error',
               timer: 4000,
               showConfirmButton: true });

                
             </script>";
         }
  }

?>