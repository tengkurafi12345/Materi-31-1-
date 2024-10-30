<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login bg</h1>
    <?php
    if(isset($_POST["status"])){
        if($_POST["status"]=="denied"){
            echo "USERNAME DAN PASSWORD SALAH <br>";
        }
        
    }
    
    ?>
    <form action="auth.php" method="POST">
        <table>
            <tr>
                <th>USERNAME</th>
                <th>:</th>
                <th><input type="text" name="username"></th>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <th>:</th>
                <th><input type="password" name="password"></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th><input type="SUBMIT" value="LOGIN"></th>
            </tr>
        </table>
    </form>
</body>
</html>