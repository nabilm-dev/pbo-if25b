<?php

require('./PropertyConstant.php');

use pbo\marketplace\Produk;

// Object
$produk = new Produk();
$produk->setKode("P0001")
       ->setNama("Laptop")
       ->setHarga(10000000)
       ->setStok(5);

// Hasil
echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah Pajak: Rp." . $produk->total();