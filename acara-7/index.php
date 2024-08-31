<?php 
include("person.php");

$ilman = new person();
$ali = new person;
$ilman->set_name("Ilman Nafian");
$ali->set_name("Ali Muzaki");
// akses atribute name di kelas person
echo "Ilman's full name: ".$ilman->name;
?>
