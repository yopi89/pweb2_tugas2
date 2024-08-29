<?php
// Menghubungkan ke file koneksi.php untuk menggunakan kelas koneksi
include 'koneksi.php';

// Mendefinisikan kelas Gpas yang mewarisi kelas koneksi
class Gpas extends koneksi {
    public function tampilkanData() {
        // Query SQL untuk memilih semua data dari tabel gpas dan hanya menampilkan data yang bernilai 3 pada kolom comulative_gpa
        $sql = "SELECT * FROM gpas WHERE comulative_gpa = 3";
        // Menjalankan query SQL dan menyimpan hasilnya dalam variabel $data
        $data = mysqli_query($this->conn, $sql);
        // Membuat array $hasil untuk menyimpan data yang diambil dari database
        while ($baris = mysqli_fetch_array($data)) {
            $hasil[] = $baris; // Menyimpan setiap baris hasil query ke dalam array
        }
        return $hasil;
    }
}

// Membuat objek dari kelas Gpas
$gpas = new Gpas();
$gpa = $gpas->tampilkanData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Navigasi untuk berpindah antara halaman -->
    <nav>
        <a href="gpa_detail.php">Gpa Detail</a><br>
        <a href="gpa_detail_khusus.php">Gpa Detail Khusus</a><br>
        <a href="gpas.php">GPAS</a><br>
        <a href="gpas_khusus.php">GPAS Khusus</a><br>
        <a href="reports.php">Report</a><br>
        <a href="reports_khusus.php">Report Khusus</a><br>
    </nav>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Student</th>
            <th>GPA</th>

        </tr>
        
        <?php
        // Mengiterasi setiap data GPA yang diperoleh dari database
        foreach ($gpa as $key) {
            // Menampilkan data pada setiap kolom tabel
            echo "<tr>";
            echo "<td>$key[id_gpa]</td>";
            echo "<td>$key[id_student]</td>";
            echo "<td>$key[comulative_gpa]</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
