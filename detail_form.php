<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Detail Data Pelamar</title>
</head>
<body>
    <h2>Detail Data Pelamar</h2>
    <a href="view_data.php">Kembali ke Data Pelamar</a>
    <br><br>
    <?php
    // Memeriksa apakah ID pelamar disediakan melalui parameter GET
    if(isset($_GET['id'])) {
        // Mendapatkan ID pelamar dari parameter GET
        $id = $_GET['id'];

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

        // Menyiapkan dan menjalankan query untuk mendapatkan data pelamar berdasarkan ID
        $sql = "SELECT * FROM data_pelamar WHERE id='$id'";
        $result = $koneksi->query($sql);

        // Memeriksa apakah data ditemukan
        if ($result->num_rows > 0) {
            // Mendapatkan data pelamar
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $email = $row['email'];
            $alamat = $row['alamat'];
            $telepon = $row['telepon'];
            $pendidikan = $row['pendidikan'];
            $pengalaman = $row['pengalaman'];
            $universitas = $row['universitas'];

    ?>
            <!-- Menampilkan formulir dengan data pelamar yang telah ditemukan -->
            <form action="proses_update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" disabled><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled><br>
                <label for="alamat">Alamat:</label><br>
                <textarea id="alamat" name="alamat" disabled><?php echo $alamat; ?></textarea><br>
                <label for="telepon">Telepon:</label><br>
                <input type="text" id="telepon" name="telepon" value="<?php echo $telepon; ?>" disabled><br>
                <label for="pendidikan">Pendidikan:</label><br>
                <input type="text" id="pendidikan" name="pendidikan" value="<?php echo $pendidikan; ?>" disabled><br>
                <!-- Penambahan form universitas -->
                <label for="pendidikan">universitas:</label><br>
                <input type="text" id="pendidikan" name="pendidikan" value="<?php echo $universitas; ?>" disabled><br>
                <!-- Penambahan form universitas -->
                <label for="pengalaman">Pengalaman (tahun):</label><br>
                <textarea id="pengalaman" name="pengalaman" disabled><?php echo $pengalaman; ?></textarea><br><br>
                <!-- <input type="submit" value="Update Data"> -->
            </form>
    <?php
        } else {
            echo "Data pelamar tidak ditemukan.";
        }

        // Menutup koneksi database
        $koneksi->close();
    } else {
        echo "ID pelamar tidak diberikan.";
    }
    ?>
</body>
</html>
