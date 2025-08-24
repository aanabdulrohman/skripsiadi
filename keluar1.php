<?php
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
        <a class="navbar-brand ps-4" href="index1.php"><br> <br>
            <h6>UD. Mitra Lestari <br />Agro</h6>
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
                        <a class="nav-link" href="index1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Input PO Barang
                        </a>
                        <a class="nav-link" href="masuk1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Masuk
                        </a>
                        <a class="nav-link" href="keluar1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Keluar
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>


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
            </nav>>
            <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        gak tau
                    </div> -->
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Barang Keluar</h1>


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
                                Barang Keluar
                            </button> -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#myModalbrng">
                                Cetak Barang Keluar
                            </button> -->
                            <!-- simpan barang keluar -->
                            <div class="btn-group">
                                <!-- <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Simpan
                                </button> -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#savedata1" href="#">Media
                                        Tanam</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#savedata2" href="#">
                                        Pupuk Kompos</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#savedata3" href="#">Pupuk
                                        Kandang</a>
                                </div>
                            </div>
                            <!-- <a href="karcis1.php" class="btn btn-secondary" target="_blank">Cetak</a> -->

                        </div>

                        <div class="card-body text-center">
                           
                            <!-- dibawah history barang keluar -->
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">Nama Barang</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Penerima</th>
                                        <th class="text-center">Diterima</th>
                                        <th class="text-center">Aksi</th>

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
                                        $diterima = $data ['diterima'];
                                        $idk = $data['idkeluar'];
                                        $idb = $data['idbarang'];
                                    
                                    ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $tanggal; ?></td>
                                        <td><?= $namabarang; ?></td>
                                        <td><?= $qty; ?></td>
                                        <td><?= $penerima; ?></td>
                                        <td><?= $diterima; ?></td>

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
                                                        Apakah anda ingin menghapus <?= $penerima; ?> ?
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
                                <
                            </table>


                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Sutan Fanabih 2021</div>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

<!-- The Modal cetak barang keluar -->
<div class="modal fade" id="myModalbrng">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambahkan Barang Keluar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <select name="barangnya" class="form-select">
                        <?php
                        $ambilsemuadatanya = mysqli_query($conn, "select * from barangkeluar ");
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
                    <input type="text" name="penerima" class="form-control" placeholder="Penerima" required><br>
                    <button type="submit" class="btn btn-primary" name="barangkeluar">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- input barang keluar  -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Catat Barang Keluar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <select name="barangnya" class="form-select">
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
                    <input type="text" name="penerima" class="form-control" placeholder="Penerima" required><br>
                    <button type="submit" class="btn btn-primary" name="addbarangout">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal simpan barang keluar media tanam-->
<div class="modal fade" id="savedata1">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Simpan Total pengeluaran Barang Bulan Ini</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <input type="date" name="bulan_pembeli" placeholder="dd-mm-yyyy" value="" min="1997-01-01"
                        class="form-control" max="2030-12-31">
                    <br>
                    <input type="number" name="jumlah_pupuk" placeholder="Total Pupuk" class="form-control"
                        required><br>
                    <button type="submit" class="btn btn-primary" name="smpnbarang1">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- modal simpan barang keluar kompos-->

<div class="modal fade" id="savedata2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Simpan Total pengeluaran Barang Bulan Ini</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <input type="date" name="bulan_pembeli" placeholder="dd-mm-yyyy" value="" min="1997-01-01"
                        class="form-control" max="2030-12-31">
                    <br>
                    <input type="number" name="jumlah_pupuk" placeholder="Total Pupuk" class="form-control"
                        required><br>
                    <button type="submit" class="btn btn-primary" name="smpnbarang2">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- modal simpan barang keluar kandang-->

<div class="modal fade" id="savedata3">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Simpan Total pengeluaran Barang Bulan Ini</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <input type="date" name="bulan_pembeli" placeholder="dd-mm-yyyy" value="" min="1997-01-01"
                        class="form-control" max="2030-12-31">
                    <br>
                    <input type="number" name="jumlah_pupuk" placeholder="Total Pupuk" class="form-control"
                        required><br>
                    <button type="submit" class="btn btn-primary" name="smpnbarang3">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

</html>