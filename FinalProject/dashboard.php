<?php include('regist.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
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
                <li class="active" id="home">Home</li>
                <li id="mattendance">View Available Classes</li>
                <li id="vattendance">View Attendance</li>
                <li><a href="sindex.php?logout='1'">Log Out</a></li>
            </ul>
        </div>
       </nav>
      
   </div>
   <section>
    <div class="wel-con">
    <h1>welcome, <?php if(isset($_SESSION['fullname'])) : ?>
            <?php echo $_SESSION['fullname']; ?>
            
            <?php endif ?>
        </h1>
        
    </div>
    <div class="main-con">
        <div class="markattendance-con hidden">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Lecturer</th>
      <th scope="col">Mark Attendance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>CIT-422</td>
      <td>Dr Aworinde</td>
      <td><input type="button" name="mark-btn" class="mark-btn" value="Scan Location"></td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="container hidden">
            <div id="output"></div>
                <form id="getAttendance">
     <div class="form-group">
        <label>Year of course</label>
        <select name="year" class="form-control">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
        </select>
     </div>
    <div class="form-group">
      <label>Section</label>
      <select name="section" class="form-control">
      <option>1</option><option>2</option><option>3</option>	
    </select>
    </div>
    <div class="form-group">
      <label>Course Code</label>
      <input type="text" class="form-control" name="code" placeholder="Eg - CIT-216">
      <span class="help-block">DDD-NNN where D : Department , N : Number</span>
    </div>
    <div class="form-group">
      <label>Matric Number</label>
      <input type="text" class="form-control" name="roll" placeholder="Eg - SSE/016/17068">
      <span class="help-block">NNN/DD/YY where N : Number, D : Department , Y : Year</span>
    </div>
    <button class="btn btn-primary">Get Results</button>
  </form>
  </div>
  </div><!-- /.container -->

        
    </div>
   </section>
   
    <script src="dashboard.js"></script>
</body>
</html>