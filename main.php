<?php
// class
class Buah{
    public $nama;
    public $warna;

    function introduce(){
        return $this->nama . " - " . $this->warna;
        // hasil  : nama - warna
    }
}

// objek
$jeruk = new Buah();
$jeruk->nama = "Jeruk";
$jeruk->warna = "Oranye";

echo $jeruk->introduce();

?>