TUGAS BASIS DATA 


#NO.1 Membuat database baru untuk DOKTR HEWAN.
MariaDB [(none)]> CREATE DATABASE dokter_hewan; #NO.1
Query OK, 1 row affected (0.001 sec)

#Menampilkan database yang telah dibuat yaitu dokter_hewan.
MariaDB [(none)]> SHOW databases;
+--------------------+
| Database           |
+--------------------+
| dokter_hewan       |
| information_schema |
| library            |
| modul3             |
| modul4             |
| modul_5            |
| mysql              |
| performance_schema |
| pethouse           |
| phpmyadmin         |
| test               |
+--------------------+
11 rows in set (0.025 sec)

#Memilih database dokter_hewan yang akan digunakan.
MariaDB [(none)]> use dokter_hewan;
Database changed
MariaDB [dokter_hewan]> select database();
+--------------+
| database()   |
+--------------+
| dokter_hewan |
+--------------+
1 row in set (0.000 sec)

#NO. 2 Membuat tabel dengan menambahkan field, tipe data dan panjang data pada database dokter_hewan.
MariaDB [dokter_hewan]> create table pemilik (
    -> id_pemilik int(3) NOT NULL,
    -> nama varchar(30) NOT NULL,
    -> alamat varchar(30) NOT NULL,
    -> no_telp varchar(20) NOT NULL); #NO. 2
Query OK, 0 rows affected (0.008 sec)

#Menampilkan isi struktur data dari tabel pemilik.
MariaDB [dokter_hewan]> desc pemilik;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_pemilik | int(3)      | NO   |     | NULL    |       |
| nama       | varchar(30) | NO   |     | NULL    |       |
| alamat     | varchar(30) | NO   |     | NULL    |       |
| no_telp    | varchar(20) | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.011 sec)

#NO. 2 Membuat tabel dengan menambahkan field, tipe data dan panjang data pada database dokter_hewan.
MariaDB [dokter_hewan]> create table hewan (
    -> id_hewan int(3) NOT NULL,
    -> id_pemilik int(3) NOT NULL,
    -> nama varchar(50) NOT NULL,
    -> species varchar(50) NOT NULL,
    -> gender char(3) NOT NULL); #NO. 2
Query OK, 0 rows affected (0.010 sec)

#Menampilkan isi struktur data dari tabel hewan.
MariaDB [dokter_hewan]> desc hewan
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_hewan   | int(3)      | NO   |     | NULL    |       |
| id_pemilik | int(3)      | NO   |     | NULL    |       |
| nama       | varchar(50) | NO   |     | NULL    |       |
| species    | varchar(50) | NO   |     | NULL    |       |
| gender     | char(3)     | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
5 rows in set (0.011 sec)

#NO. 2 Membuat tabel dengan menambahkan field, tipe data dan panjang data pada database dokter_hewan.
MariaDB [dokter_hewan]> create table kunjungan (
    -> id_kunjungan int(3) NOT NULL,
    -> id_hewan int(3) NOT NULL,
    -> tgl_kunjungan date NOT NULL); #NO. 2
Query OK, 0 rows affected (0.014 sec)

#Menampilkan isi struktur data dari tabel kunjungan.
MariaDB [dokter_hewan]> desc kunjungan;
+---------------+--------+------+-----+---------+-------+
| Field         | Type   | Null | Key | Default | Extra |
+---------------+--------+------+-----+---------+-------+
| id_kunjungan  | int(3) | NO   |     | NULL    |       |
| id_hewan      | int(3) | NO   |     | NULL    |       |
| tgl_kunjungan | date   | NO   |     | NULL    |       |
+---------------+--------+------+-----+---------+-------+
3 rows in set (0.012 sec)

#NO. 2 Membuat tabel dengan menambahkan field, tipe data dan panjang data pada database dokter_hewan.
MariaDB [dokter_hewan]> create table dokter_hewan (
    -> id_dokter int(3) NOT NULL,
    -> nama varchar(50) NOT NULL,
    -> spesialisasi varchar(50) NOT NULL,
    -> no_telp varchar(20) NOT NULL); #NO. 2
Query OK, 0 rows affected (0.010 sec)

