<?php 
 include_once "../admin/adminPartials/parseLogin.php"; 
 ?>    
        <header>
               <div class="logo">
                      <img src="../img/logo.png" alt="ServerPrblm" title="spiher">
                      <h2><strong>spiher</strong></h2>
               </div>
               <div id="menu-bar" class="fa-solid fa-bars"></div>
               <div class="navbar">
                      <ul>
                             <li><a href="http://localhost/online-assignment-submission/students/index.php">Home</a></li>
                             <li><a href="http://localhost/online-assignment-submission/students/register.php">Register</a></li>
                             <li><a href="http://localhost/online-assignment-submission/students/Login.php">Login</a></li>
                             <li><a href="http://localhost/online-assignment-submission/admin/adminLogin.php">Admin</a></li>
                      </ul>
               </div>
        </header>

     <section class="main-register">
          <form action="" method="post">
                  <h1 class="form-title">Admin Login</h1>
                  
                  <div>
                         <label for="number">Phone</label>
                         <input type="number" name="adminNumber" id="number" class="text-input" placeholder="Enter phone no" required><br>
                        
                  </div>
                  <div>
                         <label for="">Password</label>
                         <input type="password" name="adminPassword" id="pass" class="text-input" placeholder="Enter password" required>
                       
                  </div>
                  
                  <div>
                     <button type="submit" class="btn btn-big" name="adminLogin">Login</button>
                  </div>
          </form>
     </section>
      
        <?php include_once "../partials/footer.php" ?>
        <script src="../students/js/scripts.js"></script>      
</body>
</html>
         