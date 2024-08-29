<?php
// Menghubungkan ke file koneksi.php untuk menggunakan kelas koneksi ke database
include 'koneksi.php';

// Mendefinisikan kelas GpaDetail yang mewarisi kelas koneksi
class GpaDetail extends koneksi{
    public function ambilData(){
        // Query SQL untuk mengambil semua data dari tabel gpa_details dan hanya menampilkan data yang bernilai 1 pada kolom semester_gpa
        $sql = "SELECT * FROM gpa_details WHERE semester_gpa = 1";
        // Menjalankan query SQL dan menyimpan hasilnya dalam variabel $data
        $data = mysqli_query($this->conn, $sql);
        // Membuat array $hasil untuk menyimpan data yang diambil dari database
        while ($baris = mysqli_fetch_array($data)){
            $hasil[] = $baris; // Menyimpan setiap baris dari query ke dalam array
        }
        return $hasil;
    }
}

// Membuat objek dari kelas GpaDetail
$cek = new GpaDetail();
$cek2 = $cek->ambilData();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Navigasi untuk berpindah antar halaman -->
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
            <th>ID GPA</th>
            <th>Semester</th>
            <th>IP Semester</th>
        </tr>
        <?php
            // Mengiterasi setiap data laporan yang diperoleh dari database
            foreach ($cek2 as $key){
                echo "<tr>";
                // Menampilkan data pada setiap kolom tabel
                echo "<td>".$key["id_gpa_detail"]."</td>";
                echo "<td>".$key["id_gpa"]."</td>";
                echo "<td>".$key["semester"]."</td>";
                echo "<td>".$key["semester_gpa"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>