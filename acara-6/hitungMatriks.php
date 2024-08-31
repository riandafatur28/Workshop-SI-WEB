<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks penampung hasil penjumlahan
$C = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];

// Menghitung hasil penjumlahan
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil
echo "Matriks A:<br>";
for ($i = 0; $i < 3; $i++) {
    echo implode(" ", $A[$i]) . "<br>";
}

echo "<br>Matriks B:<br>";
for ($i = 0; $i < 3; $i++) {
    echo implode(" ", $B[$i]) . "<br>";
}

echo "<br>Hasil Penjumlahan Matriksnya:<br>";
for ($i = 0; $i < 3; $i++) {
    echo implode(" ", $C[$i]) . "<br>";
}
?>
