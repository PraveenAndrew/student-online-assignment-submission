<?php 
include_once "../resources/session.php";
include_once "../resources/sweetalert.php";

?>
            
           <section class="dashboard_header">

           <div class="fa-solid fa-bars" id="menu-click"></div>

                     <div class="logo">
                    
                            <h1 class="text"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
                     </div>
                    
                      <!-- <div class="fa-solid fa-bars" id="menu-click"></div> -->
                     
                       <ul class="nav">
                        <li>
                            <a href=""><i class="fa-solid fa-user"></i> <span id="studentName"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></span> <i class="fa-solid fa-caret-down" id="studentName"></i></a>
                               <ul>
                                   
                                      <li><a href="studentsAdmin.php" class="logout"><i class="fa-solid fa-chalkboard-user"></i> Dashboard</a></li>
                                   
                                      <li><a href="profile.php" class="logout"><i class="fa-solid fa-address-card"></i>  Profile</a></li>

                                      <li><a href="assignments.php" class="logout"><i class="fa-solid fa-pen"></i> Assignment</a></li>
                                   
                                      <li><a href="logout.php" class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Logout</a></li>
                               </ul>
                        </li>
                      </ul>
                    
             </section>

               <!-- Admin Page Wrapper -->

                <section class="admin-wrapper">
                       
                       <!-- left sidebar -->
         
                       <div class="left-sidebar">
         
                              <ul>
                                     <li><a href="studentsAdmin.php"><i class="fa-solid fa-chalkboard-user"></i> Dashboard</a></li>
                                     <li><a href="profile.php"><i class="fa-solid fa-address-card"></i> Profile</a></li>
                                     <li><a href="assignments.php"><i class="fa-solid fa-pen"></i> Assingnment</a></li>
                                     <li><a href="message.php"><i class="fa-solid fa-paper-plane"></i> Sent Notification</a></li>
                                     <li><a href="passwordchange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                     <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                     <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                              </ul>
         
                       </div>
                       
                       <!-- ends left sidebar -->
         
                
                       <!-- Admin content -->
                
                       <div class="right-sidebar assignment_flex">
         
                            
         
                          <div>
                                  <div class="assignment_submission">
                                         <div class="title">
                                           <h1>Upload Assignments</h1>
                                         </div>
                                    
                                    <form action="assignments.php" method="post" enctype="multipart/form-data">
                                          <div class="input_fields">
                                                <label for="">Students Name:</label>
                                                <input type="text" name="name" id="" class="input" >
                                          </div>
                                          <div class="input_fields">
                                                <label for="">Students Class:</label>
                                                <input type="text" name="studentclassname" id="" class="input">
                                          </div>
                                          <div class="input_fields">
                                                <label for="">Assingnment Name:</label>
                                                <input type="text" name="assignmentname" id="" class="input">
                                          </div>
                                          <div class="input_fields">
                                                <label for="">Upload Assingnment:</label>
                                                <input type="file" name="files" id="" class="input" accept=".pdf" >
                                          </div>
                                          <div class="input_fields">
                                                <label for="">Submission Date:</label>
                                                <input type="datetime-local" name="submissiondate" id="" class="input">
                                          </div>
                                          <div class="input_fields">
                                            <input type="submit" name="upload"  value="Upload" class="upload_btn">
                                          </div>

                                    </form>
                                </div>
                             </div>
                        </div>
         
                       <!-- ends Admin content -->
               
            </section>

            <!-- custom js -->
        <script>
              
         var clicker = document.querySelector('#menu-click');
         var show = document.querySelector('.left-sidebar');

       clicker.addEventListener('click', () =>{
         show.classList.toggle('left-sliderbar-show');
   })
        </script>
</body>
</html>

<?php 
include_once "../resources/database.php";

if(isset($_POST['upload']))  
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
       $newFileName = $fileName; //.'.'.$fileExtension;

       $allowedfileExtension = array('pdf');

       if(in_array($fileExtension,$allowedfileExtension))
       {
              $upload = '../admin/studentsUploadFiles/';
              $destination =   $upload . $fileName;

        if(move_uploaded_file($fileTmpPath,$destination))
        {
 
              $sn = $_POST['name'];
              $scn = $_POST['studentclassname'];
              $an = $_POST['assignmentname'];
              $a = $_FILES['files']['name'];
              $sd = date('Y-m-d H:i:s',strtotime($_POST['submissiondate']));

              $sql = $con->prepare("insert into assignment(studentname,	studentclassname,assignmentname,assignments,dateofsubmission)values(:n,:c,:an,:a,:dos)");

              $sql->execute(array(':n' => $sn,':c' => $scn,':an' => $an,':a'=>$newFileName,':dos'=>$sd));

              if($sql->rowCount() == 1 ) 
              {
                    
              echo $welcome =  
                      "<script type=\"text/javascript\">
                            Swal.fire(
                            {
                                   title: 'Good Job!',
                                   text: 'Assignment Uploaded Successfully!😎👍😎',
                                   icon: 'success',
                                   timer: 5000,
                                   showConfirmButton:true
                             });

                             setTimeout(function(){
                     
                                   window.location.href = 'assignments.php';
                    },5000);
                
                  </script>";
              }
              else 
              {
                     echo $welcome =  
                      "<script type=\"text/javascript\">
                            Swal.fire(
                            {
                                   title: 'OOPS',
                                   text: 'Something went wrong Happened!😜😜😜 please try again',
                                   icon: 'error',
                                   timer: 5000,
                                   showConfirmButton:true
                             });

                             setTimeout(function(){
                     
                                   window.location.href = 'assignments.php';
                    },5000);
                
                  </script>";
              }
       }
  }
       else 
       {
              echo $welcome =  
              "<script type=\"text/javascript\">
                    Swal.fire(
                    {
                           title: 'Sorry',
                           text: 'Only PDF Format allow not others!😇😇😇',
                           icon: 'warning',
                           timer: 5000,
                           showConfirmButton:true
                     });

                     setTimeout(function(){
             
                           window.location.href = 'assignments.php';
            },5000);
        
          </script>";
       }

   }
}
?>