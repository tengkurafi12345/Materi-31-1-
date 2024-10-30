<?php
session_start();

include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$data=mysqli_query($koneksi,"SELECT * FROM pegawai WHERE Username='$username' and Password='$password' ");
$cek=mysqli_num_rows($data);

if($cek>0){
    $dataArray=mysqli_fetch_assoc($data);

    if($dataArray['Level']=="admin"){
        $_SESSION['username']=$username;
        $_SESSION['Level']="admin";
        header("location:halaman_admin.php");
        
    }else if($dataArray['Level']=="direktur"){
        $_SESSION['username']=$username;
        $_SESSION['Level']="direktur";
        header("location:halaman_direktur.php");

    }else if($dataArray['Level']=="manager"){
        $_SESSION['username']=$username;
        $_SESSION['Level']="manager";
        header("location:halaman_manager.php");
        
    }else if($dataArray['Level']=="pegawai"){
        $_SESSION['username']=$username;
        $_SESSION['Level']="pegawai";
        header("location:halaman_pegawai.php");
    }
}else{
    header("location:index.php?pesan=gagal");
}



?>