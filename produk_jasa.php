<?php

require('./Jasa.php');

use pbo\marketplace\Jasa;

// Object
$produk = new Jasa();
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
echo "<br/>";

echo "Metode Pembayaran : " .$produk -> payment('qris');