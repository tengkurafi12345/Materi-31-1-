<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "Database.php";
        $db=new Database();
    ?>
    <h1>CRUD SANTRI CODING</h1>
    <a href="input.php">INPUT</a>
    <table border=1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th>Opsi</th>
        </tr>
        <?php
            $no=1;
            foreach($db->show_data() as $d){

            }
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['usia'];?></td>
            <td>
            <a href="edit.php?id=<id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
            <a href="proses.php?id=<id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
            </td>
        </tr>
    </table>
</body>
</html>