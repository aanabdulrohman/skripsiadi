<?php
session_start(); // HARUS ada untuk menggunakan $_SESSION

if (!isset($_SESSION['keterangan'])) {
    header('Location: login.php');
    exit(); // Sangat disarankan untuk mencegah eksekusi lanjutan
}
?>
