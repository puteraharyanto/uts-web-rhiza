<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Dashboard Admin</h1>

<p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>

<a href="produk/tambah.php">Tambah Produk</a> |
<a href="produk/data.php">Data Produk</a> |
<a href="auth/logout.php">Logout</a>

</body>
</html>