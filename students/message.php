<?php 
      include_once "../resources/database.php";
      include_once "../resources/session.php"; 
      include_once "../resources/sweetalert.php";

      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
             $name = $_POST['senderName'];
             $message = $_POST['senderMessage'];
             $date = date('Y-m-d H:i:s');
             
             $sql = $con->prepare("insert into message(name,message, create_date)values(:name,:message,:date)");
             $sql->execute(array(':name' => $name, ':message' => $message, ':date' => $date));

             if($sql->rowCount() == 1)
             {
              echo $welcome =  "<script type=\"text/javascript\">
              Swal.fire({
               title: 'success',
               text: '❤️❤️❤️ Message Sent To Everyone ❤️❤️❤️',
               icon: 'success',
               timer: 4000,
               showConfirmButton: true });

               setTimeout(function()
               {
                      window.location.href = 'message.php';
               },4000);

                
             </script>";
             }
             else 
             {
              echo $welcome =  "<script type=\"text/javascript\">
              Swal.fire({
               title: 'error',
               text: 'Message Not Sent Something Went Wrong!',
               icon: 'error',
               timer: 6000,
               showConfirmButton: true });
                
             </script>";
             }
      }






?>
             
           <section class="dashboard_header">

           <div class="fa-solid fa-bars" id="menu-click"></div>

                     <div class="logo">
                    
                            <h1 class="text"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
                     </div>
                     
                       <ul class="nav">
                        <li>
                            <a href=""><i class="fa-solid fa-user"></i> <span id="studentName"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></span> <i class="fa-solid fa-caret-down" id="studentName"></i></a>
                               <ul>
                                   
                                      <li><a href="adminPages.php" class="logout"><i class="fa-solid fa-chalkboard-user"></i> Dashboard</a></li>
                                   
                                      <li><a href="adminProfile.php" class="logout"><i class="fa-solid fa-address-card"></i>  Profile</a></li>

                                      <li><a href="../admin/adminStudentsViewPage.php" class="logout"><i class="fa-solid fa-graduation-cap"></i>  Students Information</a></li>

                                      <li><a href="../admin/adminAssignment.php" class="logout"><i class="fa-solid fa-pen"></i>  Assignments Details</a></li>
                                   
                                   
                                      <li><a href="../admin/adminLogout.php" class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Logout</a></li>
                               </ul>
                        </li>
                      </ul>
                    
             </section>

               <!-- Admin Page Wrapper -->

                <section class="admin-wrapper">
                       
                       <!-- left sidebar -->
         
                       <div class="left-sidebar">
         
                              <ul>
                                     <li><a href="../students/studentsAdmin.php"><i class="fa-solid fa-chalkboard-user"></i> Dashboard</a></li>
                                     <li><a href="../students/profile.php"><i class="fa-solid fa-address-card"></i> Profile</a></li>
                                     <li><a href="assignments.php"><i class="fa-solid fa-pen"></i> Assingnment</a></li>
                                     <li><a href="message.php"><i class="fa-solid fa-paper-plane"></i> Send Notification</a></li>
                                     <li><a href="passwordchange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                     <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                     <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                              </ul>
         
                       </div>
                       
                       <!-- ends left sidebar -->
         
                
                       <!-- Admin content -->
                
                       <div class="right-sidebar messager">

                        <div class="chat">
                               <div class="title">
                                 <h2>Chat With Everyone</h2>
                               </div>
                               <form action="#" method="POST">
                                      <div>
                                             <label for="">Name</label><br>
                                             <input type="text" name="senderName" id="" placeholder="Enter your name here" class="namefield">
                                      </div>
                                      <div>
                                             <label for="">Message</label><br>
                                             <textarea name="senderMessage" id="" cols="30" rows="10" class="namefield" placeholder="Enter your messae here"></textarea>
                                      </div>

                                      <button type="submit" class="sentbtn" name="send"><i class="fa-solid fa-paper-plane"></i> Sent</button>
                               </form>
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