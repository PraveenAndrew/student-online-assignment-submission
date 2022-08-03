<?php 
 include_once "../partials/parseRegister.php"; 
 include_once "../resources/sweetalert.php";
?>

<body>
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
          <form action="" method="post" onsubmit="return validation()">
                  <h1 class="form-title">Students Register</h1>
                 
                  <div>
                         <label for="rollno">Rollno</label>
                         <input type="text" name="rollno" id="rollno" class="text-input" placeholder="Enter roll no" required><br>
                  </div>
                  <div>
                         <label for="fullname">Full Name</label>
                         <input type="text" name="fullname" id="fullname" class="text-input" placeholder="Enter full name" required><br>
                         <span id="initialName" style="color:red;font-size:1.1rem;"></span>
                  </div>
                  <div>
                         <label for="department">Department</label>
                         <select name="department" id="department" class="text-input" required>
                                <option value="">--Select department--</option>
                                <option value="M.sc(cs)II">M.sc (cs) II</option>
                                <option value="M.sc(cs)I">M.sc (cs) I</option>
                                <option value="B.sc(cs)I">B.sc (cs) I</option>
                                <option value="B.sc(cs)II">B.sc (cs) II</option>
                         </select><br>
                  </div>
                  <div>
                         <label for="gender">Gender</label>
                         <select name="gender" id="gender" class="text-input" required>
                                <option value="">--Select Gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                         </select><br>
                  </div>
                  <div>
                         <label for="dob">Date of Birth</label>
                         <input type="date" name="dateofbirth" id="dob" class="text-input" required><br>
                  </div>
                  <div>
                         <label for="number">whatsapp No</label>
                         <input type="number" name="number" id="number" class="text-input" placeholder="Enter whatsup no" required><br>
                         <span id="no" style="color:red;font-size:1.1rem;"></span>
                  </div>
                  <div>
                         <label for="email">Email</label>
                         <input type="email" name="email" id="emails" class="text-input" placeholder="Enter email address" required><br>
                         <span id="emailValidate" style="color:red;font-size:1.1rem;"></span>
                  </div>
                  <div>
                         <label for="address">Address</label>
                         <textarea name="address" id="address" class="text-input" placeholder="Enter address" required></textarea><br>
                         <span id="home" style="color:red;font-size:1.1rem;"></span>
                  </div>
                  <div>
                         <label for="password">Password</label>
                         <input type="password" name="password" id="password" class="text-input" placeholder="Enter password" required><br>
                         <span id="pass" style="color:red;font-size:1.1rem;"></span>
                  </div>
                  <div>
                         <label for="confpassword">Confirm Password</label>
                         <input type="password" name="confirmpassword" id="confpassword" class="text-input" placeholder="Enter confirm password" required><br>
                         <span id="confrmpass" style="color:red;font-size:1.1rem;"></span>
                  </div>
                  <div>
                     <button type="submit" class="btn btn-big" name="registerBtn" value="upload">Register</button>
                  </div>
                     <p> or <a href="http://localhost/online-assignment-submission/students/login.php"> Login</a></p>
          </form>
     </section>
    <?php include_once "../partials/footer.php" ?>
       
               <script type="text/javascript">
                      function validation() 
                    { 
                     var name = document.getElementById('fullname').value; 
                     var num = document.getElementById('number').value; 
                     var email = document.getElementById('emails').value; 
                     var pass = document.getElementById('password').value; 
                     var confrmpassword = document.getElementById('confpassword').value; 
                     
                     if((name.length <=2) || (name.length > 20 ))
                     {
                            document.getElementById('initialName').innerHTML = 'FullName length between 2 and 20';
                     return false;
                     }
                     if(!isNaN(name))
                     {
                            document.getElementById('fullnames').innerHTML = 'only character are allowed not for number';
                     return false;
                     }
                     if(isNaN(num))
                     {
                            document.getElementById('no').innerHTML = 'number must write digits only not for characters';
                            return false;
                     }
                     if(num.length!=10)
                     {
                            document.getElementById('no').innerHTML = 'number must be 10 digits only';
                            return false;
                     }
                     if((pass.length <= 5) || (pass.length > 20))
                     {
                            document.getElementById('pass').innerHTML = 'Password length must be between 5 and 20';
                            return false;
                     }
                     if(confrmpassword!=pass)
                     {
                            document.getElementById('confrmpass').innerHTML = 'Password are not matching';
                           return false;
                     }
                     if(email.indexOf('@') <= 0)
                     {
                            document.getElementById('emailValidate').innerHTML = "@ invalid Position";
                     }
                     if((email.chartAt(email.length-4) != '.') && (email.chartAt(email.length-3) != '.'))
                     {
                            document.getElementById('emailValidate').innerHTML = "Invalid Position";
                     }
                }
               </script>

            <script src="../students/js/scripts.js"></script>
        
</body>
</html>
         