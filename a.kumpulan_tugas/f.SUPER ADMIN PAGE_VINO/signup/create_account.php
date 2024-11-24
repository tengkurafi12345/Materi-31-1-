<?php
include '../connection.php';

$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
$status=$_POST['status'];
if($username!="" && $password!="" && $position!="" && $status!=""){
    if($password!=$re_password){
        header("location:index.php?pesan='pswd_fail'");
    }else{
        $sql="INSERT INTO user VALUES('','$username','$password','$position','$status')";
        mysqli_query($conn,$sql);
        header("location:../index.php");

    }
}else{
    header("location:../index.php?pesan='blank'");
}


?>