<?php 
      include_once "../resources/session.php";   
//       include_once "../admin/adminPartials/parseProfile.php"; 
      include_once "../resources/sweetalert.php";
      include_once "../admin/adminPartials/parseStudentsViewPage.php";

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
                       <div class="right-sidebar students">
                        <div class="content">
                          <h2 class="page-title">Studendts Information Details</h2>
                       <table>
                        <thead>
                         <th>S.no</th>
                         <th>RollNo</th>
                         <th>Students Name</th>
                         <th>Department</th>
                         <th>Gender</th>
                         <th>Date Of Birth</th>
                         <th>Mobile Number</th>
                         <th>Email</th>
                         <th>Address</th>
                         <th colspan="3">Action</th>
                       </thead>

                    <tbody>
                    <?php 
                       while($row = $sqlQuery->fetch())
                      {
                      ?>
                      <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['rollno'];  ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['gender'];  ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><a href="adminStudentsViewPage.php?deleteid=<?php echo $row['id'];  ?>" title="delete"><i class="fa-solid fa-trash-can"></i></a></td>
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