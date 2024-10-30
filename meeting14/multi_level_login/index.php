<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MULTI LEVEL LOGIN</h1>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "GAGAL LOGIN, Email dan Password salah!!";
        }

    }
    
    ?>
    <form action="auth.php" method="POST">
    <table>
        <tr>
            <td>USERNAME</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td>:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>LEVEL</td>
            <td>:</td>
            <td><input type="text" name="Level"></td>
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