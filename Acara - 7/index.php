<?php 
include("person.php");

// Membuat objek dari kelas Person
$Rianda = new Person();
$Ilman = new Person();

// Mengatur nama untuk objek
$Rianda->set_name("Rianda Faturrahman");
$Ilman->set_name("Ilman Nafian");

// Mengakses atribut name di objek Rianda
echo "Rianda's full name: " . $Rianda->name;
?>
