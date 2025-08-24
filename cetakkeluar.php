<html>
<?php
require 'connect.php';
$ambilsemuastock = mysqli_query($conn, "select * from keluar k, stock s where s.idbarang = k.idbarang ");
$no = 1;
while ($data = mysqli_fetch_array($ambilsemuastock)) {
    $tanggal = $data['tanggal'];
    $namabarang = $data['namabarang'];
    $qty = $data['qty'];
    $penerima = $data['penerima'];
    $idk = $data['idkeluar'];
    $idb = $data['idbarang'];

?>

<head>
    <title>Form Print</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />


</head>

<body>

    <style type="text/css">
    .table1 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 50%;
        border: 1px solid #f2f5f7;
    }

    .tepi1 {
        border: 1px solid black;
    }

    .table1 tr th {
        background: #35A9DB;
        color: #fff;
        font-weight: normal;
    }

    .table1,
    th,
    td {
        padding: 8px 20px;
        text-align: left;
    }

    .table1 tr:hover {
        background-color: #f5f5f5;
    }

    .table1 tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .atas {
        margin-left: 10px;
    }

    .keterangan {
        margin-left: 20px;
    }

    .penerima {
        margin-left: 600px;
    }
    </style>

    <br>
    <div class="atas">
        <p> <b>UD Mitra Lestari Agro </b><br />
            Jl. Desa Satria Jaya Bekasi, Jawa Barat<br />
            HP : +62 812 5697 7569
            <br>
            <span id="tanggalwaktu"></span> <br />
            <script>
            var dt = new Date();
            document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
            </script>
        </p>
    </div>
    <div class="table table-bordered">
        <table id="datatablesSimple" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Penerima</th>

                </tr>
            </thead>

            <tbody>
                <?php
                    $ambilsemuastock = mysqli_query($conn, "select * from keluar k, stock s where s.idbarang = k.idbarang ");
                    $i = 1;
                    while ($data = mysqli_fetch_array($ambilsemuastock)) {
                        $tanggal = $data['tanggal'];
                        $namabarang = $data['namabarang'];
                        $qty = $data['qty'];
                        $penerima = $data['penerima'];
                        $idk = $data['idkeluar'];
                        $idb = $data['idbarang'];

                    ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $tanggal; ?></td>
                    <td><?= $namabarang; ?></td>
                    <td><?= $qty; ?></td>
                    <td><?= $penerima; ?></td>
                </tr>

                <?php
                    };
                    ?>

            </tbody>
        </table>
        <br>
        <div class="keterangan">
            <p> <b>Keterangan </b>
                <br />
                1. Harap disimpan baik-baik struk ini<br />
                2. Kumpulkan struk ini dan serahkan kepada admin
        </div>


    </div>
    <?php
};
    ?>
    <script>
    window.print();
    </script>

</body>

</html>