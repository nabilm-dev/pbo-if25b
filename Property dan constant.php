<?php

Class Produk {

    //Produk
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //Constant 
    public const PAJAK = 0.11;

}

//object 
$produk = new Produk();

//Input
$produk -> kode = 'P0001';
$produk -> nama = 'Laptop';
$produk -> harga = 10000000;
$produk -> stok = 5;

//Hitung
$pajak       = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;
$total       = $produk->harga + $jumlahPajak;

//Output
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "harga: ".$produk->harga;
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: " . $pajak . "%<br/>";
echo "<br/>";

echo "Total harga setelah Pajak: Rp.".$total;