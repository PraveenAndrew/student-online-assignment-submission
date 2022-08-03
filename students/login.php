<?php 
 include_once "../partials/parseLogin.php"; 
 include_once "../resources/sweetalert.php";
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
                             <li><a href="http://localhost/online-assignment-submission/students/login.php">Login</a></li>
                             <li><a href="http://localhost/online-assignment-submission/admin/adminLogin.php">Admin</a></li>
                      </ul>
               </div>
        </header>

     <section class="main-register">
          <form action="#" method="post">
                  <h1 class="form-title">Students Login</h1>
                  
                  <div>
                         <label for="number">Phone</label>
                         <input type="number" name="number" id="number" class="text-input" placeholder="Enter phone no" required><br>
                        
                  </div>
                  <div>
                         <label for="">Password</label>
                         <input type="password" name="password" id="pass" class="text-input" placeholder="Enter password" required>
                       
                  </div>
                  
                  <div>
                     <button type="submit" class="btn btn-big" name="loginBtn">Login</button>
                  </div>
                     <p> Don't have an account?  <a href="http://localhost/online-assignment-submission/students/register.php">register</a></p>
          </form>
     </section>
     <footer>
               <div class="one">
                      <p>st.peter's institute of higher education and research. chennai</p>
                      <p><em>contact:12345790</em></p>
               </div>
               <div class="two">
                      <p>useful links</p>
                      <br>
                      <ul>
                             <li><a href=""><i class="fa-brands fa-facebook-square"></i></a></li>
                             <li><a href=""><i class="fa-brands fa-youtube-square"></i></a></li>
                             <li><a href=""><i class="fa-brands fa-whatsapp-square"></i></a></li>
                             <li><a href=""><i class="fa-brands fa-twitter-square"></i></a></li>
                             <li><a href=""><i class="fa-solid fa-globe"></i></a></li>
                      </ul>
               </div>
               <div class="three">
                      <p>Quick Link</p>
                      <ul>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i> St. Peter's Engineering College</a></li>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i> spiher.ac.in</a></li>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i> Deemed university</a></li>
                      </ul>
               </div>
               <div class="four">
                      <ul>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i> Privacy Policy</a></li>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i>  Terms of Service</a></li>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i> &copy; 2022-2023</a></li>
                             <li><a href=""><i class="fa-solid fa-angle-right arrow"></i> Designed by <span> praveen k (msc)</span></a></li>
                      </ul>
               </div>
        </footer>

        <script src="../students/js/scripts.js"></script>
        
</body>
</html>
         