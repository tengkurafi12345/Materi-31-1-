<?php
session_start();
include 'setting.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM user_tb WHERE username='$username'
and password='$password'";

$data=mysqli_query($conn,$sql);

$cek=mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username']=$username;
    $_SESSION['status']="login";
    header("location:../public/index.php");
}else{
    header("location:index.php?pesan=gagal");
}

?>