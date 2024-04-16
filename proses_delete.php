<?php
// Konfigurasi database
$host = "localhost"; // Ganti dengan host Anda
$username = "root"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$database = "cvbank"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Menyiapkan dan menjalankan query untuk menghapus data pelamar berdasarkan ID
$sql = "DELETE FROM data_pelamar WHERE id = $id";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi database
$koneksi->close();

// Redirect kembali ke halaman view_data.php setelah proses penghapusan selesai
header("Location: view_data.php");
exit();
?>
