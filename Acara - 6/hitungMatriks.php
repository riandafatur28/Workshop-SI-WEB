<?php
// Matriks A
$A = [
    [1, 1, 1],  // Baris 1
    [2, 2, 2],  // Baris 2
    [3, 3, 3]   // Baris 3
];

// Matriks B
$B = [
    [3, 3, 3],  // Baris 1
    [2, 2, 2],  // Baris 2
    [1, 1, 1]   // Baris 3
];

// Matriks penampung hasil penjumlahan
$C = [
    [0, 0, 0],  // Baris 1
    [0, 0, 0],  // Baris 2
    [0, 0, 0]   // Baris 3
];

// Menghitung hasil penjumlahan dari Matriks A dan Matriks B
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        // Menjumlahkan elemen dari Matriks A dan Matriks B dan menyimpan hasilnya di Matriks C
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan Matriks A
echo "Matriks A:<br>";
for ($i = 0; $i < 3; $i++) {
    // Menggabungkan elemen dalam satu baris Matriks A dan menampilkan
    echo implode(" ", $A[$i]) . "<br>";
}

// Menampilkan Matriks B
echo "<br>Matriks B:<br>";
for ($i = 0; $i < 3; $i++) {
    // Menggabungkan elemen dalam satu baris Matriks B dan menampilkan
    echo implode(" ", $B[$i]) . "<br>";
}

// Menampilkan hasil penjumlahan Matriks A dan Matriks B
echo "<br>Hasil Penjumlahan Matriksnya:<br>";
for ($i = 0; $i < 3; $i++) {
    // Menggabungkan elemen dalam satu baris Matriks C (hasil penjumlahan) dan menampilkan
    echo implode(" ", $C[$i]) . "<br>";
}
?>
