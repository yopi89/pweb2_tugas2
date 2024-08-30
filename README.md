# TUGAS 2
## Deskripsi
Tugas ini dibuat sebagai penunjang nilai tugas 2 pada matakuliah Praktikum Pemrograman WEB Semester 2

Proyek ini mendemonstrasikan penerapan prinsip OOP dalam PHP, khususnya dalam interaksi dengan database MySQL. Konsep utama yang diterapkan meliputi enkapsulasi, inheritance, dan polimorfisme. 

### Encapsulation
```php
class Animal{
    protected $name;

  public function getName(){
        return $this->name;
    }
}
```
Sama seperti sebelumnya, Encapsulation adalah konsep pengamanan data di dalam objek dengan membatasi akses ke atribut dan metode menggunakan visibility sehingga data hanya dapat dimanipulasi melalui metode tertentu. 

### Inheritance
```php
class Animal{
    ...
}

class Cat extends Animal{
    ...
}

class Dog extends Animal{
    ...
}
```
Pewarisan/Inheritance adalah mekanisme di mana sebuah kelas baru dapat mewarisi sifat-sifat (atribut dan metode) dari kelas yang sudah ada. Kelas yang diwarisi disebut superclass atau parent class, sedangkan kelas yang mewarisi disebut subclass atau child class. Ini memungkinkan pengembangan kode yang lebih efisien karena subclass dapat menggunakan kembali kode dari superclass. 

### Polimorfisme 
```php
class Animal{
    public function sound(){
        return "sound of animal";
    }
}

class Cat extends Animal{
    public function sound(){
        return "Meow";
    }
}

class Dog extends Animal{
    public function sound(){
        return "Woof";
    }
}
```
Sedangkan Polimorfisme memungkinkan objek dari berbagai kelas untuk diperlakukan sebagai objek dari kelas yang sama melalui antarmuka yang sama. Ini bisa dilakukan melalui overloading (metode yang sama dengan parameter berbeda) atau overriding (mengubah perilaku metode dari superclass di subclass).

## Database
Di tugas ini kita telah di sediakan database seperti berikut:
![alt text](assets/database.png)

## TASK
#### 1. Membuat view berbasis OOP PHP dengan menerima data dari mySQL database (hanya mengambil tabel reports, gpas dan gpa_details).
#### 2. Menggunakan __construct sebagai link untuk terhubungan ke database.
```php
public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
}
```
#### 3. Menerapkan encapsulation.
```php
class koneksi {
    private $host = "localhost";  
    private $user = "root";       
    private $pass = "";          
    private $db = "pweb2_oop_tugas_2"; 
    protected $conn;
}
```
#### 4. Menggunakan kelas turunan menggunakan inheritance.
```php
class Koneksi{
}

class Gpas extends Koneksi{
}

class GpasKhusus extends Gpas{
}
```
#### 5. Menggunakan polymorphiism
```php
class GpaDetail extends koneksi{
    public function ambilData(){
        $sql = "SELECT * FROM gpa_details";
        $data = mysqli_query($this->conn, $sql);
        while ($baris = mysqli_fetch_array($data)){
            $hasil[] = $baris;
        }
        return $hasil;
    }
}
class GpaDetail extends koneksi{
    public function ambilData(){
        $sql = "SELECT * FROM gpa_details WHERE semester_gpa = 1";
        $data = mysqli_query($this->conn, $sql);
        while ($baris = mysqli_fetch_array($data)){
            $hasil[] = $baris;
        }
        return $hasil;
    }
}

```

## Output Program
### 1. Tampilan tabel GPAS
![alt text](assets/gpas.png)
### 2. Tampilan tabel GPAS yang memiliki comulative_gpa sama dengan 3
![alt text](assets/gpas_khusus.png)
### 3. Tampilan tabel GPAS Detail
![alt text](assets/gpa_detail.png)
### 4. Tampilan tabel GPAS Detail yang memiliki semerter_gpa sama dengan 1
![alt text](assets/gpa_detail_khusus.png)
### 5. Tampilan tabel Report
![alt text](assets/report.png)
### 6. Tampilan tabel Report dengan status bernilai Rejected
![alt text](assets/report_khusus.png)



