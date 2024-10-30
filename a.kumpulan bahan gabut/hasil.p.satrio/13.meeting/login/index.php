<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>RUMAH GEMILANG INDONESIA</h2>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "Login gagal !!!!! username dan password salah ";
            }else if($_GET['pesan']=="belum_login"){
                echo "Anda belum login";
            }else if($_GET['pesan']=="logout"){
                echo "Anda berhasil logout";
            }
        }
    ?>
    <form action="cek_login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" placeholder="Masukkan password"></td>
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