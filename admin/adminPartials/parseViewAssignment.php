<?php 
include_once "../resources/database.php";

 $sql = "select * from assignment";
 $s = $con->prepare($sql);
 $s->execute();

 if(isset($_GET['fileid']))
{
       $assignmentid = $_GET['fileid'];
       $sql2 = "select * from assignment where sno = :sno";
       $ss = $con->prepare($sql2);
       $ss->execute(array(':sno' => $assignmentid));
       $fetch = $ss->fetch();

       $filePath = "studentsUploadFiles/" . $fetch['assignments'];
       if(file_exists($filePath))
       {
        header('Content-type: application/pdf');
        header('Content-Description: inline; filename='.basename($filePath));
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        readfile($filePath);
       }
       else 
       {
              echo $welcome =  "<script type=\"text/javascript\">
                Swal.fire({
                 title:'error',
                 text: 'sorry file doesnot exist!',
                 icon: 'error',
                 timer: 5000,
                 showConfirmButton: true });
                  
               </script>";
       }
}
elseif(isset($_GET['filedownloadid']))
{
       $assignmentid = $_GET['filedownloadid'];
       $sql2 = "select * from assignment where sno = :sno";
       $ss = $con->prepare($sql2);
       $ss->execute(array(':sno' => $assignmentid));

       $fetch = $ss->fetch();

       $filePath = "studentsUploadFiles/" . $fetch['assignments'];
       echo $filePath;
       if(file_exists($filePath))
 {
   header('Content-Description: File Transfer');
   header('Content-Type: application/file');
   header('Content-Disposition: attachment; filename=' .basename($filePath));
   header('Expires: 0');
   header('Pragma: public');
   readfile($filePath);
}
       else 
       {
              echo $welcome =  "<script type=\"text/javascript\">
                Swal.fire({
                 title: 'error',
                 text: 'sorry file doesnot not exit!',
                 icon: 'error',
                 timer: 5000,
                 showConfirmButton: true });
                  
               </script>";
       }
}

?>