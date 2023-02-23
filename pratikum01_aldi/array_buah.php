<?php
//membuat array
$arrayBuah = ["Jeruk","Manggis","Apel"];
//cara pertama
print_r($arrayBuah);
//cara kedua
var_dump($arrayBuah);

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}