<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    
    if($_SESSION['status']!="login"){
        echo "Belum login";
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <h2>HALAMAN ADMIN</h2>
    <a href="logout.php">LOGOUT</a>
</body>
</html>