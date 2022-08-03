<?php 
 include_once "../resources/database.php";
 include_once "../resources/sweetalert.php";
 include_once "../resources/session.php";
  if(isset($_GET['messageid']))
    {
        $id = $_GET['messageid'];
        $query = $con->prepare("update message set status = 1 where id = :id");
        $query->execute(array(':id' => $id));
    }

    $sqlQuery = $con->prepare("select message.id,message.name,students_information.department,message.message,message.create_date from
    students_information RIGHT JOIN message ON message.name = students_information.fullname ORDER BY message.id ASC");
    $sqlQuery->execute();
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
               <li><a href="studentsAdmin.php"><i class="fa-solid fa-chalkboard-user"></i> Dashboard</a></li>
               <li><a href="profile.php"><i class="fa-solid fa-address-card"></i> Profile</a></li>
               <li><a href="assignments.php"><i class="fa-solid fa-pen"></i> Assingnment Uploads</a></li>
               <li><a href="message.php"><i class="fa-solid fa-paper-plane"></i> Send Notification</a></li>
               <li><a href="passwordchange.php"><i class="fa-solid fa-key"></i> Change Password</a></li>
               <li><a href="../topics/index.html"><i class="fa-solid fa-gear"></i> Settings</a></li>
               <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
              </ul>
         </div>
       <!-- ends left sidebar -->
                
               <!-- Admin content -->
              <div class="right-sidebar">
                <div class="content">
                 <h2 class="page-title">Notification Message Between Students and Staff</h2>
                     <table class="studentAssignment">
                        <thead>
                         <th>s.no</th>
                         <th>Students Name</th>
                         <th>Department</th>
                         <th>Message</th>
                         <th>Date</th>
                        </thead>

                       <tbody>
                       <?php 
                        while($row = $sqlQuery->fetch())
                       {
                       ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name'];  ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['message']; ?></td>   
                            <td><?php echo $row['create_date']; ?></td>
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
?>