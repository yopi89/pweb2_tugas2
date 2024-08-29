<?php
// Mendefinisikan kelas koneksi untuk mengatur koneksi ke database
class koneksi {
    // Deklarasi properti yang bersifat private untuk menyimpan informasi koneksi
    private $host = "localhost";  
    private $user = "root";       
    private $pass = "";          
    private $db = "pweb2_oop_tugas_2"; 

    // Deklarasi properti yang bersifat protected untuk koneksi database
    protected $conn;

    public function __construct() {
        // Membuat koneksi ke database menggunakan fungsi mysqli_connect
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        // Jika gagal, script akan dihentikan dan menampilkan pesan error
        /* if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        } */
    }
}

?>
