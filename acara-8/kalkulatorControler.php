<?php

    class Kalkulator{
        private $angka1; 
        private $angka2;

        public function __construct($angka1 = 0,$angka2 = 0)
        {
            $this->angka1 = $angka1;
            $this->angka2 = $angka2;
        }
        public function penjumlahan() : int
        {
            return $this->angka1 + $this ->angka2;
        }

        public function pengurangan() : int
        {
            return $this->angka1 - $this ->angka2;;
        }

        public function pembagian() : float
        {
            return $this->angka1 / $this ->angka2;;
        }

        public function perkalian() : int{
            return $this->angka1 * $this ->angka2;;
        }
    }

    class main{
        public function main()
        {
            $kalkulator = new Kalkulator(5, 2);
            echo $kalkulator->pembagian();
            var_dump($kalkulator->pengurangan());
        }
    }