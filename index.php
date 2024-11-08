<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Input Data Mahasiswa</h2>
        <form action="index.php" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" name="submit">Kirim</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];

        echo "<div class='result'>";
        echo "<h3>Data yang Dikirim</h3>";
        echo "<p><strong>NIM:</strong> $nim</p>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>No HP:</strong> $no_hp</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
