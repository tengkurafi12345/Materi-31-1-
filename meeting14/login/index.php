<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>RUMAH</h2>
    <?php
    // if(isset($_GET['pesan'])) {
    //     if($_GET['pesan']=="gagal"){
    //         echo "login gagal !!! username dan password salah"
    //     }
    // }
    ?>
    <form action="cek_login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" placeholder="masukkan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>