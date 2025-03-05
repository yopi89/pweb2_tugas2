mysql> #Membuat database e-commerce
mysql> create database e_commerce;
Query OK, 1 row affected (1.03 sec)

mysql> use e_commerce;
Database changed
mysql> create table produk(
    -> id_produk varchar(10) not null primary key,
    -> nama_produk varchar(50) not null,
    -> kategori varchar(30) not null,
    -> harga decimal(10.2) not null,
    -> stok int(5) not null 
    -> )engine=InnoDB;
Query OK, 0 rows affected, 1 warning (2.02 sec)

mysql> create table pelanggan(
    -> id_pelanggan varchar(10) primary key not null,
    -> nama varchar(50) not null,
    -> alamat varchar(100) not null,
    -> kota varchar(50) not null,
    -> telepon varchar(15) not null unique
    -> )engine=InnoDB;
Query OK, 0 rows affected (0.05 sec)

mysql> create table pesanan(
    -> id_pesanan varchar(10) not null primary key,
    -> id_pelanggan varchar(10) not null,
    -> tgl_pesanan date not null,
    -> foreign key (id_pelanggan) references pelanggan (id_pelanggan) on update cascade on delete cascade
    -> )engine=InnoDB;
Query OK, 0 rows affected (1.58 sec)

mysql> create table detail_pesanan(
    -> id_detail varchar(10) not null primary key,
    -> id_pesanan varchar(10) not null,
    -> id_produk varchar(10) not null,
    -> jumlah int(3) not null,
    -> total_harga decimal(10.2) not null,
    -> foreign key (id_pesanan) references pesanan (id_pesanan) on update cascade on delete cascade, 
    -> foreign key (id_produk) references produk (id_produk) on update cascade on delete cascade
    -> )engine=InnoDB;
Query OK, 0 rows affected, 1 warning (0.15 sec)

mysql> desc pelanggan;
+--------------+--------------+------+-----+---------+-------+
| Field        | Type         | Null | Key | Default | Extra |
+--------------+--------------+------+-----+---------+-------+
| id_pelanggan | varchar(10)  | NO   | PRI | NULL    |       |
| nama         | varchar(50)  | NO   |     | NULL    |       |
| alamat       | varchar(100) | NO   |     | NULL    |       |
| kota         | varchar(50)  | NO   |     | NULL    |       |
| telepon      | varchar(15)  | NO   | UNI | NULL    |       |
+--------------+--------------+------+-----+---------+-------+
5 rows in set (2.11 sec)

mysql> desc produk;
+-------------+---------------+------+-----+---------+-------+
| Field       | Type          | Null | Key | Default | Extra |
+-------------+---------------+------+-----+---------+-------+
| id_produk   | varchar(10)   | NO   | PRI | NULL    |       |
| nama_produk | varchar(50)   | NO   |     | NULL    |       |
| kategori    | varchar(30)   | NO   |     | NULL    |       |
| harga       | decimal(10,0) | NO   |     | NULL    |       |
| stok        | int           | NO   |     | NULL    |       |
+-------------+---------------+------+-----+---------+-------+
5 rows in set (0.01 sec)

mysql> desc pesanan;
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_pesanan   | varchar(10) | NO   | PRI | NULL    |       |
| id_pelanggan | varchar(10) | NO   | MUL | NULL    |       |
| tgl_pesanan  | date        | NO   |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
3 rows in set (0.01 sec)

mysql> desc detail_pesanan;
+-------------+---------------+------+-----+---------+-------+
| Field       | Type          | Null | Key | Default | Extra |
+-------------+---------------+------+-----+---------+-------+
| id_detail   | varchar(10)   | NO   | PRI | NULL    |       |
| id_pesanan  | varchar(10)   | NO   | MUL | NULL    |       |
| id_produk   | varchar(10)   | NO   | MUL | NULL    |       |
| jumlah      | int           | NO   |     | NULL    |       |
| total_harga | decimal(10,0) | NO   |     | NULL    |       |
+-------------+---------------+------+-----+---------+-------+
5 rows in set (0.02 sec)

mysql> insert into pelanggan
    -> values
    -> ('CUST001', 'Budi Santoso', 'Jl. Merdeka No.1', 'Jakarta', '081234567890'),
    -> ('CUST002', 'Siti Aisyah', 'Jl. Melati No.15', 'Bandung', '081298765432'),
    -> ('CUST003', 'Dewi Lestari', 'Jl. Diponegoro No.20', 'Surabaya', '081377788899'),
    -> ('CUST004', 'Joko Widodo', 'Jl. Sudirman No.5', 'Semarang', '081234123456'),
    -> ('CUST005', 'Agus Salim', 'Jl. Ahmad Yani No.3', 'Medan', '082234455666'),
    -> ('CUST006', 'Rina Kartika', 'Jl. Mawar No.10', 'Yogyakarta', '081345678901'),
    -> ('CUST007', 'Doni Saputra', 'Jl. Anggrek No.8', 'Bandung', '081255667788'),
    -> ('CUST008', 'Sari Handayani', 'Jl. Sakura No.12', 'Denpasar', '081245566677'),
    -> ('CUST009', 'Andi Wijaya', 'Jl. Cemara No.6', 'Makassar', '081233344455'),
    -> ('CUST010', 'Maya Sari', 'Jl. Cempaka No.9', 'Palembang', '081255778899');
