<?php

require_once 'Mahasiswa.php';
require_once 'Produk.php';

// Instansiasi 3 Object Mahasiswa dengan data yang diminta
$mhs1 = new Mahasiswa("24.24.032255", "Rahmansyah", "Pendidikan Teknologi Informasi", 3.85);
$mhs2 = new Mahasiswa("24.24.031635", "M. Fitriannur Akbar", "Pendidikan Teknologi Informasi", 3.65);
$mhs3 = new Mahasiswa("24.24.032095", "Okta Ramadhani", "Pendidikan Teknologi Informasi", 3.75);

echo "=== Data Mahasiswa ===" . PHP_EOL;
echo $mhs1->info() . PHP_EOL;
echo $mhs2->info() . PHP_EOL;
echo $mhs3->info() . PHP_EOL;

echo PHP_EOL . "=== Data Produk ( Minimal 20 Produk ) ===" . PHP_EOL;

// Array berisi 20 data produk
$daftarProduk = [
    new Produk("Laptop ASUS ROG", 15000000, 5),
    new Produk("Mouse Wireless Logitech", 250000, 20),
    new Produk("Keyboard Mechanical RGB", 750000, 15),
    new Produk("Monitor LG 24 Inch", 2100000, 8),
    new Produk("Printer Epson L3210", 2400000, 6),
    new Produk("Headset Gaming HyperX", 950000, 10),
    new Produk("Webcam HD 1080p", 450000, 12),
    new Produk("External Harddisk 1TB", 850000, 15),
    new Produk("Flashdisk 64GB SanDisk", 120000, 50),
    new Produk("Router WiFi TP-Link", 350000, 14),
    new Produk("SSD NVMe 512GB Samsung", 900000, 18),
    new Produk("RAM DDR4 16GB Corsair", 800000, 25),
    new Produk("Power Bank 20000mAh", 300000, 30),
    new Produk("Speaker Bluetooth JBL", 1200000, 7),
    new Produk("Microphone Condenser USB", 650000, 9),
    new Produk("Meja Komputer Ergonomis", 1800000, 4),
    new Produk("Kursi Gaming Secretlab", 3500000, 3),
    new Produk("Kabel HDMI 2.1", 85000, 40),
    new Produk("USB Hub Type-C 7-in-1", 275000, 22),
    new Produk("Cooling Pad Laptop", 180000, 16)
];

// Menampilkan 20 produk menggunakan perulangan
foreach ($daftarProduk as $index => $produk) {
    $no = $index + 1;
    echo "{$no}. Produk: {$produk->nama} | Harga: Rp" . number_format($produk->harga, 0, ',', '.') .
         " | Stok: {$produk->stok} | Total Nilai: Rp" . number_format($produk->totalNilai(), 0, ',', '.') . PHP_EOL;
}
