<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h3>LOGIN SU</h3>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "Login Failed";
        }
    }
    ?>
    <form action="auth.php" method="POST">
        <table> 
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" placeholder="username" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" placeholder="password" name="password"></td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td><select name="position" id="position">
                    <option> Pilih Disini</option>
                    <option value="superadmin">superadmin</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>belum punya akun?<a href="../signup/signup.php">signup</a></td>
            </tr>
        </table>
    </form>
</body>
</html>