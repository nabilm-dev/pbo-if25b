<?php

require('./PropertyConstant.php');

use pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001','Laptop',10000000,5);

//Hitung
$pajak       = Produk::persenPajak();
$jumlahPajak = Produk::hitungPajak($produk->harga);
$total       = Produk::hitungTotal($produk->harga);

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

?>