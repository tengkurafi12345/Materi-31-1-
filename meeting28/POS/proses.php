<?php
// include 'database.php'
// $db=new database();


$aksi = $_GET['aksi'];
if($aksi == "update"){
    $db->update($_POST['no'],$_POST['item'],$_POST['qty']);
    header("location:index.php");
}

?>