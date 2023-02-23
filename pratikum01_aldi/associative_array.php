<?php
$profileArray = [
    "nama" => "Abiyyu",
    "semester" => 4
];

echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [ 
        "nama" => "Abiyyu",
        "semester" => 4
    ],[
        "nama" => "fullan",
        "semester" => 7
    ]
        
    ];
    foreach($profileMultiArray as $profile) {
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>"; 
    }