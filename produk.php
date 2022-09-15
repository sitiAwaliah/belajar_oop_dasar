<?php
//TokoBuku

class produk{
    public $Penulis= "DLL",
           $Tempat="GARUT",
           $Penerbit = "BINTANG PUBLISHER",
           $TahunTerbit=2020,
           $harga=100000;
    public function label(){
        return "$this->Penulis, $this->TahunTerbit, $this->Tempat";
    }
}
$MonologAtmaDalamSenyap = New produk();
$MonologAtmaDalamSenyap ->Penulis = "Meifi, Hilda, dkk";
$MonologAtmaDalamSenyap ->TahunTerbit = 2021;
echo $MonologAtmaDalamSenyap ->label();

?>