<?php
$conn=mysqli_connect("localhost","root","","akademik");
$read="SELECT * FROM mahasiswa";
$run=mysqli_query($conn,$read);
while($data=mysqli_fetch_assoc($run)){
    echo var_dump($data);
}


?>