<?php
// Variable 'conn' untuk koneksi ke database web server di laragon
$conn = mysqli_connect("localhost", "root", "", "toko_baju");

// Logika untuk mengecek apakah database sudah terkoneksi atau belum, Jika belum koneksi gagal
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ganti dengan nomor WhatsApp toko (format 62, tanpa + dan tanpa 0 di depan)
define('WA_NOMOR', '6281234567890');