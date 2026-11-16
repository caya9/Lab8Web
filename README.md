# 💻 LAPORAN PRAKTIKUM 8

## PHP dan Database MySQL

---

## 👤 IDENTITAS MAHASISWA

| Keterangan         | Identitas                                                 |
| :----------------- | :---------------------------------------------------------|                    
| **Nama**           | Chaya Aulia                                               |
| **NIM**            | 312510197                                                 |
| **Kelas**          | I251B                                                     |
| **Dosen Pengampu** | Agung Nugroho, S.Kom., M.Kom., S.Kom., M. Kom             |
| **Mata Kuliah**    | Pemrograman Web                                           |
| **Praktikum**      | Praktikum 8 – PHP dan Database MySQL                      |

---

## 📌 1. DESKRIPSI PRAKTIKUM

Praktikum 8 membahas tentang penggunaan PHP dan database MySQL dalam pembuatan aplikasi web sederhana. Pada praktikum ini, dibuat sebuah aplikasi pengelolaan data barang yang dapat melakukan proses CRUD (*Create, Read, Update, Delete*).

Aplikasi ini menggunakan PHP sebagai bahasa pemrograman sisi server dan MySQL sebagai tempat penyimpanan data. Pengelolaan database dilakukan melalui phpMyAdmin, sedangkan proses penulisan kode menggunakan Visual Studio Code.

## 🎯 2. TUJUAN PRAKTIKUM

Berdasarkan modul Praktikum 8, tujuan dari praktikum ini adalah:

1. Mahasiswa mampu memahami konsep dasar database.
2. Mahasiswa mampu memahami konsep dasar CRUD menggunakan PHP.
3. Mahasiswa mampu membuat program CRUD sederhana menggunakan PHP.

## 🛠️ 3. TOOLS DAN TEKNOLOGI

| Tools              | Keterangan                         |
| :----------------- | :--------------------------------- |
| Visual Studio Code | Editor untuk menulis kode program  |
| XAMPP              | Web server lokal                   |
| Apache             | Menjalankan aplikasi PHP           |
| MySQL              | Mengelola database                 |
| phpMyAdmin         | Mengelola database melalui browser |
| PHP                | Bahasa pemrograman aplikasi        |
| HTML               | Membuat struktur halaman web       |
| CSS                | Mengatur tampilan halaman web      |

---

## 📂 4. STRUKTUR FOLDER PROJECT

Project dibuat dengan nama folder `lab8_php_database` dan diletakkan di dalam direktori `htdocs`.

```text
lab8_php_database/
│
├── koneksi.php
├── index.php
├── tambah.php
├── ubah.php
├── hapus.php
├── style.css
│
├── database.sql
│
└── gambar/
    ├── Hp_Samsung_S25_Ram_12GB_Internal_256GB_Garansi_Resmi_Silver_Shadow.jpg
    ├── Xiaomi_Mi_12T_5G_Ram_8_Rom_256GB_Putih.jpg
    └── oppo_A3x_4_128_garansi_resmi.jpg
```

**Penjelasan file:**

- `koneksi.php` : Menghubungkan PHP dengan database MySQL.
- `index.php` : Menampilkan seluruh data barang.
- `tambah.php` : Menambahkan data barang baru.
- `ubah.php` : Mengubah data barang yang sudah tersimpan.
- `hapus.php` : Menghapus data barang.
- `style.css` : Mengatur tampilan halaman web.
- `database.sql` : Menyimpan perintah SQL untuk database.
- `gambar/` : Menyimpan gambar barang.

---

## 🚀 5. LANGKAH-LANGKAH PRAKTIKUM

### A. Persiapan XAMPP

Langkah pertama adalah menjalankan aplikasi XAMPP. Aktifkan Apache dan MySQL melalui XAMPP Control Panel.

**Hasil:** Apache dan MySQL berhasil dijalankan.

📷 Screenshot:

<img width="1915" height="1013" alt="1 PersiapanXAMPP" src="https://github.com/user-attachments/assets/6bf9d2d0-6865-47c8-8a11-988e17a9a345" />

### B. Membuat Database dan Membuat Tabel Data Barang

Database dibuat melalui phpMyAdmin dengan nama `latihan1`.

Perintah SQL:

```sql
CREATE DATABASE latihan1;
```
Setelah database berhasil dibuat, selanjutnya membuat tabel dengan nama `data_barang`.

```sql
CREATE TABLE data_barang (
    id_barang int(10) auto_increment Primary Key,
    kategori varchar(30),
    nama varchar(30),
    gambar varchar(100),
    harga_beli decimal(10,0),
    harga_jual decimal(10,0),
    stok int(4)
);
```

Tabel ini digunakan untuk menyimpan informasi barang, seperti nama, kategori, gambar, harga beli, harga jual, dan stok.

📷 Screenshot:

<img width="1065" height="280" alt="2 Buat-Tabel-Barang" src="https://github.com/user-attachments/assets/ef5ad7dc-b1f7-4d87-9110-194e047cc04c" />


### C. Menambahkan Data Awal

Memasukkan tiga data barang ke dalam tabel `data_barang`.

```sql
INSERT INTO data_barang
(kategori, nama, gambar, harga_beli, harga_jual, stok)
VALUES
('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```

📷 Screenshot:

<img width="1012" height="232" alt="3 Data-Barang" src="https://github.com/user-attachments/assets/2c294be3-9fe0-4218-b183-f7aa392b561e" />

**Tampilan Tabel**
<img width="1091" height="377" alt="4 Tampilan-data-barang" src="https://github.com/user-attachments/assets/bbb74acb-cab5-41d8-954c-fd65535327c2" />

