<?php
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO produk
    (nama_produk, merk, harga, stok)
    VALUES
    ('$nama_produk', '$merk', '$harga', '$stok')");

    echo "<script>
        alert('Data berhasil ditambahkan!');
        window.location='data.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

<h2>Tambah Produk</h2>

<form method="POST">
    <input type="text" name="nama_produk" placeholder="Nama Produk" required><br><br>

    <input type="text" name="merk" placeholder="Merk" required><br><br>

    <input type="number" name="harga" placeholder="Harga" required><br><br>

    <input type="number" name="stok" placeholder="Stok" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<br>
<a href="../dashboard.php">Kembali</a>

</body>
</html>