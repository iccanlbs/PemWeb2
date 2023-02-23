<?php
$profileArray = [
    "nama" =>  "Ihsan Mustafa Lubis",
    "semester" => 4
];
echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$ProfileMultiArray = [
    [
        "nama" => "Ihsan Mustafa Lubis",
        "semester" => 2
    ], [
        "nama" => "fulan",
        "semester" => 7
    ]
    ];
    foreach($ProfileMultiArray as $profile){
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>";
    }