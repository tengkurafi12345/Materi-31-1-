<?php
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","organisasi");

function database($server=SERVER,$username=USERNAME,$password=PASSWORD,$database=DATABASE){
    $conn=mysqli_connect($server,$username,$password,$database);

    if(mysqli_connect_errno()){return false;}

    return $conn;
}

$connection=database();





?>