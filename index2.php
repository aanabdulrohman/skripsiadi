<?php
session_start();
require 'connect.php';

// Cek login
if (!isset($_SESSION['namapt'])) {
    die("Anda belum login");
}

if (isset($_POST['submit'])) {
    $tanggal      = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $nama_barang  = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $qty          = (int)$_POST['qty'];
    $harga        = (float)$_POST['harga'];
    $total        = $qty * $harga;
    $no_invoice   = mysqli_real_escape_string($conn, $_POST['no_invoice']);
    $namapt       = $_SESSION['namapt']; // Ambil dari session

    $sql = "INSERT INTO pembelian (tanggal, nama_barang, qty, harga, total, no_invoice, namapt) 
            VALUES ('$tanggal', '$nama_barang', '$qty', '$harga', '$total', '$no_invoice', '$namapt')";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Data berhasil disimpan";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
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
    <title>PO Barang </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-4" href="index1.php"><br> <br>
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
                        <a class="nav-link" href="index1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            PO Barang
                        </a>
                        <a class="nav-link" href="masuk1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Detail Barang
                        </a>
                        <!-- <a class="nav-link" href="keluar1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Input PO Barang
                        </a> -->
                       


                        <!-- sub menu data prediksi -->
                       
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="prediksi.php">Media Tanam</a>
                                <a class="nav-link collapsed" href="prediksi_kompos.php">Pupuk Kompos</a>
                                <a class="nav-link collapsed" href="prediksi_kandang.php">Pupuk Kandang</a>
                            </nav>
                        </div>
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
                    <h1 class="mt-4">Input PO Barang</h1>


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
                            <!-- <a target="_blank" class="btn btn-secondary float-right"
                            href="cetakkeluar.php">Cetak</a> -->
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
                            <a href="karcis1.php" class="btn btn-secondary" target="_blank">Cetak</a>
                        </div>


                    </div>
                    <form action="cetakpdf.php" method="post">
                        
                    <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
                    <input type="text" name="namapt" value="<?php echo $_SESSION['namapt']; ?>" readonly><br>
                    <div class="containe-fluidr">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="h6">
                                <tr>
                                    <td>Bubble Wrap <input type="hidden" name="nama_barang[]" value="Bubble Wrap"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="95000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                    <td>Plastik 1kg <input type="hidden" name="nama_barang[]" value="Plastik 1kg"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="20000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                
                                    <td>Plastik 2kg<input type="hidden" name="nama_barang[]" value="Plastik 2kg"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="30000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                
                                    <td>Tali rapia <input type="hidden" name="nama_barang[]" value="Tali rapia"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number"name="harga[]" value="10000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                
                                    <td>Karung <input type="hidden" name="nama_barang[]" value="Karung"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="3000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                
                                    <td>Kabel ties <input type="hidden" name="nama_barang[]" value="Kabel ties"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="7000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                
                                    <td>Plastik Wrap<input type="hidden" name="nama_barang[]" value="Plastik Wrap"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="31000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                                <tr>
                                
                                    <td>Lakban<input type="hidden" name="nama_barang[]" value="Lakban"></td>
                                    <td><input type="number" name="qty[]" class="qty" oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="harga[]" value="6000" class="harga" readonly oninput="updateTotal(this)"></td>
                                    <td><input type="number" name="total[]" class="total" readonly></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" style="text-align: right;">Total Semua:</td>
                                    <td><input type="number" id="grandTotal" readonly></td>
                                </tr>
                            </tfoot>
                        </table>
                        <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                        </form>
                        <script>
                            function updateTotal(element) {
                                const row = element.closest('tr');
                                const qty = parseFloat(row.querySelector('.qty').value) || 0;
                                const harga = parseFloat(row.querySelector('.harga').value) || 0;
                                const total = qty * harga;
                                row.querySelector('.total').value = total;

                                updateGrandTotal(); // panggil ini agar total keseluruhan ikut dihitung
                            }

                            function updateGrandTotal() {
                                let grandTotal = 0;
                                const totalInputs = document.querySelectorAll('.total');
                                totalInputs.forEach(input => {
                                    grandTotal += parseFloat(input.value) || 0;
                                });

                                const grandTotalField = document.getElementById('grandTotal');
                                if (grandTotalField) {
                                    grandTotalField.value = grandTotal;
                                }
                            }
                        </script>





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
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required><br>
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