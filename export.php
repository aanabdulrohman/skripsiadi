<?php
require 'connect.php';

if (!isset($_POST['idkeluar'])) {
    die("Data tidak ditemukan");
}

$idkeluar = intval($_POST['idkeluar']);

// Ambil data dari tabel keluar berdasarkan id
$q = mysqli_query($conn, "SELECT * FROM keluar WHERE idkeluar = $idkeluar");
$data = mysqli_fetch_assoc($q);

if (!$data) {
    die("Data tidak ditemukan");
}

// Format invoice (bisa pakai HTML sederhana atau library dompdf untuk PDF)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice Barang Keluar</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .invoice { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    </style>
</head>
<body>
<div class="invoice">
    <h2>Invoice Barang Keluar</h2>
    <p><strong>Tanggal:</strong> <?= $data['tanggal'] ?></p>
    <p><strong>Nama Barang:</strong> <?= $data['namabarang'] ?></p>
    <p><strong>Jumlah:</strong> <?= $data['qty'] ?> pcs</p>
    <p><strong>Harga:</strong> Rp <?= number_format($data['harga'], 0, ',', '.') ?></p>
    <p><strong>Total:</strong> Rp <?= number_format($data['total'], 0, ',', '.') ?></p>
    <hr>
    <p>Terima kasih telah menggunakan layanan kami.</p>
</div>
</body>
</html>
