<?php

  require_once 'model.php';

 if( !isset($_POST ["submit"]) ) {
     header["location; index.php"];
     exit;
 }

$proses = $_POST ["submit"];
$nama = $_POST ["nama"];
$mata_kuliah = $_POST ["matakuliah"];
$uts = $_POST ["uts"];
$uas = $_POST ["uas"];
$tugas = $_POST ["tugas"];
$nilai_akhir = ($uts + $uas + $tugas) /3;

echo 'nama siswa ; ' . $nama;
echo '<br> mata kuliah ; ' . $mata_kuliah;
echo '<br> uts ; ' . $uts;
echo '<br> uas ; ' . $uas;
echo '<br> tugas ; ' . $tugas;

echo '<br> nilai akhir ; ' . $nilai_akhir;
echo '<br> dinyatakan ; ' . kelulusan($nilai_akhir);
echo '<br> grade ; ' . grade($nilai_akhir);



?>