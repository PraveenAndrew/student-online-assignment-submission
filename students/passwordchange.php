<?php 
include_once "../resources/session.php";
include_once "../resources/sweetalert.php";
include_once "../partials/parseProfile.php";

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
                                   
                                      <li><a href="assignments.php" class="logout"><i class="fa-solid fa-pen"></i>  Assignment</a></li>
                                   
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
                
                       <div class="right-sidebar password_flex">
                        <div class="content">
                            <div class="password_change">
                              <div class="password_title">
                                   <h4>Password Management</h4>
                              </div>
        <form action="../partials/parsePasswordChange.php" method="POST">
              <div class="input_fields">
                    <h5><?php if(isset($r))echo $r; ?> </h5>
              </div>
              <div class="input_fields"> 
                <label for="">Current Password</label><br>
                <input type="password" name="currPass" placeholder="Current Password" required>
              </div>
              <div class="input_fields">
                 <label for="">New Password</label><br>
                 <input type="password" name="newPass" placeholder="New Password" required>
              </div>
              <div class="input_fields">
                 <label for="">Confirm Password</label><br>
                 <input type="password" name="confirmPassword" placeholder="Current Password" required>
              </div>
              <div class="input_fields">
                 <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                 <button type="submit" class="change_pass" name="changePassword">Change Password</button>
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
