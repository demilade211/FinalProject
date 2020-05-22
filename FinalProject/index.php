<?php include('regist.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hero">
        <div class="form-con">
            <div class="form-box">
                 <div class="in-form-con" title>
                    <div class="title-con">
                        <h1>Smart Attendance</h1>
                    </div>
                    <div class="student-con">
                        <h3>Student </h3>
                    </div>
                </div>
                <div class="in-form-con">
                <div class="button-box">
                    <div id="btn"></div>
                    <input type="button" class="toggle-btn" value="login" onclick="login()">
                    <input type="button" class="toggle-btn" value="Register" onclick="register()">
                </div>
                </div>
               <div class="in-form-con" social>
               <div class="social-icons" social-icon-sec>
                
               </div>
               </div>
               <div class="in-form-con" form-sec>
               <form id="login" action="index.php" class="input-group" method="POST">
                   <div class="forms">
                   <input type="text" name="mat" class="input-field" placeholder="Matric no e.g sms/012/1234" required>
                   </div>
                   <div class="forms">
                   <input type="password" name="pas" class="input-field" placeholder="Enter Password" required>
                   </div>
                   <div class="forms">
                   <input type="checkbox" class="check-box"><span>Remember Password</span>
                   </div>
                   <div class="forms" submit-btn>
                   <input type="submit" name="login-btn" class="submit-btn" value="Log In" placeholder="user id" >
                   </div>
                </form>
                <form id="register" action="index.php" class="input-group" method="POST">
                   <div class="forms">
                   <input type="text" name="fullname" class="input-field" placeholder="Full Name" required>
                   </div>
                   <div class="forms">
                   <input type="text" name="matric" class="input-field" placeholder="Matric No e.g sms/012/12345" required>
                   </div>
                   <div class="forms">
                   <input type="tel" name="tel" class="input-field" placeholder="08082453216" required>
                   </div>
                   <div class="forms">
                   <input type="password" name="pass" class="input-field" placeholder="Enter Password" required>
                   </div>
                   <div class="forms">
                   <input type="password" name="cpass" class="input-field" placeholder="Confirm Password" required>
                   </div>
                   <div class="forms">
                   <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
                   </div>
                   <div class="forms" submit-btn>
                   <input type="submit" name="reg-btn" class="submit-btn" value="Register" placeholder="user id" >
                   </div>
                </form>
               </div>
               <div class="motto">
                    <?php include('errors.php') ?>
                   <p>To help students and reduce work load of <a href="lindex.html">lecturers</a></p>
                    
               </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
