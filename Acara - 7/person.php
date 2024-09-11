<?php
class Person {
    // Atribut yang dapat diakses di luar kelas harus dideklarasikan sebagai public
    public $name;

    // Metode untuk mengatur nama
    public function set_name($name) {
        $this->name = $name;
    }
}
?>
