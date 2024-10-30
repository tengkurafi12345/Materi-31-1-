<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br>
    <br>
    <form action="tambah_controller.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>