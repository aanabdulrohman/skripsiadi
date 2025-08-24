<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "stockbarang");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Pastikan ada data yang dikirim
if (!isset($_POST['pilih']) || empty($_POST['pilih'])) {
    die("Tidak ada data yang dipilih.");
}

// Ambil ID dari checkbox dan sanitasi
$idList = array_map('intval', $_POST['pilih']); 
$idListString = implode(',', $idList);

// Ganti 'idkeluar' sesuai kolom primary key di tabel poselesai
$sql = "SELECT idkeluar, tanggal, no_invoice, namapt, nama_barang, harga, total, qty 
        FROM poselesai 
        WHERE idkeluar IN ($idListString)";
$result = mysqli_query($conn, $sql);

// Cek error query
if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

// Buat HTML untuk cetak
$html = '<h2 style="text-align:center;">Faktur Pembayaran</h2>';
$html .= '<table border="1" cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%;">';
$html .= '<thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No Invoice</th>
                <th>Nama Perusahaan</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Qty</th>
            </tr>
          </thead><tbody>';

$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    $html .= '<tr>
                <td>'.$no++.'</td>
                <td>'.$row['tanggal'].'</td>
                <td>'.$row['no_invoice'].'</td>
                <td>'.$row['namapt'].'</td>
                <td>'.$row['nama_barang'].'</td>
                <td>'.number_format($row['harga'], 0, ',', '.').'</td>
                <td>'.number_format($row['total'], 0, ',', '.').'</td>
                <td>'.$row['qty'].'</td>
              </tr>';
}

$html .= '</tbody></table>';

// Tutup koneksi database
mysqli_close($conn);

// Generate PDF dengan Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("laporan.pdf", array("Attachment" => false));
?>
