<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>SIGNUP FORM</h3>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="blank"){
                echo "FILL ALL FIELD PLEASE";
            }else if($_GET['pesan']=="pswd_fail"){
                echo "PASSWORD AND RE-PASSWORD DOESN'T MATCH";
            }
        }
    ?>
    <form action="create_account.php" method="POST">
        <table>
            <tr>
                <td>USERNAME</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>RE-PASSWORD</td>
                <td>:</td>
                <td><input type="password" name="re_password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="CREATE"></td>
            </tr>
        </table>
    </form>
</body>
</html>