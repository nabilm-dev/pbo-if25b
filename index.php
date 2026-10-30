<?php

require('./PropertyConstant.php');

use pbo\marketplace\Produk;

// Object
$produk = new Produk('P0001', 'Laptop', 10000000, 5);

// Hitung
$pajak       = Produk::persenPajak();
$jumlahPajak = Produk::hitungPajak($produk->harga);
$total       = Produk::hitungTotal($produk->harga);

// Output
echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: Rp." . $produk->harga;
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $pajak . "%<br/>";
echo "Jumlah Pajak: Rp." . $jumlahPajak . "<br/>";
echo "<br/>";

echo "Total harga setelah Pajak: Rp." . $total;