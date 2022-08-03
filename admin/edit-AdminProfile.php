<?php 
include_once "../resources/session.php";
include_once "../resources/sweetalert.php";
include_once "../admin/adminPartials/parseProfile.php";

?>
           <section class="dashboard_header">

           <div class="fa-solid fa-bars" id="menu-click"></div>

                     <div class="logo">
                    
                            <h1 class="text">Welcome  <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
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
                                     <li><a href="../admin/adminStudentsViewPage.php"><i class="fa-solid fa-graduation-cap"></i> Students Information</a></li>
                                     <li><a href="../admin/adminAssignment.php"><i class="fa-solid fa-pen"></i> Assignments  Details</a></li>
                                     <li><a href="chat.php"><i class="fa-solid fa-paper-plane"></i> Send Notification</a></li>
                                     <li><a href="adminPasswordChange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                     <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                     <li><a href="../admin/adminLogout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                              </ul>
         
                       </div>
                       
                       <!-- ends left sidebar -->
         
                
                       <!-- Admin content -->
                
                       <div class="right-sidebar">
         
                <div class="form">
                     <form action="../admin/adminPartials/parseAdminEditProfile.php" method="post">
                           <h1 class="form-title">Edit Profile</h1>
                 
                            <div>
                                   <label class="labels" for="fullname">FullName</label>
                                   <input type="text" name="name" id="fullname" class="text-input" value="<?php if(isset($name)) echo $name; ?>"><br>
                            </div>
                            <div>
                                   <label class="labels" for="class">Class Taken</label>
                                   <input type="text" name="class" id="fullname" class="text-input" value="<?php if(isset($class)) echo $class; ?>"><br>
                            </div>
                            
                            <div>
                                   <label class="labels" for="subject">Subject</label>
                                   <input type="text" name="subject" id="subject" class="text-input" value="<?php if(isset($subject)) echo $subject; ?>"><br>
                            </div>
                            <div>
                                   <label class="labels" for="subjectcode">Subject Code</label>
                                   <input type="text" name="subjectcode" id="subjectcode" class="text-input" value="<?php if(isset($subjectcode)) echo $subjectcode; ?>"><br>
                            </div>
                            <div>
                                   <label class="labels" for="phone">Phone Number</label>
                                   <input type="number" name="phone" class="text-input" id="phone" value="<?php if(isset($phone)) echo $phone; ?>">
                            </div>
                            <div>
                                   <label class="labels" for="email">Email</label>
                                   <input type="email" name="email" id="emails" class="text-input" value="<?php if(isset($email)) echo $email;  ?>"><br>
                            </div> 
                            <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">

                            <button type="submit" class="btn btn-big" name="adminUpdateProfile">Update Profile</button>
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