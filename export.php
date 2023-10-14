<?php
$no = 1;
$panggil = $_POST['panggil'];
$alamat = $_POST['alamat'];
$nilai = $_POST['nilai'];
$nilai2 = $_POST['nilai2'];
$jumlah = $_POST['jumlah'];
$jumlah2 = $_POST['jumlah2'];
$nilai3 = $_POST['nilai3'];
$jumlah3 = $_POST['jumlah3'];



?>
<html>

<head>
    <title>Form Print</title>
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

    hr {
        margin-left: 0px;
        margin-right: 50px;
    }
    </style>
    <br>
    <div class="atas">
        <p> <b>UD Mitra Lestari Agro </b><br />
            Jl. Desa Satria Jaya Bekasi, Jawa Barat<br />
            HP : +62 812 5697 7569
            <br> <b>Driver :</b>
            <?php echo $panggil; ?>
            <br>
            <span id="tanggalwaktu"></span> <br />
            <script>
            var dt = new Date();
            document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
            </script>
        </p>
    </div>
    <div class="tepi1">
        <table class="table1" border="1" style="width: 100%">
            <tr>
                <th width="1%">No</th>

                <th>Jenis Pupuk</th>
                <th>Alamat Lapak</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td><?php echo $no++; ?></td>

                <td><?php echo $nilai; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $jumlah; ?></td>

            </tr>
            <tr>
                <td><?php echo $no++; ?></td>

                <td><?php echo $nilai2; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $jumlah2; ?></td>
            </tr>
            <tr>
                <td><?php echo $no++; ?></td>

                <td><?php echo $nilai3; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $jumlah3; ?></td>
            </tr>
        </table>
        <br>
        <div class="penerima">
            <p> <b>Penerima </b>
                <br><br><br><br>
                <hr width="80">
        </div>


        <div class="keterangan">
            <p> <b>Keterangan </b>
                <br />
                1. Harap disimpan baik-baik struk ini<br />
                2. Struk ini hasil dari pengiriman anda hari ini<br />
                3. Kumpulkan struk ini dan serahkan kepada admin
        </div>


    </div>
    <script>
    window.print();
    </script>

</body>

</html>