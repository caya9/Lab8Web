
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

// Menghubungkan PHP dengan database MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
