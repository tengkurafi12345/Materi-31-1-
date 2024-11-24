<?php
    define("SERVER","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","company");

    $conn=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

    if(mysqli_connect_errno()){
        echo "Koneksi gagal";
    }

    $sql="INSERT INTO pegawai VALUES('','Malik','Malik123','admin')";

    // Menjalankan perintah sql
    mysqli_query($conn,$sql);


?>