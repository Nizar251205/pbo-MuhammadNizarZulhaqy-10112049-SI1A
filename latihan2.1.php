<?php 
class belanja {

    // variable instance
    public string $NamaPembeli;
    public string $NamaBarang = "Rokok";
    public int $HargaBarang = 20000;
    public int $JumlahBarang = 5;
    public float $TotalBayar;
    public float $Diskon;

    // variable static
    public static float $pajak = 0.02;

    // constructor
    public function __construct($NamaPembeli) {
        $this->NamaPembeli = $NamaPembeli;
    }

    public function hitungTotal (): float {
        $subtotal = $this->HargaBarang * $this->JumlahBarang;
        return $subtotal;
    }
    
    public function hitungDiskon(): float {
        $Total = $this->hitungTotal() * $this->hitungDiskon
         return $subtotal * 0.02; // diskon 10%
    }

    public function hitungTotalBayar(): float {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungDiskon();
        $pajak = $subtotal * self::$pajak;

        return $subtotal - $diskon + $pajak;
    }
    

    public function tampilRincian($NamaPembeli) {
        echo "Nama Pembeli : " . $this->NamaPembeli . "<br>";
        echo "Nama Barang : " . $this->NamaBarang . "<br>";
        echo "Harga Barang : " . $this->HargaBarang . "<br>";
        echo "Jumlah Barang : " . $this->JumlahBarang . "<br>";
        echo "hitung Total : " . $this->hitungTotal . "<br";
        echo "hitung Diskon : " . $this->hitungDiskon . "<br>";
        echo "hitung Total Bayar : " . $this->hitungTotalBayar . "<br>";
    }
}

$belanja1 = new belanja(NamaPembeli: "Muhammad Nizar Zulhaqy");
$belanja1->tampilRincian(NamaPembeli: $belanja1->NamaPembeli);
?>
