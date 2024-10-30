<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=='gagal'){
            echo "LOGIN GAGAL !!!! <br>";
        }else if($_GET['pesan']=="belum_login"){
            echo "LOGIN DULU WOYYYY <br>";
        }
    }
    ?>
    <form action="auth.php" method="POST">
        <table>
            <tr>
                <td>USERNAME</td>
                <td>:</td>
                <td><input type="text" name="username" ></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>belum punya akun?<a href="../signup/index.php">signup</a></td>
            </tr>
        </table>
    </form>
</body>
</html>