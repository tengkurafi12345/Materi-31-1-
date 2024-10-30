<?php
$server="localhost";
$username="root";
$password="";
$database="signup";

$conn=mysqli_connect($server,$username,$password,$database);

if(mysqli_connect_errno()){
    echo "Fail connect to DB";
}
// if (!$conn){
//     die("koneksi gagal : " . mysqli_connect_error());
// } else {
//     echo "Koneksi berhasil";
// }
?>