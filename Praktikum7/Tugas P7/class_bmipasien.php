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


