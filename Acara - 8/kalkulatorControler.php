<?php
// Definisi kelas Kalkulator
class Kalkulator {
    // Fungsi untuk melakukan penjumlahan
    public function penjumlahan(int $angka1, int $angka2): int
    {
        return $angka1 + $angka2;
    }

    // Fungsi untuk melakukan pengurangan
    public function pengurangan(int $angka1, int $angka2): int
    {
        return $angka1 - $angka2;
    }

    // Fungsi untuk melakukan pembagian
    public function pembagian(float $angka1, float $angka2): float
    {
        // Memastikan pembagi tidak nol untuk menghindari kesalahan pembagian dengan nol
        if ($angka2 == 0) {
            throw new InvalidArgumentException("Pembagi tidak boleh nol.");
        }
        return $angka1 / $angka2;
    }

    // Fungsi untuk melakukan perkalian
    public function perkalian(int $angka1, int $angka2): int
    {
        return $angka1 * $angka2;
    }
}

// Cek apakah formulir sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $angka1 = isset($_POST['angka1']) ? (float)$_POST['angka1'] : 0;  // Mendapatkan nilai angka1 dan mengkonversi ke float
    $angka2 = isset($_POST['angka2']) ? (float)$_POST['angka2'] : 0;  // Mendapatkan nilai angka2 dan mengkonversi ke float
    $operasi = isset($_POST['operasi']) ? $_POST['operasi'] : '';    // Mendapatkan jenis operasi yang dipilih

    // Inisialisasi objek Kalkulator
    $kalkulator = new Kalkulator();
    $hasil = '';  // Variabel untuk menyimpan hasil operasi

    // Tentukan hasil berdasarkan operasi yang dipilih
    try {
        switch ($operasi) {
            case 'penjumlahan':
                $hasil = $kalkulator->penjumlahan($angka1, $angka2);  // Panggil metode penjumlahan
                break;
            case 'pengurangan':
                $hasil = $kalkulator->pengurangan($angka1, $angka2);  // Panggil metode pengurangan
                break;
            case 'pembagian':
                $hasil = $kalkulator->pembagian($angka1, $angka2);  // Panggil metode pembagian
                break;
            case 'perkalian':
                $hasil = $kalkulator->perkalian($angka1, $angka2);  // Panggil metode perkalian
                break;
            default:
                $hasil = 'Operasi tidak valid';  // Pesan jika operasi tidak valid
                break;
        }
    } catch (Exception $e) {
        $hasil = $e->getMessage();  // Tangkap dan tampilkan pesan kesalahan jika terjadi exception
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
</head>
<body>
    <h1>Kalkulator PHP</h1>
    <!-- Formulir untuk memasukkan angka dan memilih operasi kalkulator -->
    <form method="post" action="">
        <label for="angka1">Angka 1:</label>
        <input type="number" step="any" name="angka1" id="angka1" required>  <!-- Input untuk angka pertama -->
        <br><br>
        <label for="angka2">Angka 2:</label>
        <input type="number" step="any" name="angka2" id="angka2" required>  <!-- Input untuk angka kedua -->
        <br><br>
        <label for="operasi">Pilih operasi:</label>
        <select name="operasi" id="operasi" required>  <!-- Dropdown untuk memilih jenis operasi -->
            <option value="penjumlahan">Penjumlahan</option>
            <option value="pengurangan">Pengurangan</option>
            <option value="pembagian">Pembagian</option>
            <option value="perkalian">Perkalian</option>
        </select>
        <br><br>
        <input type="submit" value="Hitung">  <!-- Tombol untuk mengirim formulir -->
    </form>

    <?php
    // Tampilkan hasil jika formulir sudah disubmit
    if (isset($hasil)) {
        echo "<h2>Hasil: $hasil</h2>";  // Menampilkan hasil operasi
    }
    ?>
</body>
</html>
