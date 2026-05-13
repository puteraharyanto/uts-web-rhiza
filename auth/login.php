<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'");

    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;

        echo "<script>
                alert('Login berhasil!');
                window.location='../dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Username atau Password salah!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

<h2>Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<br>
<a href="register.php">Belum punya akun? Register</a>

</body>
</html>