<?php
class PlayStation {
    protected $tipePs;
    protected $hargaPerJam;

    public function __construct($tipePs, $hargaPerJam) {
        $this->tipePs = $tipePs;
        $this->hargaPerJam = $hargaPerJam;
    }

    public function infoPs() {
        return "Tipe PS: $this->tipePs, Harga/Jam: Rp$this->hargaPerJam";
    }
}

class RentalPS extends PlayStation {
    private $lamaMain;

    public function __construct($tipePs, $hargaPerJam, $lamaMain) {
        parent::__construct($tipePs, $hargaPerJam);
        $this->lamaMain = $lamaMain;
    }

    public function hitungBiaya() {
        return $this->hargaPerJam * $this->lamaMain;
    }

    public function infoPs() {
        return parent::infoPs() . 
        ", Lama Main: $this->lamaMain jam, Total: Rp" . $this->hitungBiaya();
    }
}

$rental = new RentalPS("PS 5", 15000, 3);
echo $rental->infoPs();
?>