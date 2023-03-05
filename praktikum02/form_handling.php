<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_POST.php" method="POST">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa :</label><br>
        <input type="text" name="nama"><br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki"> 
       <label for="">Laki-Laki</label><br>
       <input type="radio" name="jenis_kelamin" value="Perempuan"> 
       <label for="">Perempuan</label><br><br>
        <!-- tipe checkbox -->
        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi" value="nyanyi"> 
            <label for="">Nyanyi</label><br><br>
        <input type="checkbox" name="hobi" value="baca"> 
            <label for="">Baca</label><br><br>
        <!-- tipe number -->
        <label for="">NIM</label><br>
        <input type="number" name="nim"><br><br>
        <!-- select -->
        <label for="">Prodi</label><br>
        <select name="prodi">
            <option value="sistem informasi">Sistem Informasi</option>
            <option value="teknik informatika">Teknik Informatika</option>
            <option value="bisnis digital">Bisnis Digital</option>
        </select><br><br>
        <!-- button -->
        <button type="submit">kirim</button>
        <button type="reset">reset</button>
    </form>
</body>
</html>