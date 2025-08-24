<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$conn = mysqli_connect("localhost", "root", "", "stockbarang");


// Koneksi database


$conn = mysqli_connect("localhost", "root", "", "stockbarang");

if (isset($_POST['simpan'])) {
    $tanggal      = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $nama_barang  = $_POST['nama_barang'];
    $qty          = $_POST['qty'];
    $harga        = $_POST['harga'];
    $total        = $_POST['total'];
    $namapt = mysqli_real_escape_string($conn, $_POST['namapt']);



    // 1. Buat nomor invoice unik per tanggal
    $tglFormat = date("Ymd", strtotime($tanggal));
    $cek       = mysqli_query($conn, "SELECT COUNT(DISTINCT no_invoice) as jml 
                                      FROM pembelian WHERE DATE(tanggal) = '$tanggal'");
    $row       = mysqli_fetch_assoc($cek);
    $urutan    = str_pad($row['jml'] + 1, 3, "0", STR_PAD_LEFT);
    $no_invoice = "INV-" . $tglFormat . "-" . $urutan;

    // 2. Simpan data pembelian ke database
    for ($i = 0; $i < count($nama_barang); $i++) {
        if (!empty($qty[$i]) && !empty($nama_barang[$i])) { 
            $nama = mysqli_real_escape_string($conn, $nama_barang[$i]);
            $q    = (int)$qty[$i];
            $h    = (float)$harga[$i];
            $t    = (float)$total[$i];

            // Cek apakah barang ini sudah ada di invoice yang sama
            $cek_barang = mysqli_query($conn, "SELECT id FROM pembelian 
                                               WHERE no_invoice='$no_invoice' 
                                               AND nama_barang='$nama'");
            if (mysqli_num_rows($cek_barang) == 0) {
                mysqli_query($conn, "INSERT INTO pembelian (no_invoice, tanggal, nama_barang, qty, harga, total, namapt) 
                                      VALUES ('$no_invoice', '$tanggal', '$nama', '$q', '$h', '$t','$namapt')");
            }
        }
    }

    // 3. Redirect ke halaman cetak supaya tidak double insert
    header("Location: cetakpdf.php?invoice=" . urlencode($no_invoice));
    exit;
}

// Jika hanya untuk mencetak PDF berdasarkan invoice
if (isset($_GET['invoice'])) {
    $no_invoice = mysqli_real_escape_string($conn, $_GET['invoice']);

    $result = mysqli_query($conn, "SELECT * FROM pembelian WHERE no_invoice='$no_invoice'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $tanggal = $row['tanggal'];
        $namapt  = $row['namapt']; // <-- Tambahan ini


        $html = "
        <h2 style='text-align:center;'>Faktur Pemesanan</h2>
        <p><strong>No Invoice:</strong> $no_invoice</p>
        <p><strong>Tanggal:</strong> " . date("d-m-Y", strtotime($tanggal)) . "</p>
        <p><strong>Nama Perusahaan:</strong> $namapt</p>

        <table border='1' width='100%' cellspacing='0' cellpadding='5'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>";
        
        mysqli_data_seek($result, 0); // reset pointer
        $no = 1;
        $grandTotal = 0;
        while ($data = mysqli_fetch_assoc($result)) {
            $html .= "
            <tr>
                <td style='text-align:center;'>$no</td>
                <td>{$data['nama_barang']}</td>
                <td style='text-align:center;'>{$data['qty']}</td>
                <td style='text-align:right;'>Rp " . number_format($data['harga'], 0, ',', '.') . "</td>
                <td style='text-align:right;'>Rp " . number_format($data['total'], 0, ',', '.') . "</td>
            </tr>";
            $grandTotal += $data['total'];
            $no++;
        }

        $html .= "
            <tr>
                <td colspan='4' align='right'><strong>Total Semua</strong></td>
                <td align='right'><strong>Rp " . number_format($grandTotal, 0, ',', '.') . "</strong></td>
            </tr>
            </tbody>
        </table>";

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("invoice_$no_invoice.pdf", ["Attachment" => false]);
    }
}

?>
