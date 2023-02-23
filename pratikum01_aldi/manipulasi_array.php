<?php
$arrayBuah = ["Jeruk","Manggis","Apel"];

//mengurukan array
sort($arrayBuah);

//menghapus value array yang paling terakhir
array_pop($arrayBuah);

//menghapus variabel ataupun spesifik value array
unset($arrayBuah[0]);

//menambahkan value array di paling terakir
array_push($arrayBuah, "Buah Naga");

//menghapus data/value paling awal
array_shift($arrayBuah);

//menambahkan value paling awal
array_unshift($arrayBuah, "semangka");

//mengubah data/value arrray dengan spesifik key/indekx
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}