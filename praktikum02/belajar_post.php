<?php
$nama = $_POST['nama'];
$jenis_kelamis = $_POST['jenis_kelamin'];
$hobi = $_POST['hobi'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

echo "<h2>Form Pendaftaran</h2><br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamis . "<br>";
echo "Hobi : " . $hobi . "<br>";
echo "Nim : " . $nim . "<br>";
echo "Program Studi : " . $prodi;