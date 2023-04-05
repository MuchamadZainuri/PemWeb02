<?php
require_once 'class_bmipasien.php';

echo "Nama : $pasien->nama <br>";
echo "Umur : $pasien->umur <br>";
echo "Jenis Kelamin : $pasien->jenis_kelamin <br>";
echo "Berat Badan : $pasien->berat <br>";
echo "tinggi Badan : $pasien->tinggi <br>";
echo "BMI Pasien : " . number_format($pasien->hasilBMI(), 1, ',');
echo "<br>Status BMI : " . $pasien->statusBMI();

?>
<a href="index.php" class="btn btn-danger btn-sm">Coba</a>