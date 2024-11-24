<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super admin page</title>
</head>
<body>
    <h2>SUPER ADMIN PAGE</h2>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Position</th>
            <th>Status</th>
            <th>More</th>
        </tr>
        <?php
            include '../connection.php';
            $no=1;
            $data=mysqli_query($conn, "SELECT * FROM user");
            while($isi=mysqli_fetch_array($data)) {
                ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $isi["username"]?></td>
                <td><?php echo $isi["password"]?></td>
                <td><?php echo $isi["position"]?></td>
                <td><?php echo $isi["status"]?></td>
                <td>
                    <a href="./opsi/edit_page.php?id=<?php echo $isi['username'];?>">Update</a>
                    <a href="./opsi/hapus.php?id=<?php echo $isi['password'];?>">Hapus</a>
                    <!-- <a href="status.php?id=<?php echo $isi['position'];?>">Status</a> -->
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>