<?php
$arrayMahasiswa = [
[    
    'nama' => 'Budi',
    'mata_kuliah' => 'Pemprogram Web 2',
    'nilai_uts' => 87,
    'nilai_uas' => 80,
    'nilai_tugas' => 90,
], [
    'nama' => 'Arif',
    'mata_kuliah' => 'Basis Data',
    'nilai_uts' => 92,
    'nilai_uas' => 89,
    'nilai_tugas' => 96,
], [
    'nama' => 'Rahman',
    'mata_kuliah' => 'Desain Grafis',
    'nilai_uts' => 92,
    'nilai_uas' => 88,
    'nilai_tugas' => 82,
], [
    'nama' => 'lappet',
    'mata_kuliah' => 'Pkn',
    'nilai_uts' => 90,
    'nilai_uas' => 89,
    'nilai_tugas' => 80,
], [
    'nama' => 'Bureket',
    'mata_kuliah' => 'Agama',
    'nilai_uts' => 98,
    'nilai_uas' => 98,
    'nilai_tugas' => 98,
]
];
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
      <div class="mt-4 d-flex justify-content-between">
        <h3>Daftar Nilai Mahasiswa</h3>
        <a href="form_nilai.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
      </div>
      <div class="table-responsive mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Mahasiswa</th>
              <th>Mata Kuliah</th>
              <th>Nilai UTS</th>
              <th>Nilai UAS</th>
              <th>Nilai Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            foreach($arrayMahasiswa as $key => $value) :
            ?>
            <tr>
                <td><?= $nomor++ ?></td>
                <td><?= $value ['nama'] ?></td>
                <td><?= $value ['mata_kuliah'] ?></td>
                <td><?= $value ['nilai_uts'] ?></td>
                <td><?= $value ['nilai_uas'] ?></td>
                <td><?= $value ['nilai_tugas'] ?></td>
                <td>
                    <?php
                    $rataRata = ($value['nilai_uts']
                    + $value['nilai_uas']
                    + $value['nilai_tugas']) / 3;
                echo number_format($rataRata, 2);
                ?>
                </td>
                <td>
                    <?php
                    if($rataRata >= 85 && $rataRata <= 100){
                        echo "A";
                    }
                    else if($rataRata >= 85 && $rataRata <= 100){
                        echo "B";
                    }
                    else if($rataRata >= 85 && $rataRata <= 100){
                        echo "C";
                    }
                    else if($rataRata >= 85 && $rataRata <= 100){
                        echo "D";
                    }
                    else if($rataRata >= 85 && $rataRata <= 100){
                        echo "E";
                    }
                    ?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>