<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="hero">
        <div class="form-con">
            <div class="form-box">
                <div class="in-form-con">
                <div class="button-box">
                    <div id="btn"></div>
                    <input type="button" class="toggle-btn" value="login" onclick="login()">
                    <input type="button" class="toggle-btn" value="Register" onclick="register()">
                </div>
                </div>
               <div class="in-form-con">
               <div class="social-icons" social-icon-sec>dddd</div>
               </div>
               <div class="in-form-con" form-sec>
               <form id="login" action="" class="input-group">
                   <div class="forms">
                   <input type="text" class="input-field" placeholder="user id" required>
                   </div>
                   <div class="forms">
                   <input type="password" class="input-field" placeholder="Enter Password" required>
                   </div>
                   <div class="forms">
                   <input type="checkbox" class="check-box"><span>Remember Password</span>
                   </div>
                   <div class="forms" submit-btn>
                   <input type="submit" class="submit-btn" value="Log In" placeholder="user id" >
                   </div>
                </form>
                <form id="register" action="" class="input-group">
                   <div class="forms">
                   <input type="text" class="input-field" placeholder="user id" required>
                   </div>
                   <div class="forms">
                   <input type="email" class="input-field" placeholder="@example.com" required>
                   </div>
                   <div class="forms">
                   <input type="password" class="input-field" placeholder="Enter Password" required>
                   </div>
                   <div class="forms">
                   <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                   </div>
                   <div class="forms" submit-btn>
                   <input type="submit" class="submit-btn" value="Register" placeholder="user id" >
                   </div>
                </form>
               </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
