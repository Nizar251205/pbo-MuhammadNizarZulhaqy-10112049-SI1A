<?php 
class Belanja {

    // Variable instance
    public string $NamaPembeli;
    public string $NamaBarang = "Rokok";
    public int $HargaBarang = 20000;
    public int $JumlahBarang = 5;
    
    public float $TotalBayar = 0;
    public float $Diskon  ;

    // Variable static
    public static float $pajak = 0.02;

    public function __construct($NamaPembeli) {
        $this->NamaPembeli = $NamaPembeli;
    }

    public function hitungTotal(): float { 
        $subtotal = $this->HargaBarang * $this->JumlahBarang;
        return $subtotal;
    }
    
    public function hitungProses() {
        $subtotal = $this->hitungTotal();
        $this->Diskon = $subtotal * 0.10; // Diskon 10%
        $nominalPajak = $subtotal * self::$pajak;

        $this->TotalBayar = $subtotal - $this->Diskon + $nominalPajak;
    }

    public function tampilRincian() {
        $this->hitungProses();
        $subtotal = $this->hitungTotal();
        $nominalPajak = $subtotal * self::$pajak;
        echo "Nama Pembeli : " . $this->NamaPembeli . "<br>";
        echo "Nama Barang : " . $this->NamaBarang . "<br>";
        echo "Total Belanja : " . $this->hitungTotal() . "<br>";
        echo "Subtotal : " . $subtotal . "<br>";
        echo "Diskon (10%) : " . $this->Diskon . "<br>";
        echo "Pajak (2%) : " . $nominalPajak . "<br>";
        echo "Total Bayar : " . $this->TotalBayar . "<br>";
    }
}

$belanja1 = new Belanja("Muhammad Nizar Zulhaqy");
$belanja1->tampilRincian();
?>
