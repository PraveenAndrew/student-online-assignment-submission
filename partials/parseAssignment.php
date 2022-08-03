<?php 
include_once "../resources/database.php";

if(isset($_POST['upload']) && $_POST['upload'] == 'upload')  
{
   if(isset($_FILES['files']) && $_FILES['files']['error'] === UPLOAD_ERR_OK)
   {

       $fileTmpPath = $_FILES['files']['tmp_name'];
       $fileName = $_FILES['files']['name'];
       $fileSizes = $_FILES['files']['size'];
       $fileType = $_FILES['files']['type'];

       $fileNameCmps = explode(".",$fileName);
       // array([0] => cloud [1] =>pdf)  {cloud.pdf}

       $fileExtension = strtolower(end($fileNameCmps));
       $newFileName = $fileName.'.'.$fileExtension;
       $allowedfileExtension = array('pdf');
       
       if(in_array($fileExtension,$allowedfileExtension))
       {
           $upload = './upload_assignment';
           move_uploaded_file($fileTmpPath,$upload. '/' .$newFileName);

           $sn = $_POST['name'];
           $scn = $_POST['studentclassname'];
           $an = $_POST['assignmentname'];
           $sd = date('Y-m-d H:i:s',strtotime($_POST['submissiondate']));
    
           $sql = $con->prepare("insert into assignment(studentname,studentclassname,assignmentname,assignments,dateofsubmission)values(:n,:c,:an,:a,:dos)");

           $sql->execute(array(':n' => $sn,':c' => $scn,':an' => $an,':a'=>$newFileName,':dos'=>$sd));

           if($sql->rowCount() == 1 )
           {
            echo $welcome =  "<script type=\"text/javascript\">
            Swal.fire({
             title: 'success',
             text: 'file upload successfully',
             icon: 'success',
             timer: 4000,
             showConfirmButton: true });

              
           </script>";
           }
           else 
           {
                  echo "error";
           }

       }
   }

}



?>