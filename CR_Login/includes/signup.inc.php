<?php
session_start();
if (isset($_POST['submit'])){

include_once'dbh.inc.php';
$uid = mysqli_real_escape_string( $conn,$_POST['uid']);
$email = mysqli_real_escape_string( $conn,$_POST['email']);
$tel = mysqli_real_escape_string( $conn,$_POST['tel']);
$reg = mysqli_real_escape_string( $conn,$_POST['reg']);
$div = mysqli_real_escape_string( $conn,$_POST['div']);
$sub = mysqli_real_escape_string( $conn,$_POST['sub']);
$pwd = mysqli_real_escape_string( $conn,$_POST['pwd']);


//error handling
if(empty($uid)|| empty($email)|| empty($tel)||empty($reg)||empty($div)||empty($sub)||empty($pwd)){
    header("Location: ../create.php?signup=empty");
    exit();

     }    else{ //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/",$uid)||!preg_match("/^[a-zA-Z]*$/",$reg)||!preg_match("/^[a-zA-Z]*$/",$div)
            ||!preg_match("/^[a-zA-Z]*$/",$sub)||!preg_match("/^[0-9]*$/",$tel)){
            header("Location: ../create.php?signup=invalid_input");
             exit();
    }  else {
    //check if the email is valid
             if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
             header("Location: ../create.php?signup=email");
             exit();
                } else {
               $sql= "SELECT * FROM users WHERE user_uid='$uid'";
                $result=mysqli_query($conn, $sql);
                $resultCheck = mysql_num_rows($result);

                if ($resultCheck > 0){
                    header("Location: ../create.php?signup=user_taken");
                    exit();
                } else {
                    //hashing the password
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //INSERT INTO DATABASE
                    $sql = "INSERT INTO users(user_uid, user_email,user_tel,user_region,user_division,user_subdivision,user_pwd)
                    VALUES ('$uid','$email','$tel','$reg','$div','$sub','$hashedpwd');";
                    mysqli_query($conn,$sql);
                    header("Location: ../index.php?signup=success");
                    exit();
                    header("Location: ../index.php");
                    exit();
                 }
            }
          }
     }
}
   else{
         header("Location: ../create.php");
          exit();
        }
