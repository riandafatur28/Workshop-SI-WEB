<?php

include_once 'kalkulatorControler.php';

$kalkulator = new Kalkulator(5, 2);
echo $kalkulator->pembagian() .PHP_EOL;
echo $kalkulator->penjumlahan();