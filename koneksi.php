<?php
$conn = mysqli_connect("localhost", "root", "", "toko_baju");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ganti dengan nomor WhatsApp toko (format 62, tanpa + dan tanpa 0 di depan)
define('WA_NOMOR', '6281234567890');