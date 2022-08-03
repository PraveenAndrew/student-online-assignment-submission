<?php 
      include_once "../resources/session.php";
      include_once "../admin/adminPartials/parseProfile.php"; 
      include_once "../resources/sweetalert.php";
      include_once "../admin/adminPartials/parseViewAssignment.php";

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
           
                       <!-- php code of assignments fetch from database -->

                
                       <!-- Admin content -->
                       <div class="right-sidebar">
                        <div class="content">
                          <h2 class="page-title">Studendts Assignments Details</h2>
                       <table class="studentAssignment">
                        <thead>
                         <th>S.no</th>
                         <th>Students Name</th>
                         <th>Class</th>
                         <th>Subject Name</th>
                         <th>Assignments</th>
                         <th>Date</th>
                         <th colspan="3">Action</th>
                       </thead>

                    <tbody>
                    <?php 
                       while($row = $s->fetch())
                      {
                      ?>
                      <tr>
                            <td><?php echo $row['sno']; ?></td>
                            <td><?php echo $row['studentname'];  ?></td>
                            <td><?php echo $row['studentclassname']; ?></td>
                            <td><?php echo $row['assignmentname']; ?></td>
                            <td><?php echo $row['assignments'];  ?></td>
                            <td><?php echo $row['dateofsubmission']; ?></td>
                            <td><a href="adminAssignment.php?fileid=<?php echo $row['sno'];  ?>" class="viewEdit" name="view" target="_blank">view</a></td>
                            <td><a href="adminAssignment.php?filedownloadid=<?php echo $row['sno'];  ?>" class="publish" name="download">download</a></td>
                      </tr>
                     <?php 
                        }
                      ?>
              </tbody>
       </table>
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