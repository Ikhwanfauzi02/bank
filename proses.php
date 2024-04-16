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

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$pendidikan = $_POST['pendidikan'];
$universitas = $_POST['universitas'];
$pengalaman = $_POST['pengalaman'];

// Menyiapkan pernyataan SQL untuk menyisipkan data
$sql = "INSERT INTO data_pelamar (nama, email, alamat, telepon, pendidikan, universitas, pengalaman) VALUES ('$nama', '$email', '$alamat', '$telepon', '$pendidikan', '$universitas', $pengalaman)";

// Menjalankan pernyataan SQL dan memeriksa keberhasilannya
if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan ke database. <a href='index.php'>Kembali ke halaman utama</a>";
    // Redirect ke halaman index.php setelah proses penyimpanan data selesai
   
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi database
$koneksi->close();
?>
