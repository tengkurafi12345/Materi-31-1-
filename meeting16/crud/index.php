<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color:blue"><b>Data Mahasiswa</b></h2>
    <a href=""></a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>nim</th>
            <th>alamat</th>
            <th>opsi</th>
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
                        <a href="edit_view.php?id=<?php echo$d["id"];?>"><i>Edit</i></a>
                        <a href="hapus_view.php?id=<?php echo$d["id"];?>"><i>Hapus</i></a>
                    </td>
                </tr>
        <?php    
        }
        ?>
    </table>
</body>
</html>