<?php

// Logika sederhana untuk mengecek ketersedian
$tanggal_tersedia = ["2024-09-01", "2024-02-03", "2024-09-03"]; // Tanggal tersedia
if (in_array("2024-02-03", $tanggal_tersedia)) {
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
