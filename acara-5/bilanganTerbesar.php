<?php
function bilanganTerbesar($angka1, $angka2) 
{
    if ($angka1 == $angka2){
        echo "Bilangan 1 dengan bilangan 2 memiliki nilai yang sama";
    } elseif ($angka1 > $angka2) {
        echo "Bilangan terbesar adalah : $angka1";
    } else {
        echo "Bilangan terbesar adalah : $angka2";
    }
}

bilanganTerbesar(13,10);