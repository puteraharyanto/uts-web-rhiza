<?php
include '../config/koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>

<h2>Data Produk</h2>

<a href="tambah.php">+ Tambah Produk</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
while ($row = mysqli_fetch_array($data)) {
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row['nama_produk']; ?></td>
    <td><?php echo $row['merk']; ?></td>
    <td><?php echo $row['harga']; ?></td>
    <td><?php echo $row['stok']; ?></td>
    <td>
        <a href="hapus.php?id=<?php echo $row['id']; ?>">
            Hapus
        </a>
    </td>
</tr>

<?php } ?>

</table>

<br>
<a href="../dashboard.php">Kembali ke Dashboard</a>

</body>
</html>