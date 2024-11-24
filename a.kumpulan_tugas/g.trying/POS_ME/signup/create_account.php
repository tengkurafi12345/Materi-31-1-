<?php
include '../login/setting.php';

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$re_password=$_POST['repswd'];

if($username!="" && $email!="" && $password!="" && $re_password!=""){
    if($password!=$repswd){
        header("location:index.php?pesan=pswd_fail");
    }else{
        $sql="INSERT INTO user_tb VALUES ('','$username','$email','$repswd')";
        mysqli_query($conn,$sql);
        header("location:info.php");
    }
}

?>