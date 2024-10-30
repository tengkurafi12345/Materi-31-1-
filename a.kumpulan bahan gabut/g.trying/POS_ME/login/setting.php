<?php
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="dukun_coding";

$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if(mysqli_connect_errno()){
    echo "fail connection to database";
}


?>