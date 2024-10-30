<?php
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","organisasi");

$conn=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

if(mysqli_connect_errno()){
    echo "koneksi gagal";
}

$username="vuki";
$email="vinosaja@gmail.com";

$cek_user="SELECT * FROM anggota WHERE username='$username'";
$cek_email="SELECT * FROM anggota WHERE email='$email'";


$user_row=mysqli_num_rows(mysqli_query($conn,$cek_user));
$email_row=mysqli_num_rows(mysqli_query($conn,$cek_email));

if($user_row>0){
    echo "username already exist <br>";
}else{
    echo "username granted<br>";
}

if($email_row>0){
    echo "email already exist <br>";
}else{
    echo "email granted<br>";
}


?>