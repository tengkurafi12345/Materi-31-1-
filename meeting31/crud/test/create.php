<?php

$conn=mysqli_connect("localhost", "root", "", "akademik");

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];

$create="INSERT INTO mahasiswa ('','nama', 'nim' , 'alamat') VALUES ('','$nama', '$nim' , '$alamat')";


?>