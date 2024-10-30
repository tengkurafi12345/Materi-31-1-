<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit page</title>
</head>
<body>
    <h2>Edit Page</h2>
    <br>
    <a href="../login/index.php">Back</a>
    <br>
    <br>
    <?php
        include '../connection.php';
        $no=$_GET['no'];
        $data=mysqli_query($conn, "SELECT * FROM user WHERE no='$no' ");

        while($isi=mysqli_fetch_array($data)) {
    ?>
        <form action="edit_controller.php" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" name="no" value="<?php echo $isi['no']; ?>">
                        <input type="text" name="username" value="<?php echo $isi['username']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value="<?php echo $isi['password']; ?>"></td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td>:</td>
                    <td><input type="text" name="position" value="<?php echo $isi['position']; ?>"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name="status" id="status">
                    <option disabled><?php echo $isi['status']; ?></option>
                    <option value="active">active</option>
                    <option value="not_active">not active</option>
                    <option value="banned">banned</option>
                </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td>:</td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
</body>
</html>