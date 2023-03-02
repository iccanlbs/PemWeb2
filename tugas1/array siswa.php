<?php
$mahasiswa1 = [
    'id'=>1,
    'nim'=>10122150,
    'nama'=>"Ihsan",
    'uts'=>90,
    'uas'=>85,
    'tugas'=>67,
];
$mahasiswa2 = [
    'id'=>2,
    'nim'=>10122778,
    'nama'=>"Mustafa",
    'uts'=>92,
    'uas'=>88,
    'tugas'=>76,
];
$mahasiswa3 = [
    'id'=>3,
    'nim'=>4127738,
    'nama'=>"Lubis",
    'uts'=>99,
    'uas'=>89,
    'tugas'=>81,
];



$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h3>Daftar NIlai Mahasiswa</h3>
        <table class="table table-stripped">
            <tr>
                <th>id</th>
                <th>nim</th>
                <th>nama</th>
                <th>uts</th>
                <th>uas</th>
                <th>tugas</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai["id"]; ?></td>
                <td><?= $nilai["nim"]; ?></td>
                <td><?= $nilai["nama"]; ?></td>
                <td><?= $nilai["uts"]; ?></td>
                <td><?= $nilai["uas"]; ?></td>
                <td><?= $nilai["tugas"]; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

</body>
</html>

<?php 
// ini sebuah komentar
/* ini juga sebuah komentar */
# ini komentar pake kres
// echo "Hello World <br>";
// echo 'Hello World <br>';
// echo "Mahasiswa Nurul Fikri <br>";
// print_r("Herman Virgiawan <br>");
// var_dump("STT TERPADU NURUL FIKRI <br>");


// membuat variabel user
// $nama = "Herman";
// $umur = 20; 
// $berat = 70.2;
// $mahasoswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg";

// membuat variabel system
// echo 'Dokument Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];


// membuat variabel konstanta
// define('PHI', 3.14);
// $jari = 10;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;
// echo "Luas lingkaran dengan jari-jari $jari = $luas";
// echo "Luas lingkaran dengan jari-jari $jari = $keliling";

// membuat array

$programs = ["PHP", "JavaScript", "HTML", "CSS"];
// echo $programs[2]
// echo "jumlah data variabel programs sebanyak " . count($programs);
// foreach($programs);

?>