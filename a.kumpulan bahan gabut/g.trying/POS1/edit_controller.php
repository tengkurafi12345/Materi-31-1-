<?php
include 'koneksi.php';

$id=$_POST['id'];
$username=$_POST['username'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"UPDATE mahasiswa SET username= '$username', nim='$nim', alamat='$alamat' WHERE id='$id'");
header("location:index.php");


?>