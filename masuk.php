<?php
session_start();
require 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Stock Barang </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-4" href="index.php"><br> <br>
            <h6>PT Kencana Bangsa <br />Agro</h6>
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Stock Barang
                        </a>
                        <a class="nav-link" href="masuk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            PO Masuk
                        </a>
                        <a class="nav-link" href="poselesai.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            PO Selesai
                        </a>
                        <a class="nav-link" href="keluar.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Keluar
                        </a>
                        <a class="nav-link" href="datacl.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Database Client
                        </a>


                        <!-- sub menu data prediksi -->
                        <!-- <a class="nav-link dropdown" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Data Prediksi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="prediksi.php">Media Tanam</a>
                                <a class="nav-link collapsed" href="prediksi_kompos.php">Pupuk Kompos</a>
                                <a class="nav-link collapsed" href="prediksi_kandang.php">Pupuk Kandang</a>

                            </nav>
                        </div> -->
                        <!-- abaikan aja dlu -->

                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        gak tau
                    </div> -->
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">PO Masuk </h1>


                    <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Barang
                            </button> -->
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No Invoice</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Tanggal</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                // Ambil data pembelian dan stok (join berdasarkan nama_barang)
                                $sql = "
    SELECT 
        p.id, 
        p.no_invoice, 
        p.tanggal, 
        p.nama_barang,
        p.namapt, 
        p.qty, 
        p.harga, 
        p.total, 
        s.idbarang, 
        s.stock
    FROM pembelian p
    JOIN stock s ON s.namabarang = p.nama_barang
";
                                $ambilsemuastock = mysqli_query($conn, $sql)
                                    or die("Query Error: " . mysqli_error($conn));

                                // ==========================
                                // PROSES APPROVE
                                // ==========================
                                if (isset($_POST['approve'])) {
                                    $idpembelian = $_POST['idpembelian']; // id di tabel pembelian
                                    $idbarang    = $_POST['idbarang'];
                                    $qty         = $_POST['qty'];
                                    $tanggal     = $_POST['tanggal'];
                                
                                    // Ambil data pembelian termasuk no_invoice & namapt
                                    $qPembelian = mysqli_query($conn, "SELECT nama_barang, harga, total, namapt, no_invoice 
                                                                       FROM pembelian WHERE id='$idpembelian'");
                                    $pembelianData = mysqli_fetch_assoc($qPembelian);
                                
                                    $nama_barang = $pembelianData['nama_barang'];
                                    $harga       = $pembelianData['harga'];
                                    $total       = $pembelianData['total'];
                                    $namapt      = $pembelianData['namapt'];
                                    $no_invoice  = $pembelianData['no_invoice'];
                                
                                    // Cek stok
                                    $cek = mysqli_query($conn, "SELECT stock FROM stock WHERE idbarang='$idbarang'");
                                    $data_stok = mysqli_fetch_assoc($cek);
                                
                                    if ($data_stok && $data_stok['stock'] >= $qty) {
                                        mysqli_query($conn, "UPDATE stock SET stock = stock - $qty WHERE idbarang='$idbarang'");
                                
                                        mysqli_query($conn, "INSERT INTO keluar 
                                            (idbarang, tanggal, qty, nama_barang, harga, total) 
                                            VALUES 
                                            ('$idbarang', '$tanggal', '$qty', '$nama_barang', '$harga', '$total')");
                                
                                        mysqli_query($conn, "INSERT INTO poselesai 
                                            (idbarang, tanggal, qty, nama_barang, harga, total, namapt, no_invoice) 
                                            VALUES 
                                            ('$idbarang', '$tanggal', '$qty', '$nama_barang', '$harga', '$total', '$namapt', '$no_invoice')");
                                
                                        mysqli_query($conn, "DELETE FROM pembelian WHERE id='$idpembelian'");
                                
                                        echo "<script>
                                            alert('Approve berhasil: stok dikurangi, data dipindahkan');
                                            window.location.href='masuk.php';
                                        </script>";
                                    } else {
                                        echo "<script>alert('Stok tidak mencukupi');</script>";
                                    }
                                }

                                // ==========================
                                // PROSES REJECT
                                // ==========================
                                if (isset($_POST['reject'])) {
                                    $idpembelian = $_POST['idpembelian'];
                                    mysqli_query($conn, "DELETE FROM pembelian WHERE id='$idpembelian'");
                                    echo "<script>alert('Data berhasil direject');</script>";
                                }
                                ?>

                                <?php while ($data = mysqli_fetch_array($ambilsemuastock)) { ?>
                                    <tr>
                                        <td><?= $data['no_invoice']; ?></td>
                                        <td><?= $data['namapt']; ?></td>
                                        <td><?= $data['tanggal']; ?></td>
                                        <td><?= $data['nama_barang']; ?></td>
                                        <td><?= $data['qty']; ?></td>
                                        <td><?= $data['harga']; ?></td>
                                        <td><?= $data['total']; ?></td>
                                        <td>
                                            <!-- Tombol Approve -->
                                            <form method="post" style="display:inline;">
                                                <input type="hidden" name="idpembelian" value="<?= $data['id']; ?>">
                                                <input type="hidden" name="idbarang" value="<?= $data['idbarang']; ?>">
                                                <input type="hidden" name="tanggal" value="<?= $data['tanggal']; ?>">
                                                <input type="hidden" name="nama_barang" value="<?= $data['nama_barang']; ?>">
                                                <input type="hidden" name="harga" value="<?= $data['harga']; ?>">
                                                <input type="hidden" name="total" value="<?= $data['total']; ?>">
                                                <input type="hidden" name="qty" value="<?= $data['qty']; ?>">
                                                <button type="submit" name="approve" class="btn btn-primary">Approve</button>
                                            </form>

                                            <!-- Tombol Reject -->
                                            <form method="post" style="display:inline;">
                                                <input type="hidden" name="idpembelian" value="<?= $data['id']; ?>">
                                                <button type="submit" name="reject" class="btn btn-danger">Reject</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <?php
                                // Proses approve → insert ke tabel keluar
                               
                                
                                
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class=" py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <!-- <div class="text-muted">Copyright &copy; Sutan Fanabih 2021</div> -->
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous">
    </script>
    <script src="js/datatables-simple-demo.js"></script>
</body>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambahkan Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <select name="barangnya" class="form-control">
                        <?php
                        $ambilsemuadatanya = mysqli_query($conn, "select * from stock ");
                        while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
                            $namabarangnya = $fetcharray['namabarang'];
                            $idbarangnya = $fetcharray['idbarang'];
                        ?>

                            <option value="<?= $idbarangnya; ?>"><?= $namabarangnya; ?></option>

                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <input type="number" name="qty" class="form-control" placeholder="Quantity" required><br>
                    <!-- <input type="text" name="penerima" placeholder="keterangan" class="form-control" required><br> -->
                    <select class="form-control" name="penerima" id="exampleFormControlSelect1">
                        <option>sutan</option>
                        <option>fajrin</option>
                        <option>abi</option>
                        <option>hartono</option>
                        <option>fanabih</option>
                    </select><br>
                    <button type="submit" class="btn btn-primary" name="barangudhmasuk">Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>

</html>