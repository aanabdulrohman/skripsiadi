<?php
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika memang root tidak pakai password
$db   = "stockbarang";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("❌ Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "✅ Koneksi ke database berhasil!";
}
?>
