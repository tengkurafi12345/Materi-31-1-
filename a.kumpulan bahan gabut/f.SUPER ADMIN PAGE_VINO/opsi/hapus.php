<?php
    include '../connection.php';

    $id=$_GET['id'];

    mysqli_query($conn, "DELETE FROM user WHERE id=$id");
    header("location:super_admin_page.php");
?>