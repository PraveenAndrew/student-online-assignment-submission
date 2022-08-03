<?php 
include_once "../resources/session.php";
include_once "../resources/sweetalert.php";
include_once "../admin/adminPartials/parseAdminPasswordChange.php";
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
                                     <li><a href="assignments.php"><i class="fa-solid fa-pen"></i> Assignments  Details</a></li>
                                     <li><a href="chat.php"><i class="fa-solid fa-paper-plane"></i> Send Notification</a></li>
                                     <li><a href="adminPasswordChange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                     <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                     <li><a href="../admin/adminLogout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                              </ul>
         
                       </div>
                       
                       <!-- ends left sidebar -->
         
                
                       <!-- Admin content -->
                
 <div class="right-sidebar">
   <div class="right-sidebar password_flex">
    <div class="content">
     <div class="password_change">
      <div class="password_title">
        <h4>Password Management</h4>
       </div>
     <form action="" method="POST">
              <div class="input_fields">
                    <h5><?php if(isset($r))echo $r; ?> </h5>
              </div>
              <div class="input_fields"> 
                <label for="">Current Password</label><br>
                <input type="password" name="admincurrPass" placeholder="Current Password">
              </div>
              <div class="input_fields">
                 <label for="">New Password</label><br>
                 <input type="password" name="adminnewPass" placeholder="New Password">
              </div>
              <div class="input_fields">
                 <label for="">Confirm Password</label><br>
                 <input type="password" name="adminconfirmPassword" placeholder="Current Password">
              </div>
              <div class="input_fields">
                 <input type="hidden" name="hiddenid" value="<?php if(isset($id)) echo $id; ?>">
                 <button type="submit" class="change_pass" name="adminChangePassword">Change Password</button>
              </div>
       </form>
     </div>
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