**Tampilan pada phpMyadmin**
<img width="1917" height="1018" alt="Tampilan-phpMyadmin" src="https://github.com/user-attachments/assets/5f82e5c5-f879-4de2-840e-80952586a915" />


### D. Membuat Koneksi Database

Membuat file `koneksi.php` untuk menghubungkan aplikasi PHP dengan database MySQL.

File ini menggunakan fungsi `mysqli_connect()` dengan konfigurasi database `latihan1`.

📷 Screenshot:

<img width="1917" height="1020" alt="1 Koneksi-database" src="https://github.com/user-attachments/assets/8c7d7b1c-def5-45e5-b16d-6c332216d926" />
<img width="1917" height="1015" alt="Tampilan-koneksi-database(1)" src="https://github.com/user-attachments/assets/bf1c48b3-d65a-49fc-a7f4-ed0123809710" />


### E. Menampilkan Data Barang (Read)

Membuat file `index.php` untuk mengambil dan menampilkan data barang dari database menggunakan perintah `SELECT`.

Data ditampilkan dalam bentuk tabel yang berisi gambar, nama barang, kategori, harga jual, harga beli, stok, dan aksi.

📷 Screenshot:

<img width="1917" height="1013" alt="2 Membuat-file-index php-(Read)" src="https://github.com/user-attachments/assets/e2934657-87bc-4553-8ba1-f940ad9ff00a" />
<img width="1101" height="462" alt="Tampilan-Read(2)" src="https://github.com/user-attachments/assets/37de83b4-2f35-4d5b-b651-0b043611b21a" />



### F. Menambahkan Data Barang (Create)

Membuat file `tambah.php` yang berfungsi untuk memasukkan data barang baru melalui form.

Data yang dimasukkan meliputi:

- Nama barang.
- Kategori.
- Harga jual.
- Harga beli.
- Stok.
- File gambar.

Data disimpan ke database menggunakan perintah `INSERT INTO`.

📷 Screenshot:

<img width="1917" height="1021" alt="3 Membuat-file-tambah php-(Create)" src="https://github.com/user-attachments/assets/add63629-1d15-4756-a09e-f476c52f398c" />
<img width="1917" height="1020" alt="Tampilan-tambah(3)" src="https://github.com/user-attachments/assets/c543820e-5cf8-43e4-b2d8-6dcd26ab57a4" />


### G. Mengubah Data Barang (Update)

Membuat file `ubah.php` untuk memperbarui informasi barang yang sudah tersimpan.

Data barang diambil berdasarkan `id_barang`, kemudian ditampilkan pada form agar dapat diedit.

Proses perubahan data menggunakan perintah `UPDATE`.

📷 Screenshot:

<img width="1916" height="1018" alt="4 Membuat-file-ubah php-(Update)" src="https://github.com/user-attachments/assets/b113643e-14c9-41a8-a29f-212da22c52a5" />
<img width="1917" height="1008" alt="Tampilan-ubah(4)" src="https://github.com/user-attachments/assets/e2e03bd1-f0a7-4d3b-aef9-7c3dafe6467f" />


### H. Menghapus Data Barang (Delete)

Membuat file `hapus.php` untuk menghapus data barang berdasarkan ID.

Proses penghapusan menggunakan perintah `DELETE FROM`.

📷 Screenshot:

<img width="1917" height="1020" alt="5 Membuat-file-hapus php-(Delete)" src="https://github.com/user-attachments/assets/87b5758d-eeaf-441f-84df-c88df04cd762" />

### I. Mengatur Tampilan Website

Membuat file `style.css` untuk mengatur tampilan halaman web agar lebih rapi dan mengikuti contoh tampilan pada modul.

Pengaturan CSS meliputi jenis huruf, ukuran teks, tabel, form input, tombol, dan tampilan gambar.


## 🌐 6. HASIL AKHIR PRAKTIKUM

Hasil dari praktikum ini adalah sebuah aplikasi pengelolaan data barang berbasis web yang dapat menjalankan empat fungsi utama CRUD.

| Fitur      | Fungsi                  |
| :--------- | :---------------------- |
| **Create** | Menambahkan data barang |
| **Read**   | Menampilkan data barang |
| **Update** | Mengubah data barang    |
| **Delete** | Menghapus data barang   |

Aplikasi dapat dijalankan melalui browser menggunakan alamat:

```text
http://localhost/lab8_php_database/
```
<img width="1917" height="1015" alt="Tampilan-Akhir(5)" src="https://github.com/user-attachments/assets/0b4012f9-3e37-412f-a186-b23ecd5878f3" />

---

## 📚 7. KESIMPULAN

Berdasarkan praktikum yang telah dilakukan, dapat disimpulkan bahwa PHP dan MySQL dapat digunakan untuk membuat aplikasi pengelolaan data berbasis web.

Melalui praktikum ini, mahasiswa dapat memahami cara membuat database, menghubungkan PHP dengan MySQL, serta menerapkan operasi CRUD untuk mengelola data barang.

Selain itu, praktikum ini juga memberikan pemahaman mengenai penggunaan HTML dan CSS dalam membuat halaman web yang dapat berinteraksi dengan database.

## 📤 8. REPOSITORY GITHUB

**Nama Repository:** `Lab8Web`

**Mata Kuliah:** Pemrograman Web

**Praktikum:** 8 – PHP dan Database MySQL

---

\<p align="center">   \<b>TERIMA KASIH\</b>   \<br/>   Praktikum 8 – Pemrograman Web   \<br/>   \<i>Informatics Student\</i> \</p>
