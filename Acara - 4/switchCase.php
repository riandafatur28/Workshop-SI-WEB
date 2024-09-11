<?php
// Mendeklarasikan variabel $role dengan nilai "sales"
$role = "sales";

// Menggunakan struktur switch untuk memeriksa nilai dari variabel $role
switch ($role) {
    case "admin":
        // Jika $role adalah "admin", tampilkan pesan berikut
        echo "Anda login sebagai admin ";
        break;  // Menghentikan eksekusi case setelah ditemukan kecocokan
    case "teknisi":
        // Jika $role adalah "teknisi", tampilkan pesan berikut
        echo "Anda login sebagai teknisi ";
        break;  // Menghentikan eksekusi case setelah ditemukan kecocokan
    case "sales":
        // Jika $role adalah "sales", tampilkan pesan berikut
        echo "Anda login sebagai sales ";
        break;  // Menghentikan eksekusi case setelah ditemukan kecocokan
    default:
        // Jika $role tidak cocok dengan case yang ada, tampilkan pesan berikut
        echo "Role tidak dikenali";
}
?>

<!-- Informasi tambahan -->
<p>Nama : RIANDA FATURRAHMAN</p>
<p>NIM : E41231605</p>
<p>Golongan : C</p>
<p>ACARA 4</p>

<!-- Catatan tambahan -->
<p>Perulangan pada PHP</p>
