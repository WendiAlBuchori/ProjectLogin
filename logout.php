<?php
session_start(); // mulai session
session_destroy(); // hapus semua session
header("Location: login.php"); // arahkan kembali ke halaman login
exit;
?>
