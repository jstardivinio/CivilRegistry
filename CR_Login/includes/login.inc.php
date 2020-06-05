<?php
session_start();

if(isset($_POST['submit'])){
   
    include 'dbh.inc.php';

   $uid = mysqli_real_escape_string($conn,$_POST['uid']);
   $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    //Error handlers
    //Check if inputs are empty
    if(empty($uid)||empty($pwd)){
        header("Location: ../index.php?login=empty");
        exit();
    } else {
        $sql =" SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header("Location: ../index.php?login=user_not_found");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)){
                //de hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']); 
                 if ($hashedPwdCheck == false){
                    header("Location: ../index.php?login=wrong_password");
                    exit();
                 } else if ($hashedPwdCheck==true){
                     //log in the user here
                    
                                 //login the user here
                                 $_SESSION['u_id']=$row['user_id'];
                                 $_SESSION['u_name']=$row['user_uid'];
                                 $_SESSION['u_email']=$row['user_email'];
                                 $_SESSION['u_tel']=$row['user_tel'];
                                 $_SESSION['u_reg']=$row['user_region'];
                                 $_SESSION['u_div']=$row['user_division'];
                                 $_SESSION['u_sub']=$row['user_subdivision'];
                                 header("Location: ../index.php?login=success");
                                 exit();
                      
                 }
            }
        }
    }
}
 else {
    header("Location: ../index.php?login=error");
    exit();
}