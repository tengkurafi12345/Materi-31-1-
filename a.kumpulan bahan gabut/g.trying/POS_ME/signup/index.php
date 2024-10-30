<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>SIGN UP FORM</h3>
    <?php
    if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "blank") {
        echo "Fill all fields, please.";
    } else if ($_GET['pesan'] == "pswd_fail") {
        echo "Password and re-password don't match.";
    }
}

?>
    <form action="create_account.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password""></td>
            </tr>
            <tr>
                <td>Re-Password</td>
                <td>:</td>
                <td><input type="password" name="re_username""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="create""></td>
            </tr>
        </table>
    </form>
</body>
</html>