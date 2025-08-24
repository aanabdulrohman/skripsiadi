<?php
require 'connect.php';
require 'blmlogin.php';
// tambah admin nih cok 
// if (isset($_POST['addadmin'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $keterangan = $_POST['keterangan'];

//     $queryinsert = mysqli_query($conn, "INSERT INTO login (email,password,keterangan) VALUES   ('$email','$password','$keterangan')");

//     if ($queryinsert) {
//         //fi berhasil 
//         echo ('');
//     } else {
//         //kalau gagal insert ke db
//         header('location:password.html');
//     }
// }
// 
?>
<!doctype html>
<html lang="en">

<head>
    <title>LRegister 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style1.css">
    <style type="text/css">
        .form-control1 {
            height: 48px;
            width: 220%;
            background: #fff;
            color: #000;
            font-size: 16px;
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        login-wrap {
            width: 10%;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-11">
                    <div class="wrap d-md-flex">

                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex text-center">
                                <div class="w-100">
                                    <h3 class=" mb-4 text-left">Struk Pembelian</h3>
                                </div>
                            </div>
                             <?php
                                    $ambilsemuastock = mysqli_query($conn, "select * from keluar ");
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($ambilsemuastock)) {
                                        $tanggal = $data['tanggal'];
                                        $nama_barang = $data['nama_barang'];
                                        $harga = $data['harga'];
                                        $total = $data['total'];
                                        $qty = $data['qty'];
                                    ?>
                                <form method="POST" action="export.php" target="_blank">
                                <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-left">Tanggal</th>
                                        <th class="text-left">Nama Barang</th>
                                        <th class="text-left">Jumlah</th>
                                        <th class="text-left">Aksi</th>

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
                                        $harga = $data['harga'];
                                        $total = $data ['total'];
                                        $idk = $data['idkeluar'];
                                        $idb = $data['idbarang'];
                                    
                                    ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $tanggal; ?></td>
                                        <td><?= $namabarang; ?></td>
                                        <td><?= $qty; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#delete<?= $idk; ?>">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <!--delete The Modal -->
                                    <div class="modal fade" id="delete<?= $idk; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Barang</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form method="post">
                                                    <div class="modal-body">
                                                        Apakah anda ingin menghapus <?= $namabarang; ?> ?
                                                        <input type="hidden" name="idk" value="<?= $idk; ?>">
                                                        <br>
                                                        <br>
                                                        <button type="submit" class="btn btn-danger"
                                                            name="hapusbarangkeluar">IYA</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    };
                                    ?>

                                </tbody>
                                
                            </table>

                                   
                                    <div class="form-group mb3">
                                        <button type="submit" class="form-control1 btn btn-primary rounded-pill submit px-2"
                                            value="Simpan" target="_blank">Print</button>
                                    </div>
                                    <div class="form-group mb3">
                                        <button type="submit" class="form-control1 btn btn-primary rounded-pill submit px-2"
                                            value="Simpan">submit</button>
                                    </div>
                                    <a href="keluar.php" class="btn btn-primary rounded-pill">Kembali</a>

                                </form>
                            <?php
                                    };
                            ?>
                        </div>
                        
                    </div>
                </div> 
               
            </div>
        </div>
        
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>