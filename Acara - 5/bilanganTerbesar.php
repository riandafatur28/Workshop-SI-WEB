<?php
// Mendefinisikan fungsi bilanganTerbesar untuk menentukan bilangan terbesar di antara dua angka
function bilanganTerbesar($angka1, $angka2)
{
    // Memeriksa apakah kedua angka sama
    if ($angka1 == $angka2) {
        echo "Bilangan 1 dan bilangan 2 memiliki nilai yang sama";
    } 
    // Memeriksa apakah angka1 lebih besar dari angka2
    elseif ($angka1 > $angka2) {
        echo "Bilangan terbesar adalah : $angka1";
    } 
    // Jika tidak sama dan angka1 tidak lebih besar dari angka2, maka angka2 adalah yang terbesar
    else {
        echo "Bilangan terbesar adalah : $angka2";
    }
}

// Memanggil fungsi bilanganTerbesar dengan argumen 13 dan 10
bilanganTerbesar(13, 10);
?>