#Menampilkan isi struktur data dari tabel dokter_hewan.
MariaDB [dokter_hewan]> desc dokter_hewan;
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_dokter    | int(3)      | NO   |     | NULL    |       |
| nama         | varchar(50) | NO   |     | NULL    |       |
| spesialisasi | varchar(50) | NO   |     | NULL    |       |
| no_telp      | varchar(20) | NO   |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
4 rows in set (0.012 sec)

#NO. 2 Membuat tabel dengan menambahkan field, tipe data dan panjang data pada database dokter_hewan.
MariaDB [dokter_hewan]> create table jadwal_dokter (
    -> id_jadwal int(3) NOT NULL,
    -> id_dokter int(3) NOT NULL,
    -> tgl_dokter date NOT NULL); #NO. 2
Query OK, 0 rows affected (0.011 sec)

#Menampilkan isi struktur data dari tabel jadwal_dokter.
MariaDB [dokter_hewan]> desc jadwal_dokter;
+------------+--------+------+-----+---------+-------+
| Field      | Type   | Null | Key | Default | Extra |
+------------+--------+------+-----+---------+-------+
| id_jadwal  | int(3) | NO   |     | NULL    |       |
| id_dokter  | int(3) | NO   |     | NULL    |       |
| tgl_dokter | date   | NO   |     | NULL    |       |
+------------+--------+------+-----+---------+-------+
3 rows in set (0.012 sec)

#NO. 3 Menampilkan semua database yang sudah dibuat.
MariaDB [dokter_hewan]> show databases; #NO. 3
+--------------------+
| Database           |
+--------------------+
| dokter_hewan       |
| information_schema |
| library            |
| modul3             |
| modul4             |
| modul_5            |
| mysql              |
| performance_schema |
| pethouse           |
| phpmyadmin         |
| test               |
+--------------------+
11 rows in set (0.001 sec)

#NO. 4 menampilkan isi struktur data pada tabel pemilik.
MariaDB [dokter_hewan]> desc pemilik; #NO. 4
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_pemilik | int(3)      | NO   |     | NULL    |       |
| nama       | varchar(30) | NO   |     | NULL    |       |
| alamat     | varchar(30) | NO   |     | NULL    |       |
| no_telp    | varchar(20) | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.013 sec)

#NO. 4 menampilkan isi struktur data pada tabel hewan.
MariaDB [dokter_hewan]> desc hewan; #NO. 4
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_hewan   | int(3)      | NO   |     | NULL    |       |
| id_pemilik | int(3)      | NO   |     | NULL    |       |
| nama       | varchar(50) | NO   |     | NULL    |       |
| species    | varchar(50) | NO   |     | NULL    |       |
| gender     | char(3)     | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
5 rows in set (0.013 sec)

#NO. 4 menampilkan isi struktur data pada tabel kunjungan.
MariaDB [dokter_hewan]> desc kunjungan; #NO. 4
+---------------+--------+------+-----+---------+-------+
| Field         | Type   | Null | Key | Default | Extra |
+---------------+--------+------+-----+---------+-------+
| id_kunjungan  | int(3) | NO   |     | NULL    |       |
| id_hewan      | int(3) | NO   |     | NULL    |       |
| tgl_kunjungan | date   | NO   |     | NULL    |       |
+---------------+--------+------+-----+---------+-------+
3 rows in set (0.011 sec)

#NO. 4 menampilkan isi struktur data pada tabel dokter_hewan
MariaDB [dokter_hewan]> desc dokter_hewan; #NO. 4
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_dokter    | int(3)      | NO   |     | NULL    |       |
| nama         | varchar(50) | NO   |     | NULL    |       |
| spesialisasi | varchar(50) | NO   |     | NULL    |       |
| no_telp      | varchar(20) | NO   |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
4 rows in set (0.017 sec)

#NO. 4 menampilkan isi struktur data pada tabel jadwal_dokter.
MariaDB [dokter_hewan]> desc jadwal_dokter; #NO. 4
+------------+--------+------+-----+---------+-------+
| Field      | Type   | Null | Key | Default | Extra |
+------------+--------+------+-----+---------+-------+
| id_jadwal  | int(3) | NO   |     | NULL    |       |
| id_dokter  | int(3) | NO   |     | NULL    |       |
| tgl_dokter | date   | NO   |     | NULL    |       |
+------------+--------+------+-----+---------+-------+
3 rows in set (0.015 sec)

