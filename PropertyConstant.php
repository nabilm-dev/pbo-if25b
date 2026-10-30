<?php

namespace pbo\marketplace;

class Produk {

    // Properti
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor (sudah diaktifkan, tanda // dihapus)
    public function __construct(string $kode, string $nama, int $harga, int $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method static
    public static function persenPajak(): float {
        return self::PAJAK * 100;
    }

    public static function hitungPajak(int $harga): float {
        return $harga * self::PAJAK;
    }

    public static function hitungTotal(int $harga): float {
        return $harga + self::hitungPajak($harga);
    }
}