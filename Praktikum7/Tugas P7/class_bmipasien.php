<?php
class BmiPasien{
    public $nama,
            $umur,
            $jeniskelamin,
            $berat,
            $tinggi;

    public function __construct(){
        session_start();
        $_SESSION['result'] ?? $_SESSION['result'] = [];
    }

    public function hasilBMI(){
        $total = $this->statusBMI();
        if ($total == 0) {
            $msg = 'Zero value will be not forgiven';
        } else if ($total < 18.5) {
            $msg = 'Kekurangan berat badan';
        } else if ($total >= 18.5 && $total <= 24.9) {
            $msg = 'Normal (Ideal)';
        } else if ($total >= 25 && $total <= 29.9) {
            $msg = 'Kelebihan berat badan';
        } else if ($total >= 30) {
            $msg = 'Kegemukan (obesitas)';
        } else {
            $msg = 'Null or String value will be not forgiven';
        }
        $calc = [$total, $msg];
        return $calc;
    }

    public function statusBMI(){
        $val = [$this->tinggi, $this->berat, $this->umur];
        for ($i = 0; $i < count($val); $i++) {
            if (!preg_replace('/^[0-9]/', '', $val[$i])) {
                echo '<script> 
    alert("Kudu Angka"); 
    window.location.href = "index.php"; 
    </script>';
            }
        }
        $tinggi = isset($this->tinggi) ? $this->tinggi / 100 : 0;
        $total = isset($this->tinggi) ? substr($this->berat / ($tinggi * $tinggi), 0, 5) : 0;
        return $total;
    }
}

$bmi = new BmiPasien();


