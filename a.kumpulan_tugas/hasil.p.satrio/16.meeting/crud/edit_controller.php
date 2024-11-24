<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',nim='$nim',alamat='$alamat' WHERE id='$id' ");
header("location:index.php");


?>