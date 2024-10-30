<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <a href="tambah_view.php">+ TAMBAH</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi,"SELECT * FROM mahasiswa");
            while($d=mysqli_fetch_array($data)){
                ?>  
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $d["nama"]?></td>
                <td><?php echo $d["nim"]?></td>
                <td><?php echo $d["alamat"]?></td>
                <td>
                    <a href="edit_view.php?id=<?php echo $d['id'];?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id'];?>">HAPUS</a>
                </td>
            </tr>

        <?php
            }
        ?>
    </table>

</body>
</html>