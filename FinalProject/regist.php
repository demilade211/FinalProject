<?php
 session_start();

 $errors = array();

 // connect to db
$db = mysqli_connect('localhost','root','','finalp') or die('could not connect to database');
 
 //register user if registeration button is clicked on
if(isset($_POST['reg-btn'])){
    $full_name = mysqli_real_escape_string($db,$_POST['fullname']);
    $matric_no = mysqli_real_escape_string($db,$_POST['matric']);
    $tel_no = mysqli_real_escape_string($db,$_POST['tel']);
    $pass_word = mysqli_real_escape_string($db,$_POST['pass']);
    $cpass_word = mysqli_real_escape_string($db,$_POST['cpass']);

    //form validation
if(empty($full_name)) {array_push($errors, "full name required");}
if(empty($matric_no)) {array_push($errors, "matric number required");}
if(empty($tel_no)) {array_push($errors, "phone number required");}
if(empty($pass_word)) {array_push($errors, "password required");}
if(empty($cpass_word)) {array_push($errors, "cpassword required");}
if($pass_word != $cpass_word) {array_push($errors, "passwords do not match");}
/*
// check db for existing email
$user_check_query = "SELECT * FROM student WHERE matric_no = '$matric_no' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
    if($user['matric_no'] === $matric_no){array_push($errors, "matric number already exists");}
}
*/
// register user user if there is no error
if(count($errors)== 0){
    $password = md5($pass_word);// it will encrypt the password
    $query = "INSERT INTO student (full_name, matric_no, phone_no, pass_word) VALUES ('$full_name', '$matric_no', '$tel_no', '$password)";
    if(mysqli_query($db, $query)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }

    mysqli_query($db,$query);
    $_SESSION['full_name'] = $full_name;
    $_SESSION['success'] = "You are now logged in";

    header('location: index.php');
}

}





// login user
if(isset($_POST['login-btn'])){
    $matric_no = mysqli_real_escape_string($db, $_POST['mat']);
    $pass_word = mysqli_real_escape_string($db, $_POST['pas']);

    if(empty($matric_no)) {
        array_push($errors, "matric number required");
    }
    if(empty($pass_word)) {
        array_push($errors, "password required");
    }
    if(count($errors)== 0){
        $password = md5($pass_word);// it will encrypt the password
        $query = "SELECT * FROM student WHERE matric_no='$matric_no' AND pass_word = '$password' ";
        $results = mysqli_query($db,$query);
    
       if(mysqli_num_rows($results)==1){
        $_SESSION['full_name'] = $full_name;
        $_SESSION['success'] = "You are now logged in";
        header('location: dashboard.php');
       }else{
           array_push($errors, "wrong username/password combination please try again");
       }
    }
}
    ?>