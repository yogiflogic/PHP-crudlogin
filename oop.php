<?php
class Produk{
    public  $judul,
            $penulis;

    public function __construct($judul="judul", $penulis="penulis")
    {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
    }

    public function getLabel()
    {
        return "$this -> judul, $this->penulis";
    }
}

$produk1 = new Produk($judul="motogp", $penulis="VR");
echo $produk1->getLabel();
?>