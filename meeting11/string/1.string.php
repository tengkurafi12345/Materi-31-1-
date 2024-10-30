<?php
// print hanya dapat mengulangi si echo
echo "hello";
print "hello";

echo "<br>";

// if use double string,echo ("ff" $a) dibelakang, akan ke depan $a
$a="John";
echo "hello $a";

echo "<br>";

// if use single string,echo ("ff" $a) dibelakang, tetap di belakang $a
$a="John";
echo 'hello $a';

echo "<br>";

// strlen/string length (menghitung panjang semua string)
echo strlen("HALO DUNIA11");

echo "<br>";

// str_word_cound (menghitung kalimat (Aku Kamu = 2 kalimat))
echo str_word_count("Aku Adalah Superman");

echo"<br>";

// strpos (hanya menghitung urutan dari suatu character) character pertama dalam suatu kalimat adalah 0 

echo strpos("halo dunia", "n");

echo "<br>"
?>


