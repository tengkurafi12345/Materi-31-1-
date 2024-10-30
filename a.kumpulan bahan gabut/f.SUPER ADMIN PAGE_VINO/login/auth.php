<?php
    session_start();

    include '../connection.php';

    $username=$_POST['username'];
    $password=$_POST['password'];

    $data=mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password' ");
    $cek=mysqli_num_rows($data);

    if($cek>0) {
        $dataArray=mysqli_fetch_assoc($data);

        if($dataArray['position']=="superadmin") {
            $_SESSION['username']=$username;
            $_SESSION['position']="superadmin";
            header("location:super_admin_page.php");
        }else if($dataArray['position']=="admin") {
            $_SESSION['username']=$username;
            $_SESSION['position']="admin";
            header("location:admin_page.php");
        }else if($dataArray['level']=="") {
            // header("location:index.php?pesan=gagal");
            echo "isi level terlebih dahulu";
        }
    }else {
        header("location:index.php?pesan=gagal");
    }

    // echo $data;

    // $dataArray=mysqli_fetch_assoc($data);

    // echo $dataArray['level'];
?>