<?php 
include_once "../resources/session.php";
include_once "../resources/sweetalert.php";
include_once "../resources/database.php";
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
         
                       <?php
                       
                       $query = $con->prepare("select * from message where status = 0");
                       $query->execute();

                       $count = $query->rowCount();
                       
                       while($row = $query->fetch())
                       {
                              $id = $row['id'];
                       }
                       ?>
                
                       <!-- Admin content -->
                
                       <div class="right-sidebar">
                          <div class="content">
                              <div class="class1">
                                <p title="Notification"><span class="notify"><i class="fa-solid fa-bell"></i> <?php if($count != 0)echo $count; else echo $count = "No"; ?></span></p>
                                         <a href="../students/studentsMessageViewpage.php?<?php if(isset($id)) echo $id; else $id = 1; ?>">
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