<?php

// Mendeklarasikan variabel $tanggal dengan nilai tanggal yang ingin diperiksa
$tanggal = "2024-09-02";

// Mendeklarasikan array $tanggal_tersedia yang berisi tanggal-tanggal yang tiketnya tersedia
$tanggal_tersedia = ["2024-09-01", "2024-09-02", "2024-09-03"];  // Tanggal-tanggal yang tiketnya tersedia

// Memeriksa apakah $tanggal ada dalam array $tanggal_tersedia
if (in_array(trim($tanggal), $tanggal_tersedia)) {
    // Jika tanggal tersedia, menampilkan pesan bahwa tiket tersedia
    echo "Tiket tersedia untuk tanggal tersebut.";
} else {
    // Jika tanggal tidak tersedia, menampilkan pesan bahwa tiket tidak tersedia
    echo "Tiket tidak tersedia pada tanggal tersebut";
}

echo "\n";  // Menambahkan baris baru (jika dijalankan di terminal)

// Mendeklarasikan variabel $rating dengan nilai rating yang diberikan
$rating = 3;

// Logika untuk menentukan ulasan berdasarkan nilai rating
if ($rating >= 4) {
    // Jika rating 4 atau lebih, tampilkan ulasan sangat baik
    echo "Ulasan sangat baik!";
} elseif ($rating >= 3) {
    // Jika rating antara 3 (inklusif) dan 3.99, tampilkan ulasan baik
    echo "Ulasan baik.";
} elseif ($rating >= 2) {
    // Jika rating antara 2 (inklusif) dan 2.99, tampilkan ulasan cukup
    echo "Ulasan cukup.";
} else {
    // Jika rating kurang dari 2, tampilkan ulasan kurang
    echo "Ulasan kurang.";
}

?>
