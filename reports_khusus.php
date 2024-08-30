<?php
// Menghubungkan ke file koneksi.php untuk menggunakan kelas koneksi ke database
include 'koneksi.php';

// Mendefinisikan kelas Reports yang mewarisi kelas koneksi
class Reports extends koneksi {
    public function ambilData() {
        // Query SQL untuk mengambil semua data dari tabel reports dan hanya menampilkan data yang bernilai Rejected pada kolom status
        $sql = "SELECT * FROM reports WHERE status = 'Rejected'";
        // Menjalankan query SQL dan menyimpan hasilnya dalam variabel $data
        $data = mysqli_query($this->conn, $sql);
        // Membuat array $hasil untuk menyimpan data yang diambil dari database
        while ($baris = mysqli_fetch_array($data)){
            $hasil[] = $baris; // Menyimpan setiap baris hasil query ke dalam array
        }
        return $hasil;
    }

}
// Membuat objek dari kelas Reports
$cek = new Reports();
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

    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>ID Warnings</th>
            <th>ID Gpa Detail</th>
            <th>ID Guidance</th>
            <th>ID Achievement</th>
            <th>ID Scholarship</th>
            <th>ID Student Withdrawals</th>
            <th>ID Tuition Arrears</th>
            <th>Report Date</th>
            <th>Status</th>
            <th>Has acc academic advisor</th>
            <th>Has Acc Head Of Program</th>
        </tr>
        <?php
            // Mengiterasi setiap data laporan yang diperoleh dari database
            foreach ($cek2 as $key){
                echo "<tr>";
                // Menampilkan data pada setiap kolom tabel
                echo "<td>".$key["id_report"]."</td>";
                echo "<td>".$key["id_warnings"]."</td>";
                echo "<td>".$key["id_gpa_detail"]."</td>";
                echo "<td>".$key["id_guidance"]."</td>";
                echo "<td>".$key["id_achievement"]."</td>";
                echo "<td>".$key["id_sholarship"]."</td>";
                echo "<td>".$key["id_student_withdrawals"]."</td>";
                echo "<td>".$key["id_tuition_arrears"]."</td>";
                echo "<td>".$key["report_date"]."</td>";
                echo "<td>".$key["status"]."</td>";
                echo "<td>".$key["has_acc_academic_advisor"]."</td>";
                echo "<td>".$key["has_acc_head_of_program"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
