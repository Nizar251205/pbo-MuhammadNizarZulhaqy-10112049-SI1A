<?php
class kendaraan
{
    public $jumlahRoda=4;
    public $warna;
    public $bahanBakar="Premium";
    public $harga=100000000;
    public $merek; 
    public $tahunPembuatan=2004;
    public function statusHarga ()
    {
        if($this->harga>50000000)
        {
        $status="Harga Kendaraan Mahal";
        }
    else 
        {
        $status="Harga Kendaraan Murah";
        }
    return $status;
    }
    function statusSubsidi()
    {
        if($this->tahunPembuatan <= 2005 && $this->bahanBakar=="Premium"){
        $status="dapat subsidi";
        }
        else{
        $status="tidak dapat subsidi";
        }
        return $status;
    }

}
$objekKendaraan=new kendaraan(10);
echo "jumlahRoda:".$objekKendaraan->jumlahRoda."<br />";
echo "statusHarga:".$objekKendaraan->statusHarga();
echo "StatusSubsidi:".$objekKendaraan->statusSubsidi();

    $objekKendaraan1 = new kendaraan;

    $objekKendaraan1 ->harga=1000000;
    $objekKendaraan1 ->tahunPembuatan=1999;
    echo "statusHarga :".$objekKendaraan->statusHarga();
?>