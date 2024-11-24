<?php
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="akademik";

$koneksi=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if(mysqli_connect_errno()){
    echo "Koneksi Gagal";
}

?>