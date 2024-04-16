<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Aplikasi Bank CV Para Programmer</title>
</head>
<body>
    <div class="container">
        <h2>Form Aplikasi Bank CV Para Programmer</h2>
        <form action="proses.php" method="post">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required placeholder="Nama Lengkap">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Ex aa@gmail.com">

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4" required placeholder="Alamat Lengkap"></textarea>

            <label for="telepon">Nomor Telepon:</label>
            <input type="text" id="telepon" name="telepon" required>

            <label for="pendidikan">Pendidikan Terakhir:</label>
            <select id="pendidikan" name="pendidikan" required>
                <option value="">Pilih Pendidikan</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="Diploma">Diploma</option>
                <option value="Sarjana (S1)">Sarjana (S1)</option>
                <option value="Magister (S2)">Magister (S2)</option>
                <option value="Doktor (S3)">Doktor (S3)</option>
            </select>
            <!-- tambah univeristas -->
            <label for="universitas">Universitas:</label>
            <input type="text" id="universitas" name="universitas" required placeholder="Universitas">
            <!-- tambah universitas -->
            <label for="pengalaman">Pengalaman Kerja (dalam tahun):</label>
            <input type="number" id="pengalaman" name="pengalaman" min="0" required>

            <input type="submit" value="Submit">
            <a href="view_data.php">lihat data</a>
        </form>
    </div>
</body>
</html>
