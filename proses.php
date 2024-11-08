<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nim = htmlspecialchars($_POST["nim"]);
            $nama = htmlspecialchars($_POST["nama"]);
            $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
            $alamat = htmlspecialchars($_POST["alamat"]);
            $no_hp = htmlspecialchars($_POST["no_hp"]);
            $email = htmlspecialchars($_POST["email"]);

            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>No HP:</strong> $no_hp</p>";
            echo "<p><strong>Email:</strong> $email</p>";
        } else {
            echo "<p>Data tidak ditemukan.</p>";
        }
    ?>
</body>
</html>