#NO. 5 Mengisikan data pada tabel dengan menambahkan value atau nilai data  yang akan diinputkan menggunakan perintan INSERT INTO
MariaDB [dokter_hewan]> INSERT INTO pemilik values
    -> ('01', 'Ratna NH', 'Jl. Kautaman', '0888888888888'),
    -> ('02', 'Sherly A', 'Jl. Pendidikan', '099999999999'),
    -> ('03', 'Maudy Ayunda', 'Jl. Jakarta Barat', '0777777777'); #NO. 5
Query OK, 3 rows affected (0.038 sec)
Records: 3  Duplicates: 0  Warnings: 0

#NO. 5 Mengisikan data pada tabel dengan menambahkan value atau nilai data  yang akan diinputkan menggunakan perintan INSERT INTO
MariaDB [dokter_hewan]> INSERT INTO hewan values 
    -> ('11', '01', 'Xiaomimi', 'Kucing', 'F'),
    -> ('22', '02', 'Naonaow', 'Jerapah', 'M'),
    -> ('33', '03', 'Anderson', 'Kucing', 'M'); #NO. 5
Query OK, 3 rows affected (0.008 sec)
Records: 3  Duplicates: 0  Warnings: 0

#NO. 5 Mengisikan data pada tabel dengan menambahkan value atau nilai data  yang akan diinputkan menggunakan perintan INSERT INTO
MariaDB [dokter_hewan]> INSERT INTO kunjungan values
    -> ('001', '22', '2024-12-09'),
    -> ('002', '11', '2024-01-01'); #NO. 5
Query OK, 2 rows affected (0.004 sec)
Records: 2  Duplicates: 0  Warnings: 0

#NO. 5 Mengisikan data pada tabel dengan menambahkan value atau nilai data  yang akan diinputkan menggunakan perintan INSERT INTO
MariaDB [dokter_hewan]> INSERT INTO dokter_hewan values 
    -> ('1', 'DR. Clarisya', 'dokter hewan umum', '08974653562'),
    -> ('2', 'DR. Bagus Raditya', 'dokter hewan bedah', '0987653432'),
    -> ('3', 'DR. Haura Melody', 'dokter hewan gigi', '09835243536'),
    -> ('4', 'DR. Nana Grecia', 'dokter hewan dermatologi', '0735243537'); #NO. 5
Query OK, 4 rows affected (0.004 sec)
Records: 4  Duplicates: 0  Warnings: 0
#NO. 5 Mengisikan data pada tabel dengan menambahkan value atau nilai data  yang akan diinputkan menggunakan perintan INSERT INTO
MariaDB [dokter_hewan]> INSERT INTO jadwal_dokter values
    -> ('888', '1', '2024-08-08'),
    -> ('999', '2', '2024-08-07'),
    -> ('333', '3', '2024-08-06'),
    -> ('444', '4', '2024-08-05'); #NO. 5
Query OK, 4 rows affected (0.004 sec)
Records: 4  Duplicates: 0  Warnings: 0

#NO. 6 Menampilkan isi tabel yang sudah dimasukkan datanya.
MariaDB [dokter_hewan]> SELECT*FROM pemilik; #NO. 6
+------------+--------------+-------------------+---------------+
| id_pemilik | nama         | alamat            | no_telp       |
+------------+--------------+-------------------+---------------+
|          1 | Ratna NH     | Jl. Kautaman      | 0888888888888 |
|          2 | Sherly A     | Jl. Pendidikan    | 099999999999  |
|          3 | Maudy Ayunda | Jl. Jakarta Barat | 0777777777    |
+------------+--------------+-------------------+---------------+
3 rows in set (0.000 sec)

