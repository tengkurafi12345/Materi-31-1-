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
    // if(isset($_SESSION['status']!="login")){
    //     header("location:../login/index.php?pesan='belum_login'")
    // }
    // else if($_GET['pesan']=="belum_login"){
    //     echo "LOGIN DLU BANG <br>";
    // }
    // ?>
    <h2>SELAMAT TEKO</h2>
    <a href="../login/logout.php">LOGOUT</a>
</body>
</html>