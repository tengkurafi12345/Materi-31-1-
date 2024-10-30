<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>MULTI LEVEL LOGIN</h2>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "GAGAL LOGIN , Email dan Password Salah....";
        }
    }
    
    ?>
    <form action="auth.php" method="POST">
    <table>
        <tr>
            <td>USERNAME</td>
            <td>:</td>
            <td><input type="text" placeholder="username" name="username"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td>:</td>
            <td><input type="text" placeholder="password" name="password"></td>
        </tr>
        
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="SUBMIT"></td>
        </tr>

    </table>
    </form>
</body>
</html>