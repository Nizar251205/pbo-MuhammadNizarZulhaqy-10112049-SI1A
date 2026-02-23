<?php

class ProsesPegadaian {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $telat;

    public function __construct($pinjaman, $bunga, $lama, $telat){
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama = $lama;
        $this->telat = $telat;
    }

    public function totalBunga(){
        return ($this->pinjaman * $this->bunga / 100) * $this->lama;
    }

    public function totalPinjaman(){
        return $this->pinjaman + $this->totalBunga();
    }

    public function denda(){
        return $this->totalPinjaman() * 0.02 * $this->telat;
    }

    public function totalBayar(){
        return $this->totalPinjaman() + $this->denda();
    }
}

if(isset($_POST['hitung'])){

    $pinjaman = $_POST['pinjaman'];
    $bunga = $_POST['bunga'];
    $lama = $_POST['lama'];
    $telat = $_POST['telat'];

    $proses = new ProsesPegadaian($pinjaman, $bunga, $lama, $telat);

    echo "<h2>Hasil Perhitungan Pegadaian</h2>";
    echo "Total Bunga : Rp " . $proses->totalBunga() . "<br>";
    echo "Total Pinjaman + Bunga : Rp " . $proses->totalPinjaman() . "<br>";
    echo "Denda : Rp " . $proses->denda() . "<br>";
    echo "Total Bayar : Rp " . $proses->totalBayar();
}

?>