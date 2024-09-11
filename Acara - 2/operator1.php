<?php
// Mendeklarasikan variabel $tugas1 dan $tugas2 dengan nilai masing-masing
$tugas1 = 90;  // Nilai tugas 1
$tugas2 = 80;  // Nilai tugas 2

// Menghitung jumlah dari kedua tugas
$jumlah = $tugas1 + $tugas2;  // Menjumlahkan nilai tugas 1 dan tugas 2

// Menghitung rata-rata dari kedua tugas
$rerata = $jumlah / 2;  // Membagi jumlah tugas dengan 2 untuk mendapatkan rerata

// Menampilkan nilai tugas 1
echo "Nilai Tugas 1 : " . $tugas1 . "<br>";

// Menampilkan nilai tugas 2
echo "Nilai Tugas 2 : " . $tugas2 . "<br>";

// Menampilkan rerata dari kedua tugas
echo "Rerata Tugas : " . $rerata;
echo "<br>";

// Menambahkan operator penggabungan string (".")
// Menggabungkan nilai $tugas1 dan $tugas2 sebagai string tanpa penjumlahan
$gabung = "Hasil penggabungan : " . $tugas1 . $tugas2;

// Menampilkan hasil penggabungan string dari nilai tugas 1 dan tugas 2
echo $gabung;
?>
