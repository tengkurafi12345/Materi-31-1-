<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>HAI DIREKTUR</h2>
    <?php
    session_start();

    if($_SESSION['Level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>
    <a href="logout.php">LOGOUT</a>
</body>
</html>