<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Data Pelamar</title>
</head>
<body>
    <h2>Data Pelamar</h2>
    <a href="index.php">Menu Utama</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Pendidikan</th>
            <th>Pengalaman (tahun)</th>
            <th>Action</th>
        </tr>
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

        // Menyiapkan dan menjalankan query untuk mengambil data pelamar
        $sql = "SELECT * FROM data_pelamar";
        $result = $koneksi->query($sql);

        // Menampilkan data dalam tabel
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>" . $row["telepon"] . "</td>";
                echo "<td>" . $row["pendidikan"] . "</td>";
                echo "<td>" . $row["pengalaman"] . "</td>";
                // tombol delete dengan link ke halaman proses_delete.php dengan parameter id
                echo "<td><a href='proses_delete.php?id=" . $row["id"] . "' class='delete-btn'>Delete</a>
                          <a href='update_form.php?id=" . $row["id"] . "' class='update-btn'>Update</a>
                          <a href='detail_form.php?id=" . $row["id"] . "' class='update-btn'>Detail</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data pelamar.</td></tr>";
        }

        // Menutup koneksi database
        $koneksi->close();
        ?>
    </table>
</body>
</html>
