<?php

// Logika sederhana untuk mengecek ketersedian
$tanggal = "2024-09-02";
$tanggal_tersedia = ["2024-09-01", "2024-09-02", "2024-09-03"]; // Tanggal tersedia
var_dump($tanggal_tersedia);
if (in_array(trim($tanggal), $tanggal_tersedia)) {
    echo "Tiket tersedia untuk tanggal tersebut.";
} else {
    echo "Tiket tidak tersedia untuk tanggal tersebut.";
}

echo"\n";

// Logika sederhana untuk rating
$rating = 3;

if ($rating >= 4) {
    echo "Ulasan sangat baik!";
} elseif ($rating >= 3) {
    echo "Ulasan baik.";
} elseif ($rating >= 2) {
    echo "Ulasan cukup.";
} else {
    echo "Ulasan kurang.";
}
?>
