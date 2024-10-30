<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color: blue;"><b>UPDATE DATA MAHASISWA</b></h2>
    <br>
    <a href="index.php" style="color: red;"><i>kembali</i></a>
    <br>
    <br>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");

    while ($d = mysqli_fetch_array($data)){
    ?> 
        <form  method="post" action="edit_controller.php">
            <table>
                <tr>
                    <td>
                        <input type="">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>