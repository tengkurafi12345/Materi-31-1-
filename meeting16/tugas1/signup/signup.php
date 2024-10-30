<?php
include 'koneksi.php';

$ID=$_POST["ID"];
$USERNAME=$_POST["USERNAME"];
$PASSWORD=$_POST["PASSWORD"];
$RE_ENTER_PASSWORD=$_POST["RE-ENTER-PASSWORD"];
$EMAIL=$_POST["EMAIL"];

mysqli_query($koneksi,"INSERT INTO account VALUES('$ID','$USERNAME','$PASSWORD','$RE_ENTER_PASSWORD','$EMAIL' ) ");


?>