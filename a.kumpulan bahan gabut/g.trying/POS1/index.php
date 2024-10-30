<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2></h2>
    <a href="tambah_view.php">+tambah</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php 
            include 'koneksi.php';
            $id=1;
            $data=mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            while ($d=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $id++ ?></td>
                <td><?php echo $d["username"] ?></td>
                <td><?php echo $d["nim"] ?></td>
                <td><?php echo $d["alamat"] ?></td>
                <td>
                    <a href="edit_view.php?id=<?php echo $d ['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
            }
     ?>
    </table>
</body>
</html>