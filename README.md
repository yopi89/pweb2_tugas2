# OOP Dasar

## Pengertian OOP Dasar
Objek-Oriented Programming (OOP) adalah paradigma pemrograman yang menggunakan “objek” - struktur data yang berisi data, dalam bentuk field, sering kali dikenal sebagai atribut; dan kode, dalam bentuk prosedur, sering kali dikenal sebagai metode.

Inti dari OOP adalah mendesain software dengan membagi masalah menjadi serangkaian objek yang saling berinteraksi. Ini bertentangan dengan pemrograman prosedural, yang fokus pada fungsi/prosedur dalam memproses data.

#### Class
```php
class Buku{

...

}
```
Class adalah template atau blueprint yang mendefinisikan struktur dan perilaku dari objek. Class mencakup attribut dan metode yang dapat dimiliki.

#### Objek
```php
$buku1 = New Buku();
```
Object mewarisi semua atribut dan metode dari class dan dapat digunakan untuk memanipulasi data atau menjalankan fungsi tertentu.

#### Attribut
```php
class Buku{
    protected $nama;
    public $judul;
    private $penuis;

}
```
Atribut adalah variabel yang terdapat di class yang digunakan untuk menyimpan data.

Jenis-jenis atribut terbagi menjadi public, protected dan private. Public dapat diakses dimana saja. Protected dapat diakses dari dalam class itu sendiri dan dari dalam class turunannya. Sedangkan Private hanya dapat diakses dari dalam class itu sendiri.

### Construct
```php
public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;       
        $this->nim = $nim;         
        $this->jurusan = $jurusan; 
}
```
Constructor adalah metode yang secara otomatis dipanggil ketika sebuah objek dari kelas dibuat. Tujuannya adalah untuk menginisialisasi objek tersebut dengan nilai-nilai awal atau melakukan setup lain yang diperlukan sebelum objek digunakan.

#### Method
```php
public function tampilInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
```
Metode adalah fungsi yang digunakan untuk melakukan tindakan pada objek.

### Encapsulation
```php
class Animal{
    protected $name;

  public function getName(){
        return $this->name;
    }
}
```
Encapsulation adalah konsep pengamanan data di dalam objek dengan membatasi akses ke atribut dan metode menggunakan visibility sehingga data hanya dapat dimanipulasi melalui metode tertentu.

### Inheritance (Pewarisan)
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
Pewarisan adalah mekanisme di mana sebuah kelas baru dapat mewarisi sifat-sifat (atribut dan metode) dari kelas yang sudah ada. Kelas yang diwarisi disebut superclass atau parent class, sedangkan kelas yang mewarisi disebut subclass atau child class. Ini memungkinkan pengembangan kode yang lebih efisien karena subclass dapat menggunakan kembali kode dari superclass.

### Polymorphism
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
Polimorfisme memungkinkan objek dari berbagai kelas untuk diperlakukan sebagai objek dari kelas yang sama melalui antarmuka yang sama. Ini bisa dilakukan melalui overloading (metode yang sama dengan parameter berbeda) atau overriding (mengubah perilaku metode dari superclass di subclass).

### Abstraction
```php
abstract class Animal{
    abstract public function sound();
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
Abstraksi adalah konsep untuk menyederhanakan representasi dari objek dengan hanya menampilkan atribut dan metode yang relevan dan menyembunyikan detail yang tidak perlu. Abstraksi dilakukan dengan menggunakan kelas abstrak, yang mendefinisikan metode umum tanpa memberikan implementasi konkret.


