<?php

    class Mobil{
        public $nama;
        public $merk;
        public $warna;

        
    public function tambahKecepatan(){
    
    }
    
    public function kurangiKecepatan(){
    
    }

    }

    class Produk {
        public $nama ='ini nama', 
        $jenis='inijenis', 
        $harga=9999;
        const PHI = 3.14;

        public function __construct($nama, $jenis, $harga){
            $this->nama = $nama;
            $this->jenis = $jenis;
            $this->harga = $harga;

        }

        public function Harga(){
            return $this->harga;
            return self::PHI;
        }
    }

    // $produk1 = new Produk();
    // $produk1-> nama = 'Kaos';
    // $produk1-> jenis = 'Baju';
    // $produk1-> barugaming = 'baru gess';
    // var_dump($produk1);

    $produk2 = new Produk("Baju hitam Polos","Kaos",15000);
    echo "Produk 2 : $produk2->nama, $produk2->jenis";
    echo "<br>";
    echo "Harga : " . $produk2->Harga();
    echo "<br>";
    

    $produk3 = new Produk("Hoodie Hita Polos","Jaket",185000);
    echo "<br>";
    echo "Produk 3 : $produk3->nama,$produk3->jenis";
    echo "<br>";
    echo "Harga :" . $produk3->Harga();

?>