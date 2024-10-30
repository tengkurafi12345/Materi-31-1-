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

    if($_SESSION['Level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>
    <h2>HAI MANAGER</h2>
    <a href="logout.php">LOGOUT</a>
</body>
</html>