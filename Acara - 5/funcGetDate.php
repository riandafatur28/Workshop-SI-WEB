<?php
// Menggunakan fungsi getdate() untuk mendapatkan informasi tentang tanggal dan waktu saat ini
$tanggalSekarang = getdate();

// Menampilkan hari, bulan, dan tahun dari tanggal saat ini
echo $tanggalSekarang['mday'] . " - " . $tanggalSekarang['mon'] . " - " . $tanggalSekarang['year'];
?>
