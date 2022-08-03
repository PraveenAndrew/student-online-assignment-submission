<?php 
include_once "../resources/session.php";
include_once "../resources/sweetalert.php";
include_once "../resources/database.php";
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
                                   
                                      <li><a href="adminStudentsViewPage.php" class="logout"><i class="fa-solid fa-graduation-cap"></i>  Students Information</a></li>

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
                                     <li><a href="adminStudentsViewPage.php"><i class="fa-solid fa-graduation-cap"></i> Students Information</a></li>
                                     <li><a href="../admin/adminAssignment.php"><i class="fa-solid fa-pen"></i> Assignments  Details</a></li>
                                     <li><a href="chat.php"><i class="fa-solid fa-paper-plane"></i> Send Notification</a></li>
                                     <li><a href="adminPasswordChange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
                                     <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
                                     <li><a href="../admin/adminLogout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                              </ul>
         
                       </div>
                       
                       <!-- ends left sidebar -->
         
                
                       <!-- Admin content -->

                       <?php
                       
                       $query = $con->prepare("select * from message where status = 0");
                       $query->execute();

                       $count = $query->rowCount();
                       
                       while($row = $query->fetch())
                       {
                              $id = $row['id'];
                       }
                       ?>
                
                       <div class="right-sidebar">
                            <div class="content">

                               <div class="class1">
                                <p title="Notification"><span class="notify"><i class="fa-solid fa-bell"></i> <?php if($count != 0)echo $count; else echo $count = "No"; ?></span></p>
                                         <a href="../admin/adminMessageViewPage.php?messageid=<?php if(isset($id)) echo $id; else $id = 1; ?>">
                                               <h3 class="subject"> class: java class room</h3>
                                               <h5 class="professor">professor: jaga g</h5>
                                               <h6 class="college-name">collegeName: spiher</h6>
                                                
                                         </a>
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