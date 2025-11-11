<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
    <p>Ini adalah halaman dashboard kamu 🎉</p>
    <a href="logout.php">Logout</a>
</body>
</html>
