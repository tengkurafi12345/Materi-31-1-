<?php
session_start();

// include 'koneksi.php'

// $username=$_POST['username'];
$password=$_POST['password'];

$data=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE username='$username' and password='$password' ");
$cek=mysqli_num_rows($data);

if($cek>0){
    $dataArray=mysqli_fetch_assoc($data);

    if($dataArray['level']=="admin"){
        $_SESSION['username']=$username;
        $_SESSION['level']="admin";
        header("location:halaman_admin.php");
    }else if($dataArray['level']=="direktur"){
        $_SESSION['username']=$username;
        $_SESSION['level']="direktur";
        header("location:halaman_direktur.php");
    }else if($dataArray['level']=="manager"){
        $_SESSION['username']==$username;
        $_SESSION['level']="manager";
        header("location:halaman_manager.php");
    }else if($dataArray['level']=="pegawai"){
        $_SESSION['username']=$username;
        $_SESSION['level']="pegawai";
        header("location:halaman_pagawai.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
}



?>