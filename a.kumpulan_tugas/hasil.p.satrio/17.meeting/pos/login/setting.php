<?php
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="pos";


$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if(mysqli_connect_errno()){
    echo "Fail connection to DB";
}

?>