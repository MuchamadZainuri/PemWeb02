<?php

class BmiPasien{
    public $nama,
            $umur,
            $jenis_kelamin,
            $berat,
            $tinggi;


    public function __construct($nama, $umur, $jenis_kelamin, $berat, $tinggi){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->berat = $berat;
        $this->tinggi = $tinggi;    
    }
    
    public function hasilBMI(){
        return $this->berat / (($this->tinggi/100) * ($this->tinggi/100));
    }

    public function statusBMI(){
        if ($this->hasilBMI() < 18.5) {
            return "Kekurangan berat badan";
        }elseif ($this->hasilBMI() <= 24.9) {
            return "Normal (ideal)";
        }elseif ($this->hasilBMI() <= 29.9) {
            return "Kelebihan berat badan";
        }elseif ($this->hasilBMI() <= 39.9) {
            return "Kegemukan (Obesitas)";
        }
    }
}

$name = $_POST['nama'];
$umr = $_POST['umur'];
$jk = $_POST['jk'];
$bb = $_POST['bb'];
$tb = $_POST['tb'];
$pasien = new BmiPasien($name, $umr, $jk, $bb, $tb);

header("location: hasil.php");

// $pasien = new BmiPasien('Muchamad Zainuri',1,'Laki-Laki',46.2,155);
// echo "Nama : $pasien->nama <br>";
// echo "Umur : $pasien->umur <br>";
// echo "Jenis Kelamin : $pasien->jenis_kelamin <br>";
// echo "Berat Badan : $pasien->berat <br>";
// echo "tinggi Badan : $pasien->tinggi <br>";
// echo "BMI Pasien : " . number_format($pasien->hasilBMI(),2,',') ;
// echo "<br>Status BMI : " . $pasien->statusBMI();
