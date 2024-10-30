<?php

// Indexed array
$mobil=array("toyota","honda","daihatsu","mitsubishi");
echo $mobil[2];
echo "<br>";
// Assosiative array
$mobilku=array("brand"=>"suzuki","type"=>"city car","seats"=>"5","fuel"=>"petrol");
echo $mobilku["type"];

// Looping
// for(start,finish,iterasi)
// while(finish)
// foreach
echo "<br>";
echo "<br>";
echo "for (looping) <br>";
for($index=0;$index<count($mobil);$index++){
    echo $mobil[$index]."<br>";

}
echo "<br>";
echo "<br>";
echo "while (looping) <br>";
$i=0;
while($i<count($mobil)){
    echo $mobil[$i]."<br>";
    $i++;
}
echo "<br>";
echo "<br>";
echo "foreach (looping) <br>";
foreach($mobil as $data){
    echo $data."<br>";
}
echo "<br>";
echo "<br>";
echo "foreach (looping) <br>";
foreach($mobilku as $value=>$data){
    echo $value.":".$data."<br>";
}
?>