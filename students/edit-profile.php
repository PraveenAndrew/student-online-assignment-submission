<?php
 include_once "../partials/parseProfile.php";
 include_once "../partials/parseeditProfile.php";
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
         
                            
         
                              <div class="form">
                               <form action="" method="post">
                                <h1 class="form-title">Edit Profile</h1>
                 
                            <div>
                                   <label class="labels" for="rollno">Rollno</label>
                                   <input type="text" name="rollno" id="rollno" class="text-input" value="<?php if(isset($rollno)) echo $rollno; ?>"><br>
                            </div>
                            <div>
                                   <label class="labels" for="fullname">Full Name</label>
                                   <input type="text" name="fullname" id="fullname" class="text-input" value="<?php if(isset($username)) echo $username; ?>"><br>
                            </div>
                            
                            <div>
                                   <label class="labels" for="number">whatsapp No</label>
                                   <input type="number" name="number" id="number" class="text-input" value="<?php if(isset($mobile)) echo $mobile; ?>"><br>
                                   
                            </div>
                            <div>
                                   <label class="labels" for="email">Email</label>
                                   <input type="email" name="email" id="emails" class="text-input" value="<?php if(isset($email)) echo $email;  ?>"><br>
                                  
                            </div>
                            <div>
                                   <label class="labels" for="address">Address</label>
                                   <textarea name="address" id="address" class="text-input" ><?php if(isset($address)) echo $address; ?></textarea><br>
                                  
                            </div><br>

                            <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">

                            <button type="submit" class="btn btn-big" name="updateProfileBtn">Update Profile</button>

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