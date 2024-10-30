<?php
session_start();
include "../core/read.php";
echo "halaman cek <br>";
$username=$_POST["username"];
$password=$_POST["password"];

$read=new read();
$cek=$read->userPassword($username,$password);
echo var_dump($cek);

if($cek==true){
    $_GET["username"]=$username;
    $_POST["status"]="granted";
    echo "password benar";
    header("location:login/index.php");
    
}
else{
    $_POST["status"]="denied";
    echo "user dan pass salah";
    header("location:../index.php");
}




?>