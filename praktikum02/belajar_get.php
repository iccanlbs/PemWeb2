<?php
$nama = $_GET['nama'];
$jenis_kelamis = $_GET['jenis_kelamin'];
$hobi = $_GET['hobi'];
$nim = $_GET['nim'];
$prodi = $_GET['prodi'];

echo "<h2>Form Pendaftaran</h2><br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamis . "<br>";
echo "Hobi : " . $hobi . "<br>";
echo "Nim : " . $nim . "<br>";
echo "Program Studi : " . $prodi;