<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: lindex.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
    <link rel="stylesheet" href="css/lstyle.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/mlogin.js"></script>
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
                        <h3> Lecturer </h3>
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
               <form id="login" class="input-group">
                   <div class="forms">
                   <input type="email" class="input-field" placeholder="@example.com" name="email" required>
                   </div>
                   <div class="forms">
                   <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                   </div>
                   <div class="forms">
                   <input type="checkbox" class="check-box"><span>Remember Password</span>
                   </div>
                   <div class="forms" submit-btn>
                   <input type="button" class="submit-btn" onclick="processLogin()" value="Log In">
                   </div>
                </form>
                <form id="register" class="input-group">
                   <div class="forms">
                   <input type="text" class="input-field" name="name" placeholder="user id" required>
                   </div>
                   <div class="forms">
                   <input type="tel" name="tel" class="input-field" name="phone" placeholder="08082453216" required>
                   </div>
                   <div class="forms">
                   <input type="email" class="input-field" name="email" placeholder="@example.com" required>
                   </div>
                   <div class="forms">
                   <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                   </div>
                   <div class="forms">
                   <input type="password" class="input-field" name="password2" placeholder="Confirm Password" required>
                   </div>
                   <div class="forms">
                   <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions</span>
                   </div>
                   <div class="forms" submit-btn>
                   <input type="button" class="submit-btn" onclick="processSignup()" value="Register">
                   </div>
                </form>
               </div>
               <div class="alert hidden">
                    <span id="span">hi</span>
               </div>
            </div>
            
        </div>
    </div>
    <script src="lscript.js"></script>
</body>
</html>