#NO. 6 Menampilkan isi tabel yang sudah dimasukkan datanya.
MariaDB [dokter_hewan]> SELECT*FROM hewan; #NO. 6
+----------+------------+----------+---------+--------+
| id_hewan | id_pemilik | nama     | species | gender |
+----------+------------+----------+---------+--------+
|       11 |          1 | Xiaomimi | Kucing  | F      |
|       22 |          2 | Naonaow  | Jerapah | M      |
|       33 |          3 | Anderson | Kucing  | M      |
+----------+------------+----------+---------+--------+
3 rows in set (0.000 sec)

#NO. 6 Menampilkan isi tabel yang sudah dimasukkan datanya.
MariaDB [dokter_hewan]> SELECT*FROM kunjungan; #NO. 6
+--------------+----------+---------------+
| id_kunjungan | id_hewan | tgl_kunjungan |
+--------------+----------+---------------+
|            1 |       22 | 2024-12-09    |
|            2 |       11 | 2024-01-01    |
+--------------+----------+---------------+
2 rows in set (0.000 sec)

#NO. 6 Menampilkan isi tabel yang sudah dimasukkan datanya.
MariaDB [dokter_hewan]> SELECT*FROM dokter_hewan; #NO. 6
+-----------+-------------------+--------------------------+-------------+
| id_dokter | nama              | spesialisasi             | no_telp     |
+-----------+-------------------+--------------------------+-------------+
|         1 | DR. Clarisya      | dokter hewan umum        | 08974653562 |
|         2 | DR. Bagus Raditya | dokter hewan bedah       | 0987653432  |
|         3 | DR. Haura Melody  | dokter hewan gigi        | 09835243536 |
|         4 | DR. Nana Grecia   | dokter hewan dermatologi | 0735243537  |
+-----------+-------------------+--------------------------+-------------+
4 rows in set (0.000 sec)

#NO. 6 Menampilkan isi tabel yang sudah dimasukkan datanya.
MariaDB [dokter_hewan]> SELECT*FROM jadwal_dokter; #NO. 6
+-----------+-----------+------------+
| id_jadwal | id_dokter | tgl_dokter |
+-----------+-----------+------------+
|       888 |         1 | 2024-08-08 |
|       999 |         2 | 2024-08-07 |
|       333 |         3 | 2024-08-06 |
|       444 |         4 | 2024-08-05 |
+-----------+-----------+------------+
4 rows in set (0.000 sec)

#NO. 7 Menambahkan PRIMARY KEY pada field (id_pemilik)
MariaDB [dokter_hewan]> alter table pemilik
    -> add primary key (id_pemilik); #NO. 7
Query OK, 0 rows affected (0.036 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc pemilik;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_pemilik | int(3)      | NO   | PRI | NULL    |       |
| nama       | varchar(30) | NO   |     | NULL    |       |
| alamat     | varchar(30) | NO   |     | NULL    |       |
| no_telp    | varchar(20) | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.011 sec)

#NO. 7 Menambahkan PRIMARY KEY pada field (id_hewan)
MariaDB [dokter_hewan]> alter table hewan
    -> add primary key (id_hewan); #NO. 7
