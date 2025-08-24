<?php
require 'connect.php';

// Ambil data dari tabel keluar
$sql = "SELECT nama_barang, qty, harga, total FROM keluar ORDER BY nama_barang ASC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Barang Keluar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @media print {
            .no-print { display: none; }
        }
        table th, table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body class="p-4">

<div class="container">
    <h4 class="mb-3">Daftar Barang PO </h4>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $grandTotal = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $grandTotal += $row['total'];
                echo "<tr>
                        <td>".htmlspecialchars($row['nama_barang'])."</td>
                        <td>".$row['qty']."</td>
                        <td>".number_format($row['harga'], 0, ',', '.')."</td>
                        <td>".number_format($row['total'], 0, ',', '.')."</td>
                    </tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan='3' class='text-right'>Total Semua:</th>
                <th><?= number_format($grandTotal, 0, ',', '.'); ?></th>
            </tr>
        </tfoot>
    </table>

    <button class="btn btn-primary no-print" onclick="window.print()">Print</button>
</div>

</body>
</html>
