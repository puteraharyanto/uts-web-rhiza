<?php 
include '../config/koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

    echo "<script>alert('Registrasi berhasil!'); window.location.href = 'login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
   
<h2>Register</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>

<br>
<a href="login.php">sudah punya akun? Login</a>
</body>
</html>