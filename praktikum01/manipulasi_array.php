<?php
$arrayBuah = ["Semangka","Manggis","Apel","Jeruk"];

sort($arrayBuah);

array_pop($arrayBuah);

unset($arrayBuah[2]);

array_push($arrayBuah,"Buah gagah");

array_shift($arrayBuah);

array_unshift($arrayBuah, "Brenuk");

$arrayBuah[1] = "Nanas";

foreach($arrayBuah as $buah) {
    echo $buah . "<br>";
}