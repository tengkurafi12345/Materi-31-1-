<?php
include 'koneksi.php';

$username=$_POST['username'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','$username','','$nim','$alamat')");

header("location:index.php");

?>