Query OK, 10 rows affected (0.59 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql> insert into produk
    -> values
    -> ('PROD001', 'Laptop Asus', 'Elektronik', 7500000.00, 50),
    -> ('PROD002', 'HP Samsung', 'Elektronik', 5000000.00, 40),
    -> ('PROD003', 'Headphone Sony', 'Aksesoris', 1500000.00, 100),
    -> ('PROD004', 'Printer Epson', 'Elektronik', 2000000.00, 30),
    -> ('PROD005', 'Meja Kerja', 'Furniture', 1200000.00, 20),
    -> ('PROD006', 'Kursi Gaming', 'Furniture', 2500000.00, 15),
    -> ('PROD007', 'Router TP-Link', 'Networking', 500000.00, 60),
    -> ('PROD008', 'Flashdisk Sandisk 32GB', 'Aksesoris', 150000.00, 200),
    -> ('PROD009', 'Smartwatch Xiaomi', 'Wearable', 800000.00, 35),
    -> ('PROD010', 'Powerbank Anker 20K', 'Aksesoris', 350000.00, 80);
Query OK, 10 rows affected (0.60 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql> insert into pesanan
    -> values
    -> ('ORD001', 'CUST001', '2024-02-15'),
    -> ('ORD002', 'CUST002', '2024-02-16'),
    -> ('ORD003', 'CUST003', '2024-02-17'),
    -> ('ORD004', 'CUST004', '2024-02-18'),
    -> ('ORD005', 'CUST005', '2024-02-19'),
    -> ('ORD006', 'CUST006', '2024-02-20'),
    -> ('ORD007', 'CUST007', '2024-02-21'),
    -> ('ORD008', 'CUST008', '2024-02-22'),
    -> ('ORD009', 'CUST009', '2024-02-23'),
    -> ('ORD010', 'CUST010', '2024-02-24');
Query OK, 10 rows affected (1.71 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql> insert into detail_pesanan
    -> values
    -> ('DET001', 'ORD001', 'PROD001', 1, 7500000.00),
    -> ('DET002', 'ORD002', 'PROD002', 2, 10000000.00),
    -> ('DET003', 'ORD003', 'PROD003', 3, 4500000.00),
    -> ('DET004', 'ORD004', 'PROD004', 1, 2000000.00),
    -> ('DET005', 'ORD005', 'PROD005', 2, 2400000.00),
    -> ('DET006', 'ORD006', 'PROD006', 1, 2500000.00),
    -> ('DET007', 'ORD007', 'PROD007', 4, 2000000.00),
    -> ('DET008', 'ORD008', 'PROD008', 5, 750000.00),
    -> ('DET009', 'ORD009', 'PROD009', 2, 1600000.00),
    -> ('DET010', 'ORD010', 'PROD010', 3, 1050000.00);
Query OK, 10 rows affected (0.90 sec)
Records: 10  Duplicates: 0  Warnings: 0
mysql> select*from pelanggan;
+--------------+----------------+----------------------+------------+--------------+
| id_pelanggan | nama           | alamat               | kota       | telepon      |
+--------------+----------------+----------------------+------------+--------------+
| CUST001      | Budi Santoso   | Jl. Merdeka No.1     | Jakarta    | 081234567890 |
| CUST002      | Siti Aisyah    | Jl. Melati No.15     | Bandung    | 081298765432 |
| CUST003      | Dewi Lestari   | Jl. Diponegoro No.20 | Surabaya   | 081377788899 |
| CUST004      | Joko Widodo    | Jl. Sudirman No.5    | Semarang   | 081234123456 |
| CUST005      | Agus Salim     | Jl. Ahmad Yani No.3  | Medan      | 082234455666 |
| CUST006      | Rina Kartika   | Jl. Mawar No.10      | Yogyakarta | 081345678901 |
| CUST007      | Doni Saputra   | Jl. Anggrek No.8     | Bandung    | 081255667788 |
| CUST008      | Sari Handayani | Jl. Sakura No.12     | Denpasar   | 081245566677 |
| CUST009      | Andi Wijaya    | Jl. Cemara No.6      | Makassar   | 081233344455 |
| CUST010      | Maya Sari      | Jl. Cempaka No.9     | Palembang  | 081255778899 |
+--------------+----------------+----------------------+------------+--------------+
10 rows in set (1.55 sec)

mysql> select*from produk;
+-----------+------------------------+------------+---------+------+
| id_produk | nama_produk            | kategori   | harga   | stok |
+-----------+------------------------+------------+---------+------+
| PROD001   | Laptop Asus            | Elektronik | 7500000 |   50 |
| PROD002   | HP Samsung             | Elektronik | 5000000 |   40 |
| PROD003   | Headphone Sony         | Aksesoris  | 1500000 |  100 |
| PROD004   | Printer Epson          | Elektronik | 2000000 |   30 |
| PROD005   | Meja Kerja             | Furniture  | 1200000 |   20 |
| PROD006   | Kursi Gaming           | Furniture  | 2500000 |   15 |
| PROD007   | Router TP-Link         | Networking |  500000 |   60 |
| PROD008   | Flashdisk Sandisk 32GB | Aksesoris  |  150000 |  200 |
| PROD009   | Smartwatch Xiaomi      | Wearable   |  800000 |   35 |
| PROD010   | Powerbank Anker 20K    | Aksesoris  |  350000 |   80 |
+-----------+------------------------+------------+---------+------+
10 rows in set (0.02 sec)

mysql> select*from pesanan;
+------------+--------------+-------------+
| id_pesanan | id_pelanggan | tgl_pesanan |
+------------+--------------+-------------+
| ORD001     | CUST001      | 2024-02-15  |
| ORD002     | CUST002      | 2024-02-16  |
| ORD003     | CUST003      | 2024-02-17  |
| ORD004     | CUST004      | 2024-02-18  |
| ORD005     | CUST005      | 2024-02-19  |
| ORD006     | CUST006      | 2024-02-20  |
| ORD007     | CUST007      | 2024-02-21  |
| ORD008     | CUST008      | 2024-02-22  |
| ORD009     | CUST009      | 2024-02-23  |
| ORD010     | CUST010      | 2024-02-24  |
+------------+--------------+-------------+
10 rows in set (0.01 sec)

mysql> select*from detail_pesanan;
+-----------+------------+-----------+--------+-------------+
| id_detail | id_pesanan | id_produk | jumlah | total_harga |
+-----------+------------+-----------+--------+-------------+
| DET001    | ORD001     | PROD001   |      1 |     7500000 |
| DET002    | ORD002     | PROD002   |      2 |    10000000 |
| DET003    | ORD003     | PROD003   |      3 |     4500000 |
| DET004    | ORD004     | PROD004   |      1 |     2000000 |
| DET005    | ORD005     | PROD005   |      2 |     2400000 |
| DET006    | ORD006     | PROD006   |      1 |     2500000 |
| DET007    | ORD007     | PROD007   |      4 |     2000000 |
| DET008    | ORD008     | PROD008   |      5 |      750000 |
| DET009    | ORD009     | PROD009   |      2 |     1600000 |
| DET010    | ORD010     | PROD010   |      3 |     1050000 |
+-----------+------------+-----------+--------+-------------+
10 rows in set (0.01 sec)

mysql> #2
mysql> #a. Tampilkan nama produk yang berasal dari kategori "Elektronik" yang memiliki stok lebih dari 20 unit

mysql> SELECT nama_produk 
    -> FROM Produk 
    -> WHERE id_produk IN (
    ->     SELECT id_produk 
    ->     FROM Produk 
    ->     WHERE kategori = 'Elektronik' AND stok > 20
    -> );
+---------------+
| nama_produk   |
+---------------+
| Laptop Asus   |
| HP Samsung    |
| Printer Epson |
+---------------+
3 rows in set (1.76 sec)

mysql> #b. Tampilkan nama produk yang belum pernah dipesan oleh pelanggan
mysql> SELECT nama_produk 
    -> FROM Produk 
    -> WHERE id_produk NOT IN (
    ->     SELECT DISTINCT id_produk FROM detail_pesanan
    -> );
Empty set (0.82 sec)

mysql> 
mysql> #c. Tampilkan daftar pesanan yang dilakukan oleh pelanggan bernama "Budi Santoso", dengan informasi berikut: nama_produk, kategori, jumlah, total_harga
mysql> SELECT 
    ->     p.nama_produk, 
    ->     p.kategori, 
    ->     dp.jumlah, 
    ->     dp.total_harga
    -> FROM detail_pesanan dp
    -> JOIN produk p ON dp.id_produk = p.id_produk
    -> WHERE dp.id_pesanan IN (
    ->     SELECT id_pesanan 
    ->     FROM pesanan 
    ->     WHERE id_pelanggan = (
    ->         SELECT id_pelanggan 
    ->         FROM pelanggan 
    ->         WHERE nama = 'Budi Santoso'
    ->     )
    -> );
+-------------+------------+--------+-------------+
| nama_produk | kategori   | jumlah | total_harga |
+-------------+------------+--------+-------------+
| Laptop Asus | Elektronik |      1 |     7500000 |
+-------------+------------+--------+-------------+
1 row in set (0.61 sec)

mysql> 
mysql> #d. Tampilkan id_pelanggan, nama, id_pesanan, dan tgl_pesanan untuk pelanggan yang melakukan transaksi pada tanggal 2024-02-15
mysql> SELECT id_pelanggan, nama, 
    ->     (SELECT id_pesanan FROM pesanan WHERE pesanan.id_pelanggan = pelanggan.id_pelanggan AND tgl_pesanan = '2024-02-15') AS id_pesanan,
    ->     (SELECT tgl_pesanan FROM pesanan WHERE pesanan.id_pelanggan = pelanggan.id_pelanggan AND tgl_pesanan = '2024-02-15') AS tgl_pesanan
    -> FROM pelanggan
    -> WHERE id_pelanggan IN (
    ->     SELECT id_pelanggan 
    ->     FROM pesanan 
    ->     WHERE tgl_pesanan = '2024-02-15'
    -> );
+--------------+--------------+------------+-------------+
| id_pelanggan | nama         | id_pesanan | tgl_pesanan |
+--------------+--------------+------------+-------------+
| CUST001      | Budi Santoso | ORD001     | 2024-02-15  |
+--------------+--------------+------------+-------------+
1 row in set (1.58 sec)

mysql> #e. Tampilkan id_pelanggan, nama, nama_produk, kategori, dan tgl_pesanan untuk produk-produk dalam kategori "Aksesoris"
mysql> SELECT p.id_pelanggan, p.nama, 
    ->     (SELECT pr.nama_produk FROM produk pr WHERE pr.id_produk = dp.id_produk) AS nama_produk,
    ->     (SELECT pr.kategori FROM produk pr WHERE pr.id_produk = dp.id_produk) AS kategori,
    ->     (SELECT ps.tgl_pesanan FROM pesanan ps WHERE ps.id_pesanan = dp.id_pesanan) AS tgl_pesanan
    -> FROM pelanggan p
    -> JOIN pesanan ps ON p.id_pelanggan = ps.id_pelanggan
    -> JOIN detail_pesanan dp ON ps.id_pesanan = dp.id_pesanan
    -> WHERE dp.id_produk IN (
    ->     SELECT id_produk 
    ->     FROM produk 
    ->     WHERE kategori = 'Aksesoris'
    -> );
+--------------+----------------+------------------------+-----------+-------------+
| id_pelanggan | nama           | nama_produk            | kategori  | tgl_pesanan |
+--------------+----------------+------------------------+-----------+-------------+
| CUST003      | Dewi Lestari   | Headphone Sony         | Aksesoris | 2024-02-17  |
| CUST008      | Sari Handayani | Flashdisk Sandisk 32GB | Aksesoris | 2024-02-22  |
| CUST010      | Maya Sari      | Powerbank Anker 20K    | Aksesoris | 2024-02-24  |
+--------------+----------------+------------------------+-----------+-------------+
3 rows in set (1.72 sec)

mysql> #f. Tampilkan nama produk, kategori, dan harga untuk produk yang tidak pernah dipesan oleh pelanggan
mysql> SELECT nama_produk, kategori, harga
    -> FROM produk
    -> WHERE id_produk NOT IN (
    ->     SELECT DISTINCT id_produk 
    ->     FROM detail_pesanan
    -> );
Empty set (1.84 sec)

mysql> #3
mysql> #a. Buatlah sebuah view dengan nama v_produk_terjual yang berisi nama produk dan jumlah total yang telah dipesan untuk masing-masing produk
mysql> CREATE VIEW v_produk_terjual AS
    -> SELECT p.nama_produk, SUM(dp.jumlah) AS total_terjual
    -> FROM produk p
    -> JOIN detail_pesanan dp ON p.id_produk = dp.id_produk
    -> GROUP BY p.nama_produk;
Query OK, 0 rows affected (2.34 sec)

mysql> select*from v_produk_terjual;
+------------------------+---------------+
| nama_produk            | total_terjual |
+------------------------+---------------+
| Laptop Asus            |             1 |
| HP Samsung             |             2 |
| Headphone Sony         |             3 |
| Printer Epson          |             1 |
| Meja Kerja             |             2 |
| Kursi Gaming           |             1 |
| Router TP-Link         |             4 |
| Flashdisk Sandisk 32GB |             5 |
| Smartwatch Xiaomi      |             2 |
| Powerbank Anker 20K    |             3 |
+------------------------+---------------+
10 rows in set (0.63 sec)

mysql> #b. Buatlah sebuah view dengan nama v_transaksi_pelanggan yang berisi nama pelanggan, tanggal pesanan, dan total harga pesanan
mysql> create view v_transaksi_pelanggan as
    -> select p.nama as nama_pelanggan, ps.tgl_pesanan, sum(dp.total_harga) as total_harga_pesanan
    -> from pelanggan p
    -> join pesanan ps on p.id_pelanggan=ps.id_pelanggan
    -> join detail_pesanan dp on ps.id_pesanan=dp.id_pesanan
    -> group by p.nama, ps.tgl_pesanan;
Query OK, 0 rows affected (3.21 sec)

mysql> select*from v_transaksi_pelanggan;
+----------------+-------------+---------------------+
| nama_pelanggan | tgl_pesanan | total_harga_pesanan |
+----------------+-------------+---------------------+
| Budi Santoso   | 2024-02-15  |             7500000 |
| Siti Aisyah    | 2024-02-16  |            10000000 |
| Dewi Lestari   | 2024-02-17  |             4500000 |
| Joko Widodo    | 2024-02-18  |             2000000 |
| Agus Salim     | 2024-02-19  |             2400000 |
| Rina Kartika   | 2024-02-20  |             2500000 |
| Doni Saputra   | 2024-02-21  |             2000000 |
| Sari Handayani | 2024-02-22  |              750000 |
| Andi Wijaya    | 2024-02-23  |             1600000 |
| Maya Sari      | 2024-02-24  |             1050000 |
+----------------+-------------+---------------------+
10 rows in set (0.61 sec)

mysql> #c. Gunakan view untuk menampilkan jumlah transaksi yang dilakukan oleh pelanggan di masing-masing kota
mysql> create view v_transaksi as
    -> select p.kota, count(p.id_pelanggan) as jumlah_transaksi
    -> from pelanggan p
    -> join pesanan ps on p.id_pelanggan=ps.id_pelanggan
    -> group by p.kota;
Query OK, 0 rows affected (2.59 sec)

mysql> select*from v_transaksi;
+------------+------------------+
| kota       | jumlah_transaksi |
+------------+------------------+
| Jakarta    |                1 |
| Bandung    |                2 |
| Surabaya   |                1 |
| Semarang   |                1 |
| Medan      |                1 |
| Yogyakarta |                1 |
| Denpasar   |                1 |
| Makassar   |                1 |
| Palembang  |                1 |
+------------+------------------+
9 rows in set (0.00 sec)

mysql> #d. Hapus semua view, tabel, dan database yang telah dibuat
mysql> show tables;
+-----------------------+
| Tables_in_e_commerce  |
+-----------------------+
| detail_pesanan        |
| pelanggan             |
| pesanan               |
| produk                |
| v_produk_terjual      |
| v_transaksi           |
| v_transaksi_pelanggan |
+-----------------------+
7 rows in set (3.03 sec)

mysql> drop view v_produk_terjual;
Query OK, 0 rows affected (1.85 sec)

mysql> drop view v_transaksi;
Query OK, 0 rows affected (0.02 sec)

mysql> drop view v_transaksi_pelanggan;
Query OK, 0 rows affected (0.01 sec)

mysql> drop table detail_pesanan;
Query OK, 0 rows affected (1.20 sec)

mysql> drop table pesanan;
Query OK, 0 rows affected (0.15 sec)

mysql> drop table produk;
Query OK, 0 rows affected (0.07 sec)

mysql> drop table pelanggan;
Query OK, 0 rows affected (0.14 sec)

mysql> drop database e_commerce;
Query OK, 0 rows affected (0.88 sec)

mysql> Terminal close -- exit!

# MODUL 1
mysql> #5. Tampilkan id_kendaraan, no_kendaraan dan merk kendaraan dari table kendaraan, yang harga sewa terbesar
mysql> SELECT id_kendaraan, no_kendaraan, merek
    -> FROM kendaraan
    -> WHERE harga_sewa = (SELECT MAX(harga_sewa) FROM kendaraan);
+--------------+--------------+--------+
| id_kendaraan | no_kendaraan | merek  |
+--------------+--------------+--------+
|          301 | R 2345 QT    | Toyota |
+--------------+--------------+--------+
1 row in set (1.18 sec)

mysql> #6. Tampilkan id_kendaraan dan jenis_kendaraan yang memiliki jenis bbm selain solar.
mysql> SELECT id_kendaraan, jenis_kendaraan
    -> FROM jns_kendaraan
    -> WHERE id_kendaraan NOT IN (
    -> SELECT id_kendaraan FROM jns_kendaraan WHERE jenis_bbm = 'Solar'
    -> );
+--------------+-----------------+
| id_kendaraan | jenis_kendaraan |
+--------------+-----------------+
|          300 | Minibus         |
|          301 | Sedan           |
|          303 | Minibus         |
|          304 | Minibus         |
+--------------+-----------------+
4 rows in set (1.47 sec)

mysql> #7. Tampilkan semua data kendaraan yang dalam ststus perbaikan
mysql> SELECT * FROM kendaraan k
    -> WHERE EXISTS (
    -> SELECT 1 FROM kendaraan WHERE k.id_kendaraan = id_kendaraan AND status_kendaraan = 'Perbaikan'
    -> );
+--------------+--------------+----------+------------+------------------+
| id_kendaraan | no_kendaraan | merek    | harga_sewa | status_kendaraan |
+--------------+--------------+----------+------------+------------------+
|          303 | R 2356 BT    | Daihatsu |       2000 | Perbaikan        |
+--------------+--------------+----------+------------+------------------+
1 row in set (0.07 sec)

mysql> #8. T ampilkan id_sewa, nomor_kendaraan, merk dari table detail sewa dan table kendaraan, yang memiliki biaya sewa tertinggi 
mysql> SELECT ds.id_sewa, k.no_kendaraan, k.merek, ds.biaya_sewa
    -> FROM detail_sewa ds
    -> JOIN kendaraan k ON ds.id_kendaraan = k.id_kendaraan
    -> WHERE ds.biaya_sewa >= ALL (
    -> SELECT biaya_sewa FROM detail_sewa
    -> );
+---------+--------------+--------+------------+
| id_sewa | no_kendaraan | merek  | biaya_sewa |
+---------+--------------+--------+------------+
|     500 | R 2345 QT    | Toyota |       7500 |
+---------+--------------+--------+------------+
1 row in set (0.08 sec)

mysql> #9. Tampilkan id_kendaraan, nomor_kendaraan, merk yang memiliki biaya sewakurang dari 7500
mysql> SELECT k.id_kendaraan, k.no_kendaraan, k.merek, ds.biaya_sewa
    -> FROM kendaraan k
    -> JOIN detail_sewa ds ON k.id_kendaraan = ds.id_kendaraan
    -> WHERE ds.biaya_sewa < ANY (
    -> SELECT biaya_sewa FROM detail_sewa WHERE biaya_sewa >= 7500
    -> );
+--------------+--------------+----------+------------+
| id_kendaraan | no_kendaraan | merek    | biaya_sewa |
+--------------+--------------+----------+------------+
|          300 | R 1234 CT    | Toyota   |       6000 |
|          304 | R 1256 BT    | Daihatsu |       6000 |
+--------------+--------------+----------+------------+
2 rows in set (0.21 sec)

mysql> #10. Tampilkan id_kendaraan, jenis_kendaraan, merk, harga_sewa dan status_kendaraan yang memiliki jenis bahan bakar premium
mysql> SELECT k.id_kendaraan, jk.jenis_kendaraan, k.merek, k.harga_sewa, k.status_kendaraan
    -> FROM kendaraan k
    -> JOIN jns_kendaraan jk ON k.id_kendaraan = jk.id_kendaraan
    -> WHERE jk.jenis_bbm IN ('Premium');
+--------------+-----------------+----------+------------+------------------+
| id_kendaraan | jenis_kendaraan | merek    | harga_sewa | status_kendaraan |
+--------------+-----------------+----------+------------+------------------+
|          303 | Minibus         | Daihatsu |       2000 | Perbaikan        |
|          304 | Minibus         | Daihatsu |       2000 | Baik             |
+--------------+-----------------+----------+------------+------------------+
2 rows in set (0.00 sec)

mysql> Terminal close -- exit!


# MODUL 2
mysql> #1 Membuat view dengan nama view1 dari table employee 
mysql> create view view1 as
    -> select concat (first_name, " ", last_name), city from employee;
Query OK, 0 rows affected (0.84 sec)

mysql> #2 Menampilkan isi view1
mysql> select*from view1;
+-------------------------------------+-----------+
| concat (first_name, " ", last_name) | city      |
+-------------------------------------+-----------+
| Jason Martin                        | Toronto   |
| Alison Matews                       | Vancouver |
| James Smith                         | Vancouver |
| Celia Rice                          | Vancouver |
| Robert Black                        | Vancouver |
| Linda Green                         | New York  |
| David Larry                         | New York  |
| James Cat                           | Vancouver |
+-------------------------------------+-----------+
8 rows in set (0.02 sec)

mysql> #3 Mendefinisikan gabungan first_name dan last_name menjadi kolom name
mysql> create view view2 (name, place) as
    -> select concat (first_name, " ", last_name), city from employee;
Query OK, 0 rows affected (0.02 sec)

mysql> # Menampilkan isi view2
mysql> select*from view2;
+---------------+-----------+
| name          | place     |
+---------------+-----------+
| Jason Martin  | Toronto   |
| Alison Matews | Vancouver |
| James Smith   | Vancouver |
| Celia Rice    | Vancouver |
| Robert Black  | Vancouver |
| Linda Green   | New York  |
| David Larry   | New York  |
| James Cat     | Vancouver |
+---------------+-----------+
8 rows in set (0.00 sec)

mysql> #4 Membuatan view menggunakan atribut algoritma MERGE
mysql> create algorithm = merge view v_merge (name, salary) as
    -> select concat (first_name, " ", last_name), salary
    -> from employee where salary > 2000;
Query OK, 0 rows affected (0.02 sec)

mysql> #5 Menampilkan isi table v_merge
mysql> select*from v_merge;
+---------------+---------+
| name          | salary  |
+---------------+---------+
| Alison Matews | 6661.78 |
| James Smith   | 6544.78 |
| Celia Rice    | 2344.78 |
| Robert Black  | 2344.78 |
| Linda Green   | 4322.78 |
| David Larry   | 7897.78 |
+---------------+---------+
6 rows in set (0.04 sec)

mysql> select*from v_merge where salary < 5000;
+--------------+---------+
| name         | salary  |
+--------------+---------+
| Celia Rice   | 2344.78 |
| Robert Black | 2344.78 |
| Linda Green  | 4322.78 |
+--------------+---------+
3 rows in set (0.01 sec)

mysql> #Menambahkan Klausa WHERE
mysql> select concat (first_name, " ", last_name), salary
    -> from employee where salary > 2000;
+-------------------------------------+---------+
| concat (first_name, " ", last_name) | salary  |
+-------------------------------------+---------+
| Alison Matews                       | 6661.78 |
| James Smith                         | 6544.78 |
| Celia Rice                          | 2344.78 |
| Robert Black                        | 2344.78 |
| Linda Green                         | 4322.78 |
| David Larry                         | 7897.78 |
+-------------------------------------+---------+
6 rows in set (0.00 sec)

mysql> #Kausa WHERE pada query ditambahkan pada view menggunakan konektor AND
mysql> select concat (first_name, " ", last_name), salary
    -> from employee where (salary > 2000) AND (salary < 5000);
+-------------------------------------+---------+
| concat (first_name, " ", last_name) | salary  |
+-------------------------------------+---------+
| Celia Rice                          | 2344.78 |
| Robert Black                        | 2344.78 |
| Linda Green                         | 4322.78 |
+-------------------------------------+---------+
3 rows in set (0.01 sec)

mysql> #6 Algoritma MERGE yang tidak bisa digunakan, karena terdapat GROUP BY pada statement SELECT serta fungsi aggregate COUNT ()
mysql> create algorithm = merge view myview (city, number_of_employee) as
    -> select city, count(id) from employee group by city;
Query OK, 0 rows affected, 1 warning (0.11 sec)

mysql> SHOW WARNINGS\G;
*************************** 1. row ***************************
  Level: Warning
   Code: 1354
Message: View merge algorithm can't be used here for now (assumed undefined algorithm)
1 row in set (0.03 sec)

ERROR: 
No query specified

mysql> #7 Mengganti algoritma MERGE dengan algoritma TEMPTABLE
mysql> create algorithm = temptable view tempView (city, number_of_employee) as
    -> select city, count(id) from employee group by city;
Query OK, 0 rows affected (0.01 sec)

mysql> #Menampilkan isi tempView;
mysql> select*from tempView;
+-----------+--------------------+
| city      | number_of_employee |
+-----------+--------------------+
| Toronto   |                  1 |
| Vancouver |                  5 |
| New York  |                  2 |
+-----------+--------------------+
3 rows in set (0.15 sec)

mysql> #8 Update view2 yang memiliki city ?Toronto? diupdate menjadi ?Canberra?
mysql> select*from view2;
+---------------+-----------+
| name          | place     |
+---------------+-----------+
| Jason Martin  | Toronto   |
| Alison Matews | Vancouver |
| James Smith   | Vancouver |
| Celia Rice    | Vancouver |
| Robert Black  | Vancouver |
| Linda Green   | New York  |
| David Larry   | New York  |
| James Cat     | Vancouver |
+---------------+-----------+
8 rows in set (0.01 sec)

mysql> update view2 set place = "Canberra"
    -> where place="Toronto";
Query OK, 1 row affected (0.24 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> #Menampilkan data setelah di update
mysql> select*from view2;
+---------------+-----------+
| name          | place     |
+---------------+-----------+
| Jason Martin  | Canberra  |
| Alison Matews | Vancouver |
| James Smith   | Vancouver |
| Celia Rice    | Vancouver |
| Robert Black  | Vancouver |
| Linda Green   | New York  |
| David Larry   | New York  |
| James Cat     | Vancouver |
+---------------+-----------+
8 rows in set (0.00 sec)

mysql> #Update data juga terjadi di table employee
mysql> select*from employee where city="Canbera";
Empty set (0.00 sec)

mysql> select*from employee where city="Canberra";
+----+------------+-----------+------------+------------+---------+----------+-------------+
| id | first_name | last_name | start_date | end_date   | salary  | city     | description |
+----+------------+-----------+------------+------------+---------+----------+-------------+
|  1 | Jason      | Martin    | 1996-07-25 | 2006-07-25 | 1234.56 | Canberra | Programer   |
+----+------------+-----------+------------+------------+---------+----------+-------------+
1 row in set (0.00 sec)

mysql> #9 Penggunaan insert untuk mengupdate view
mysql> insert into view2
    -> values
    -> ('Miss Marple', 'London');
ERROR 1348 (HY000): Column 'name' is not updatable
mysql> #Insert untuk view tidak dapat dilakukan karena memiliki kolom turunan yaitu name turunan dari CONCAT (first_name, ? ?, last_name)
mysql> #Meskipun demikian, view2 ini tetap dapat diupdate, namun hanya pada kolom yang bukan kolom turunan
mysql> update view2 set nama="John Doe" where name="James Bond"n;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'n' at line 1
mysql> update view2 set nama="John Doe" where name="James Bond";
ERROR 1054 (42S22): Unknown column 'nama' in 'field list'
mysql> update view2 set place="Toronto" where place="Canberra";
Query OK, 1 row affected (0.06 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> #Manampilkan isi view2
mysql> select*from view2;
+---------------+-----------+
| name          | place     |
+---------------+-----------+
| Jason Martin  | Toronto   |
| Alison Matews | Vancouver |
| James Smith   | Vancouver |
| Celia Rice    | Vancouver |
| Robert Black  | Vancouver |
| Linda Green   | New York  |
| David Larry   | New York  |
| James Cat     | Vancouver |
+---------------+-----------+
8 rows in set (0.00 sec)

mysql> #10 Penggunaan CHECK OPTION
mysql> create view v1 as
    -> select first_name, salary, city from employee
    -> where salary < 3000
    -> with check option;
Query OK, 0 rows affected (1.55 sec)

mysql> create view v2 as
    -> select*from v1 where salary > 0 with local check option;
Query OK, 0 rows affected (0.34 sec)

mysql> insert into v2 values ("Doe", 3500, "Indonesia");
ERROR 1369 (HY000): CHECK OPTION failed 'test.v2'
mysql> insert into v2 values ("Hancock", 3500, "Jakarta");
ERROR 1369 (HY000): CHECK OPTION failed 'test.v2'
mysql> #Data brnilai salary 3500 tidak dapat dimasukkan karena pengecekan dilakukan secara CASCADED
mysql> 
mysql> #11 Merubah view dengan ALTER VIEW
mysql> select*from view1;
+-------------------------------------+-----------+
| concat (first_name, " ", last_name) | city      |
+-------------------------------------+-----------+
| Jason Martin                        | Toronto   |
| Alison Matews                       | Vancouver |
| James Smith                         | Vancouver |
| Celia Rice                          | Vancouver |
| Robert Black                        | Vancouver |
| Linda Green                         | New York  |
| David Larry                         | New York  |
| James Cat                           | Vancouver |
+-------------------------------------+-----------+
8 rows in set (0.27 sec)

mysql> alter view view1 (name, city) as
    -> select concat (first_name, " ", last_name), city from employee;
Query OK, 0 rows affected (0.19 sec)

mysql> select*from view1;
+---------------+-----------+
| name          | city      |
+---------------+-----------+
| Jason Martin  | Toronto   |
| Alison Matews | Vancouver |
| James Smith   | Vancouver |
| Celia Rice    | Vancouver |
| Robert Black  | Vancouver |
| Linda Green   | New York  |
| David Larry   | New York  |
| James Cat     | Vancouver |
+---------------+-----------+
8 rows in set (0.01 sec)

mysql> #12 Melihat sisntaks untuk pembuatan view
mysql> show create view view1\G
*************************** 1. row ***************************
                View: view1
         Create View: CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view1` (`name`,`city`) AS select concat(`employee`.`first_name`,' ',`employee`.`last_name`) AS `concat (first_name, " ", last_name)`,`employee`.`city` AS `city` from `employee`
character_set_client: cp850
collation_connection: cp850_general_ci
1 row in set (0.01 sec)

mysql> #13 Melihat descripsi dari view yang telah kita buat
mysql> desc view1
    -> ;
+-------+-------------+------+-----+---------+-------+
| Field | Type        | Null | Key | Default | Extra |
+-------+-------------+------+-----+---------+-------+
| name  | varchar(31) | YES  |     | NULL    |       |
| city  | varchar(10) | YES  |     | NULL    |       |
+-------+-------------+------+-----+---------+-------+
2 rows in set (0.40 sec)

mysql> #14 Menghapus view yang telah kita buat
mysql> drop view view1;
Query OK, 0 rows affected (0.11 sec)

mysql> 
mysql> 
