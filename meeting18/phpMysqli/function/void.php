<?php
function hello(){
    echo "Haiiii<br>";
}
function hai($name="noname"){
    echo "Haiiii $name <br>";
}
function tambah($x,$y){
    $hasil=$x+$y;
    return $hasil;

}
function add($x,$y){
    $hasil=$x+$y;
    echo $hasil;
    
}
// function add hanya menambahkan nilai
// function tambah menyimpan nilai 
add(8,9); 
echo "<br>";
echo tambah (9,10)+10;

?>