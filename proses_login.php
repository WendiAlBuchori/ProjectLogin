<?php
session_start(); // Mulai session

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cek username dan password (contoh sederhana)
if ($username == "admin" && $password == "1234") {
    $_SESSION['user'] = $username; // Simpan username ke session
    header("Location: dashboard.php"); // Arahkan ke dashboard
    exit;
} else {
    echo "<script>
        alert('Login gagal! Username atau password salah.');
        window.location.href = 'login.php';
    </script>";
}
?>
