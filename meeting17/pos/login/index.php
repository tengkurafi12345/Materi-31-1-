<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connection.php'
    // if(isset($_GET['pesan'])){
    //     if($_GET['pesan']=='gagal'){
    //         echo "LOGIN GAGAL!! <br>";
    //     }
    // }
    ?>
<div class="container mt-3">
    <form action="auth.php" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="LOGIN"></td>
        </tr>
            
    </table>
        
    </form>
</div>
</body>
</html>