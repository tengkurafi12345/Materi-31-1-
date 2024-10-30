<?php
include '../login/setting.php';

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$re_password=$_POST['re_password'];
if($username!="" && $email!="" && $password!="" && $re_password!=""){
    if($password!=$re_password){
        header("location:index.php?pesan='pswd_fail'");
    }else{
        $sql="INSERT INTO user VALUES('','$username','$email','$password')";
        mysqli_query($conn,$sql);
        header("location:info.php");

    }
}else{
    header("location:index.php?pesan='blank'");
}


?>