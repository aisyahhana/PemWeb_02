<?php

    if(  !isset($_POST["submit"])  ){
        header("Location: index.php");
        exit;
    }

    $nama = $_POST["nama"];
    $matkuliah = $_POST["matakuliah"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];
    $tugas = $_POST["tugas"];

    $nilai_akhir = ($uts + $uas + $tugas) / 3;

    // mengambil sekaligus menjalanjakna skrip yang ada di library fungsi
    require_once 'libfungsi.php';
    $nilai = $nilai_akhir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama </th>
      <th scope="col">Matkul</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      <th scope="col">GRADE</th>
      <th scope="col">KETERANGAN</th>
      
    </tr>
    <tr>
      <td>1</td>
      <td> <?=  $nama ?></td>
      <td> <?= $matkuliah ?></td>
      <td> <?= $uts ?> </td>
      <td> <?= $uas ?></td>
      <td> <?= $tugas ?> </td>
      <td> <?= $nilai_akhir ?> </td>
      <td> <?= grade($nilai)?></td>
      <td> <?= kelulusan($nilai) ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>