Query OK, 0 rows affected (0.034 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc hewan;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_hewan   | int(3)      | NO   | PRI | NULL    |       |
| id_pemilik | int(3)      | NO   |     | NULL    |       |
| nama       | varchar(50) | NO   |     | NULL    |       |
| species    | varchar(50) | NO   |     | NULL    |       |
| gender     | char(3)     | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
5 rows in set (0.016 sec)

#NO. 7 Menambahkan PRIMARY KEY pada field (id_kunjungan)
MariaDB [dokter_hewan]> alter table kunjungan
    -> add primary key (id_kunjungan); #NO. 7
Query OK, 0 rows affected (0.032 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc kunjungan;
+---------------+--------+------+-----+---------+-------+
| Field         | Type   | Null | Key | Default | Extra |
+---------------+--------+------+-----+---------+-------+
| id_kunjungan  | int(3) | NO   | PRI | NULL    |       |
| id_hewan      | int(3) | NO   |     | NULL    |       |
| tgl_kunjungan | date   | NO   |     | NULL    |       |
+---------------+--------+------+-----+---------+-------+
3 rows in set (0.011 sec)


#NO. 7 Menambahkan PRIMARY KEY pada field (id_dokter)
MariaDB [dokter_hewan]> alter table dokter_hewan
    -> add primary key (id_dokter); #NO. 7
Query OK, 0 rows affected (0.035 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc dokter_hewan;
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_dokter    | int(3)      | NO   | PRI | NULL    |       |
| nama         | varchar(50) | NO   |     | NULL    |       |
| spesialisasi | varchar(50) | NO   |     | NULL    |       |
| no_telp      | varchar(20) | NO   |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
4 rows in set (0.011 sec)

#NO. 7 Menambahkan PRIMARY KEY pada field (id_jadwal)
MariaDB [dokter_hewan]> alter table jadwal_dokter
    -> add primary key (id_jadwal); #NO. 7
Query OK, 0 rows affected (0.048 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc jadwal_dokter;
+------------+--------+------+-----+---------+-------+
| Field      | Type   | Null | Key | Default | Extra |
+------------+--------+------+-----+---------+-------+
| id_jadwal  | int(3) | NO   | PRI | NULL    |       |
| id_dokter  | int(3) | NO   |     | NULL    |       |
| tgl_dokter | date   | NO   |     | NULL    |       |
+------------+--------+------+-----+---------+-------+
3 rows in set (0.014 sec)

#NO. 8 menambahkan unique
MariaDB [dokter_hewan]> alter table dokter_hewan
    -> add unique (spesialisasi); #NO. 8
Query OK, 0 rows affected (0.011 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc dokter_hewan;
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_dokter    | int(3)      | NO   | PRI | NULL    |       |
| nama         | varchar(50) | NO   |     | NULL    |       |
| spesialisasi | varchar(50) | NO   | UNI | NULL    |       |
| no_telp      | varchar(20) | NO   |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
4 rows in set (0.011 sec)

#NO. 9 Membuat tabel salinan dari tabel hewan dengan nama hewan_copy.
MariaDB [dokter_hewan]> create table hewan_copy AS SELECT*FROM hewan; #NO. 9
Query OK, 3 rows affected (0.012 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> select*from hewan_copy;
+----------+------------+----------+---------+--------+
| id_hewan | id_pemilik | nama     | species | gender |
+----------+------------+----------+---------+--------+
|       11 |          1 | Xiaomimi | Kucing  | F      |
|       22 |          2 | Naonaow  | Jerapah | M      |
|       33 |          3 | Anderson | Kucing  | M      |
+----------+------------+----------+---------+--------+
3 rows in set (0.000 sec)

#NO. 10 Memasukkan satu nama pada field species.
MariaDB [dokter_hewan]> insert into hewan_copy (species) values ('Kupu-kupu'); #NO. 10
Query OK, 1 row affected, 4 warnings (0.004 sec)

MariaDB [dokter_hewan]> select*from hewan_copy;
+----------+------------+----------+-----------+--------+
| id_hewan | id_pemilik | nama     | species   | gender |
+----------+------------+----------+-----------+--------+
|       11 |          1 | Xiaomimi | Kucing    | F      |
|       22 |          2 | Naonaow  | Jerapah   | M      |
|       33 |          3 | Anderson | Kucing    | M      |
|        0 |          0 |          | Kupu-kupu |        |
+----------+------------+----------+-----------+--------+
4 rows in set (0.000 sec)

#NO. 11 Membuat foreign key pada tabel dari referensi tabel yang memiliki PRIMARY KEY
MariaDB [dokter_hewan]> alter table hewan
    -> add foreign key (id_pemilik) references pemilik (id_pemilik) on update cascade on delete cascade; #NO. 11
Query OK, 3 rows affected (0.049 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc hewan;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_hewan   | int(3)      | NO   | PRI | NULL    |       |
| id_pemilik | int(3)      | NO   | MUL | NULL    |       |
| nama       | varchar(50) | NO   |     | NULL    |       |
| species    | varchar(50) | NO   |     | NULL    |       |
| gender     | char(3)     | NO   |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
5 rows in set (0.018 sec)

#NO. 11 Membuat foreign key pada tabel dari referensi tabel yang memiliki PRIMARY KEY
MariaDB [dokter_hewan]> alter table kunjungan
    -> add foreign key (id_hewan) references hewan (id_hewan) on update cascade on delete cascade; #NO. 11
Query OK, 2 rows affected (0.043 sec)
Records: 2  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc kunjungan;
+---------------+--------+------+-----+---------+-------+
| Field         | Type   | Null | Key | Default | Extra |
+---------------+--------+------+-----+---------+-------+
| id_kunjungan  | int(3) | NO   | PRI | NULL    |       |
| id_hewan      | int(3) | NO   | MUL | NULL    |       |
| tgl_kunjungan | date   | NO   |     | NULL    |       |
+---------------+--------+------+-----+---------+-------+
3 rows in set (0.017 sec)

#NO. 11 Membuat foreign key pada tabel dari referensi tabel yang memiliki PRIMARY KEY
MariaDB [dokter_hewan]> alter table jadwal_dokter
    -> add foreign key (id_dokter) references dokter_hewan (id_dokter) on update cascade on delete cascade; #NO. 11
Query OK, 4 rows affected (0.043 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc jadwal_dokter;
+------------+--------+------+-----+---------+-------+
| Field      | Type   | Null | Key | Default | Extra |
+------------+--------+------+-----+---------+-------+
| id_jadwal  | int(3) | NO   | PRI | NULL    |       |
| id_dokter  | int(3) | NO   | MUL | NULL    |       |
| tgl_dokter | date   | NO   |     | NULL    |       |
+------------+--------+------+-----+---------+-------+
3 rows in set (0.012 sec)

#NO. 12 Menambahkan data pada tabel pemilik.
MariaDB [dokter_hewan]> insert into pemilik values ('4', 'Nanaaaa', 'Jl. Cilacap', '056839834897'); #NO. 12
Query OK, 1 row affected (0.004 sec)

MariaDB [dokter_hewan]> select*from pemilik;
+------------+--------------+-------------------+---------------+
| id_pemilik | nama         | alamat            | no_telp       |
+------------+--------------+-------------------+---------------+
|          1 | Ratna NH     | Jl. Kautaman      | 0888888888888 |
|          2 | Sherly A     | Jl. Pendidikan    | 099999999999  |
|          3 | Maudy Ayunda | Jl. Jakarta Barat | 0777777777    |
|          4 | Nanaaaa      | Jl. Cilacap       | 056839834897  |
+------------+--------------+-------------------+---------------+
4 rows in set (0.000 sec)

#NO. 13 Menambahkan data pada tabel kunjungan.
MariaDB [dokter_hewan]> insert into kunjungan values ('3', '33', '2024-09-16'); #NO. 13
Query OK, 1 row affected (0.004 sec)

MariaDB [dokter_hewan]> select*from kunjungan;
+--------------+----------+---------------+
| id_kunjungan | id_hewan | tgl_kunjungan |
+--------------+----------+---------------+
|            1 |       22 | 2024-12-09    |
|            2 |       11 | 2024-01-01    |
|            3 |       33 | 2024-09-16    |
+--------------+----------+---------------+
3 rows in set (0.000 sec)

#NO. 14 Menghapus data pada perintah nomor 12.
MariaDB [dokter_hewan]> DELETE FROM pemilik
    -> WHERE (nama='Nanaaaa'); #NO. 14
Query OK, 1 row affected (0.004 sec)

MariaDB [dokter_hewan]> select*from pemilik;
+------------+--------------+-------------------+---------------+
| id_pemilik | nama         | alamat            | no_telp       |
+------------+--------------+-------------------+---------------+
|          1 | Ratna NH     | Jl. Kautaman      | 0888888888888 |
|          2 | Sherly A     | Jl. Pendidikan    | 099999999999  |
|          3 | Maudy Ayunda | Jl. Jakarta Barat | 0777777777    |
+------------+--------------+-------------------+---------------+
3 rows in set (0.000 sec)

#NO. 15 Menampilkan isi tabel kunjungan.
MariaDB [dokter_hewan]> select*from kunjungan; #NO. 15
+--------------+----------+---------------+
| id_kunjungan | id_hewan | tgl_kunjungan |
+--------------+----------+---------------+
|            1 |       22 | 2024-12-09    |
|            2 |       11 | 2024-01-01    |
|            3 |       33 | 2024-09-16    |
+--------------+----------+---------------+
3 rows in set (0.000 sec)


MariaDB [dokter_hewan]> desc kunjungan;
+---------------+--------+------+-----+---------+-------+
| Field         | Type   | Null | Key | Default | Extra |
+---------------+--------+------+-----+---------+-------+
| id_kunjungan  | int(3) | NO   | PRI | NULL    |       |
| id_hewan      | int(3) | NO   | MUL | NULL    |       |
| tgl_kunjungan | date   | NO   |     | NULL    |       |
+---------------+--------+------+-----+---------+-------+
3 rows in set (0.009 sec)

#NO. 16 Menambahkan field biaya_kunjungan pada tabel.
MariaDB [dokter_hewan]> alter table kunjungan
    -> add biaya_kunjungan float(8.2) NOT NULL; #NO. 16
Query OK, 0 rows affected (0.006 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc kunjungan;
+-----------------+--------+------+-----+---------+-------+
| Field           | Type   | Null | Key | Default | Extra |
+-----------------+--------+------+-----+---------+-------+
| id_kunjungan    | int(3) | NO   | PRI | NULL    |       |
| id_hewan        | int(3) | NO   | MUL | NULL    |       |
| tgl_kunjungan   | date   | NO   |     | NULL    |       |
| biaya_kunjungan | float  | NO   |     | NULL    |       |
+-----------------+--------+------+-----+---------+-------+
4 rows in set (0.011 sec)

#NO. 17 Memodifikasi atau mengganti nama field pada tabel.
MariaDB [dokter_hewan]> alter table kunjungan
    -> change biaya_kunjungan tarif_kunjungan float(8.2) NOT NULL; #NO. 17
Query OK, 0 rows affected (0.007 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc kunjungan;
+-----------------+--------+------+-----+---------+-------+
| Field           | Type   | Null | Key | Default | Extra |
+-----------------+--------+------+-----+---------+-------+
| id_kunjungan    | int(3) | NO   | PRI | NULL    |       |
| id_hewan        | int(3) | NO   | MUL | NULL    |       |
| tgl_kunjungan   | date   | NO   |     | NULL    |       |
| tarif_kunjungan | float  | NO   |     | NULL    |       |
+-----------------+--------+------+-----+---------+-------+
4 rows in set (0.010 sec)
#NO. 18 Menghapus nama field pada tabel kunjungan.
MariaDB [dokter_hewan]> alter table kunjungan
    -> drop tarif_kunjungan; #NO. 18
Query OK, 0 rows affected (0.008 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> desc kunjungan; #NO. 18
+---------------+--------+------+-----+---------+-------+
| Field         | Type   | Null | Key | Default | Extra |
+---------------+--------+------+-----+---------+-------+
| id_kunjungan  | int(3) | NO   | PRI | NULL    |       |
| id_hewan      | int(3) | NO   | MUL | NULL    |       |
| tgl_kunjungan | date   | NO   |     | NULL    |       |
+---------------+--------+------+-----+---------+-------+
3 rows in set (0.013 sec)

#NO. 19 Mengganti nama tabel kunjungan menjadi data_kunjungan.
MariaDB [dokter_hewan]> alter table kunjungan rename data_kunjungan; #NO. 19
Query OK, 0 rows affected (0.009 sec)

#NO. 19 menampilkan nama tabel yang telah diganti yaitu data_kunjungan.
MariaDB [dokter_hewan]> show tables;
+------------------------+
| Tables_in_dokter_hewan |
+------------------------+
| data_kunjungan         |
| dokter_hewan           |
| hewan                  |
| hewan_copy             |
| jadwal_dokter          |
| pembayaran             |
| pemilik                |
+------------------------+
7 rows in set (0.001 sec)

#NO. 20 Menghapus semua data pada tabel data_kunjungan.
MariaDB [dokter_hewan]> truncate table data_kunjungan; #NO. 20
Query OK, 0 rows affected (0.034 sec)

MariaDB [dokter_hewan]> select*from data_kunjungan;
Empty set (0.000 sec)

#NO. 21 Mengisi 3 data menggunakan satu perintah atau query pada tabel data_kunjungan.
MariaDB [dokter_hewan]> insert into data_kunjungan values
    -> ('4', '11', '2024-03-12'),
    -> ('5', '33', '2024-09-24'),
    -> ('6', '22', '2024-10-10'); #NO. 21
Query OK, 3 rows affected (0.003 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [dokter_hewan]> select*from data_kunjungan;
+--------------+----------+---------------+
| id_kunjungan | id_hewan | tgl_kunjungan |
+--------------+----------+---------------+
|            4 |       11 | 2024-03-12    |
|            5 |       33 | 2024-09-24    |
|            6 |       22 | 2024-10-10    |
+--------------+----------+---------------+
3 rows in set (0.000 sec)

MariaDB [klinik_sehat]> UPDATE table pemilik
    -> SET nama='DR. Bagus Raditya'
    -> WHERE (nama='Maudy Ayunda'); #NO 22
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'table pemilik
SET nama='DR. Bagus Raditya'
WHERE (nama='Maudy Ayunda')' at line 1

#NO. 23 Hapus data dokter_hewan yang memiliki spesialisasi dokter hewan gigi
MariaDB [dokter_hewan]> delete from dokter_hewan
    -> where (spesialisasi='dokter hewan gigi'); #NO. 23
Query OK, 1 row affected (0.008 sec)

MariaDB [dokter_hewan]> select*from dokter_hewan;
+-----------+-------------------+--------------------------+-------------+
| id_dokter | nama              | spesialisasi             | no_telp     |
+-----------+-------------------+--------------------------+-------------+
|         1 | DR. Clarisya      | dokter hewan umum        | 08974653562 |
|         2 | DR. Bagus Raditya | dokter hewan bedah       | 0987653432  |
|         4 | DR. Nana Grecia   | dokter hewan dermatologi | 0735243537  |
+-----------+-------------------+--------------------------+-------------+
3 rows in set (0.000 sec)


MariaDB [dokter_hewan]> show tables;
+------------------------+
| Tables_in_dokter_hewan |
+------------------------+
| data_kunjungan         |
| dokter_hewan           |
| hewan                  |
| hewan_copy             |
| jadwal_dokter          |
| pembayaran             |
| pemilik                |
+------------------------+
7 rows in set (0.001 sec)


MariaDB [dokter_hewan]> drop table data_kunjungan; #NO. 24
Query OK, 0 rows affected (0.008 sec)


MariaDB [dokter_hewan]> drop table hewan;#NO. 24
Query OK, 0 rows affected (0.007 sec)


MariaDB [dokter_hewan]> drop table hewan_copy; #NO. 24
Query OK, 0 rows affected (0.008 sec)


MariaDB [dokter_hewan]> drop table pembayaran; #NO. 24
Query OK, 0 rows affected (0.008 sec)

MariaDB [dokter_hewan]> drop table jadwal_dokter; #NO. 24
Query OK, 0 rows affected (0.008 sec)

MariaDB [dokter_hewan]> drop table pemilik; #NO. 24
Query OK, 0 rows affected (0.009 sec)

MariaDB [dokter_hewan]> drop table dokter_hewan; #NO. 24
Query OK, 0 rows affected (0.006 sec)

MariaDB [dokter_hewan]> show tables; #NO. 24
Empty set (0.000 sec)

MariaDB [dokter_hewan]> show databases;
+--------------------+
| Database           |
+--------------------+
| dokter_hewan       |
| information_schema |
| library            |
| modul3             |
| modul4             |
| modul_5            |
| mysql              |
| performance_schema |
| pethouse           |
| phpmyadmin         |
| test               |
+--------------------+
11 rows in set (0.001 sec)

#NO. 25 Menghapus database dokter_hewan
MariaDB [dokter_hewan]> drop database dokter_hewan; #NO. 25
Query OK, 0 rows affected (0.021 sec)

MariaDB [(none)]> show databases; #NO. 25 Menampilkan database yang masih ada.
+--------------------+
| Database           |
+--------------------+
| information_schema |
| library            |
| modul3             |
| modul4             |
| modul_5            |
| mysql              |
| performance_schema |
| pethouse           |
| phpmyadmin         |
| test               |
+--------------------+
10 rows in set (0.001 sec)

MariaDB [(none)]> \q #Menutup file ini.
