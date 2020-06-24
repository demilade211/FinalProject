<?php
 session_start();

 $fullname = "";
 $matric  = "";
 $tel = "";
 $errors = array();

 // connect to db
$db = mysqli_connect('localhost','root','','attendance') or die('could not connect to database');
 
 //register user if registeration button is clicked on
if(isset($_POST['reg-btn'])){
    $fullname = mysqli_real_escape_string($db,$_POST['fullname']);
    $matric = mysqli_real_escape_string($db,$_POST['matric']);
    $tel = mysqli_real_escape_string($db,$_POST['tel']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']);
    $cpass = mysqli_real_escape_string($db,$_POST['cpass']);

    //form validation
if(empty($fullname)) {array_push($errors, "full name required");}
if(empty($matric)) {array_push($errors, "matric number required");}
if(empty($tel)) {array_push($errors, "phone number required");}
if(empty($pass)) {array_push($errors, "password required");}
if(empty($cpass)) {array_push($errors, "cpassword required");}
if($pass != $cpass) {array_push($errors, "passwords do not match");}

// check db for existing email
$user_check_query = "SELECT * FROM student WHERE matric = '$matric' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
    if($user['matric'] === $matric){array_push($errors, "matric number already exists");}
}

// register user user if there is no error
if(count($errors)== 0){
    $password = md5($pass);// it will encrypt the password
    print $password;
    $query = "INSERT INTO student (fullname, matric, phone, pass) 
                    VALUES ('$fullname', '$matric', '$tel', '$password)";

    mysqli_query($db,$query);
    $_SESSION['fullname'] = $fullname;
    $_SESSION['success'] = "You are now logged in";

    header('location: dashboard.php');
}

}





// login user
if(isset($_POST['login-btn'])){
    $matric = mysqli_real_escape_string($db, $_POST['mat']);
    $pass = mysqli_real_escape_string($db, $_POST['pas']);

    if(empty($matric)) {
        array_push($errors, "matric number required");
    }
    if(empty($pass)) {
        array_push($errors, "password required");
    }
    if(count($errors)== 0){
        $password = md5($pass);// it will encrypt the password
        $query = "SELECT * FROM student WHERE matric='$matric' AND pass = '$pass' ";
        $results = mysqli_query($db,$query);
    
       if(mysqli_num_rows($results)==1){
        $_SESSION['fullname'] = $fullname;
        $_SESSION['success'] = "You are now logged in";
        header('location: dashboard.php');
       }else{
           array_push($errors, "wrong username/password combination please try again");
           header('location: sindex.php');
       }
    }
}
    ?>