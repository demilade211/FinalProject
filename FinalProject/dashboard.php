<?php

if(isset($_SESSION['full_name'])){
    $_SESSION['msg'] = "you must login before you view this page";
    header("location : index.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['full_name']);
    header("location : index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Document</title>
</head>
<body>
   <div class="flex-con">
    <nav>
        <h1>Dashboard</h1>
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="sidebar">
            <div class="space"></div>
            <ul>
                <li><h2>Smart Attendance</h2></li>
                <li>Home</li>
                <li>About</li>
                <li>contact</li>
                <li><a href="index.php?logout='1'">Log Out</a></li>
            </ul>
        </div>
       </nav>
      
   </div>
   <section>
    <div class="wel-con">
    <h1>welcome, <?php if(isset($_SESSION['full_name'])) : ?>
            <?php echo $_SESSION['full_name']; ?>
            
            <?php endif ?>
        </h1>
        
    </div>
    <div class="main-con">
       

        
    </div>
   </section>
   
    <script src="dashboard.js"></script>
</body>
</html>