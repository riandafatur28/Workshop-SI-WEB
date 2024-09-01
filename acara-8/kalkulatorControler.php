<?php

    class Kalkulator{
        public function penjumlahan($angka1,$angka2) : int
        {
            return $angka1 + $angka2;
        }

        public function pengurangan(int $angka1,$angka2) : int
        {
            return $angka1 - $angka2;
        }

        public function pembagian($angka1,$angka2) : float
        {
            return $angka1 / $angka2;
        }

        public function perkalian($angka1,$angka2) : int{
            return $angka1 * $angka2;
        }


    }