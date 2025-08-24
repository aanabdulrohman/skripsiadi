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
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

    <!-- jQuery (sudah ada di atas kamu) -->
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

  

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-4" href="index.php"><br> <br>
            <h6>AGP Olivia Sukses <br /></h6>
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
                    <h1 class="mt-4">PO Selesai</h1>


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
                                Input Data PO
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
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#savedata1" href="#">Media
                                        Tanam</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#savedata2" href="#">
                                        Pupuk Kompos</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#savedata3" href="#">Pupuk
                                        Kandang</a>
                                </div> -->
                            </div>
                            <!-- <a href="karcis1.php" class="btn btn-secondary" target="_blank">Cetak</a> -->

                        </div>

                        <div class="card-body text-left">

                            <?php
                            // Koneksi database
                            $conn = mysqli_connect("localhost", "root", "", "stockbarang");
                            if (!$conn) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            // Ambil data dari tabel poselesai
                            $sql = "SELECT * FROM poselesai ORDER BY tanggal DESC";
                            $result = mysqli_query($conn, $sql);
                            ?><!-- Form hanya untuk checkbox & tombol -->
                            <form method="POST" action="cetak.php" target="_blank" onsubmit="return cekPilih();">
                            
                                <!-- Tabel -->
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="checkAll"></th>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>No Invoice</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th>Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            $no = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>
                                                    <td><input type='checkbox' class='checkItem' name='pilih[]' value='" . (int)$row['idkeluar'] . "'></td>
                                                    <td>" . $no . "</td>
                                                    <td>" . $row['tanggal'] . "</td>
                                                    <td>" . $row['no_invoice'] . "</td>
                                                    <td>" . $row['namapt'] . "</td>
                                                    <td>" . $row['nama_barang'] . "</td>
                                                    <td>" . number_format($row['harga'], 0, ',', '.') . "</td>
                                                    <td>" . number_format($row['total'], 0, ',', '.') . "</td>
                                                    <td>" . $row['qty'] . "</td>
                                                </tr>";
                                                $no++;
                                            }
                                        } else {
                                            echo "<tr><td colspan='9' align='center'>Tidak ada data</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            
                                <br>
                                <button type="submit" class="btn btn-primary">Cetak</button>
                            </form>
                            
                            <!-- jQuery + DataTables -->
                            <script>
                                $(document).ready(function() {
                                    // Inisialisasi DataTables (pastikan hanya sekali!)
                                    var table = $('#datatablesSimple').DataTable({
                                        searching: true,
                                        paging: true,
                                        info: true
                                    });
                            
                                    // Cek minimal satu checkbox terpilih
                                    window.cekPilih = function() {
                                        if ($("input[name='pilih[]']:checked").length === 0) {
                                            alert("Pilih minimal satu data untuk dicetak!");
                                            return false;
                                        }
                                        return true;
                                    }
                            
                                    // Check All
                                    $('#checkAll').on('click', function() {
                                        var checked = this.checked;
                                        $('input.checkItem').prop('checked', checked);
                                    });
                            
                                    // Update Check All otomatis
                                    $('#datatablesSimple').on('change', 'input.checkItem', function() {
                                        if ($('input.checkItem:checked').length === $('input.checkItem').length) {
                                            $('#checkAll').prop('checked', true);
                                        } else {
                                            $('#checkAll').prop('checked', false);
                                        }
                                    });
                                });
                            </script>
                            

                            <!-- //modal hapus po selesai -->
                            <div class="modal fade" id="delete<?= $row['idkeluar']; ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data <b><?= $row['nama_barang']; ?></b>?
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="delete.php">
                                                <input type="hidden" name="idkeluar" value="<?= $row['idkeluar']; ?>">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
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
<div class="modal fade" id="myModal">
    <div class="modal-dialog ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Silahkan Isi Barang PO</h4>
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
                    <input type="text" name="diterima" class="form-control" placeholder="Barang Diterima" required><br>
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
                    <input type="date" name="bulan_pembeli" placeholder="yyyy-dd-mm" value="" min="2022-08-01"
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
                    <input type="date" name="bulan_pembeli" placeholder="yyyy-dd-mm" value="" min="2022-08-01"
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
                    <input type="date" name="bulan_pembeli" placeholder="yyyy-dd-mm" value="" min="2022-08-01"
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
