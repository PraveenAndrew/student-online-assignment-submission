<?php 
      include_once "../resources/session.php";
      include_once "../admin/adminPartials/parseProfile.php"; 
      include_once "../resources/sweetalert.php";
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
                                     <li><a href="adminPages.php"><i class="fa-solid fa-chalkboard-user"></i> Dashboard</a></li>
                                     <li><a href="adminProfile.php"><i class="fa-solid fa-address-card"></i> Profile</a></li>
                                     <li><a href="../admin/adminStudentsViewPage.php" class="logout"><i class="fa-solid fa-graduation-cap"></i>  Students Information</a></li>
                                     <li><a href="../admin/adminAssignment.php" class="logout"><i class="fa-solid fa-pen"></i>  Assignments Details</a></li>
                                     <li><a href="chat.php"><i class="fa-solid fa-paper-plane"></i> Send Notification</a></li>
                                     <li><a href="adminPasswordChange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                     <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                     <li><a href="../admin/adminLogout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                              </ul>
         
                       </div>
                       
                       <!-- ends left sidebar -->
         
                
                       <!-- Admin content -->
                
                       <div class="right-sidebar">
         
                            
         
                             
                              <!-- <div class="content">  -->

                             
              <div style="margin-bottom: 10px;">
                     <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" width="200" alt="server prblm">
              </div>
                                   
                                   <table border="1" class="profile">
                                          <tr>
                                                 <th>Full Name:</th><td><?php if(isset($name)) echo $name;  ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Class Taken:</th><td><?php if(isset($class)) echo $class;  ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Subject:</th><td><?php if(isset($subject)) echo $subject ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Subject Code:</th><td><?php if(isset($subjectcode)) echo $subjectcode ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Gender:</th><td><?php if(isset($gender)) echo $gender ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Date Of Birth:</th><td><?php if(isset($dob)) echo $dob ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Phone Number:</th><td><?php if(isset($phone)) echo $phone ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Email:</th><td><?php if(isset($email)) echo $email ?></td>
                                          </tr>
                                          <tr>
                                                 <th></th><td><a href="edit-AdminProfile.php?user_identify=<?php if(isset($encode_id)) echo $encode_id; ?>"><span class="edit"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</span></a></td>
                                          </tr>
                                   </table>


                              <!-- </div> -->
         
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