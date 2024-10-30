<?php
    include '../connection.php';

    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $position=$_POST['position'];

    mysqli_query($conn, "UPDATE user SET username='$username', password='$password', position='$position' WHERE id=$id ");
    header("location:super_admin_page.php");
?>