<?php 
      include_once "../resources/session.php";
      include_once "../partials/parseProfile.php";
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

                                      <li><a href="assignments.php" class="logout"><i class="fa-solid fa-pen"></i>   Assingnment</a></li>
                                   
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
                
                       <div class="right-sidebar">
         
                            
         
                             
                              <!-- <div class="content">  -->

                             
              <div style="margin-bottom: 10px;">
                     <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" width="200" alt="server prblm">
              </div>
                                   
                                   <table border="1" class="profile">
                                          <tr>
                                                 <th>Rollno:</th><td><?php if(isset($rollno)) echo $rollno  ?></td>
                                          </tr>
                                          <tr>
                                                 <th>FullName:</th><td><?php if(isset($username)) echo $username  ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Class:</th><td><?php if(isset($deptment)) echo $deptment ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Gender:</th><td><?php if(isset($gender)) echo $gender ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Date Of Birth:</th><td><?php if(isset($dob)) echo $dob ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Phone Number:</th><td><?php if(isset($mobile)) echo $mobile ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Email:</th><td><?php if(isset($email)) echo $email ?></td>
                                          </tr>
                                          <tr>
                                                 <th>Address:</th><td><?php if(isset($address)) echo $address ?></td>
                                          </tr>
                                          <tr>
                                                 <th></th><td><a href="edit-profile.php?user_identify=<?php if(isset($encode_id)) echo $encode_id; ?>"><span class="edit"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</span></a></td>
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