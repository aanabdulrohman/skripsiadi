<?php
require 'connect.php';
require 'blmlogin.php';
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
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Stock Barang
                        </a>
                        <a class="nav-link" href="masuk.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Masuk
                        </a>
                        <a class="nav-link" href="keluar.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Barang Keluar
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>


                        <!-- <a class="nav-link" href="404.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Data Pelanggan
                        </a> -->
                        <a class="nav-link dropdown" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
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
                        </div>
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
                    <h1 class="mt-4"> Prediksi Pupuk Media Tanam</h1>
                    <div class="card-header">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Prediksi Pupuk
                        </button>
                    </div>

                    <table class="table table-bordered" border="1">
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Stock Perbulan</th>
                            <th>Jumlah pengluaran stock</th>
                            <th>X</th>
                            <th>Y</th>
                            <th>XX</th>
                            <th>XY</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `mediatanam` ORDER BY `mediatanam`.`bulan_pembeli` DESC") or die(mysqli_error($con));
                        if (mysqli_num_rows($sql) > 0) {

                            $v = 4;
                            $x = 0;
                            $jumlah_x = 0;
                            $jumlah_y = 0;
                            $jumlah_xx = 0;
                            $jumlah_xy = 0;
                            while ($data = mysqli_fetch_array($sql)) {
                                if ($x < 4) {
                                    $jumlah_x += $x;
                                    $jumlah_y += $data['jumlah_pupuk'];
                                    $jumlah_xx += ($x * $x);
                                    $jumlah_xy += ($x * $data['jumlah_pupuk']);
                                }
                        ?>
                        <tr>
                            <td><?= $x + 1; ?>.</td>
                            <td><?= $data['bulan_pembeli']; ?></td>
                            <td align="center"><?= $data['jumlah_pupuk']; ?></td>
                            <?php if ($x < 4) { ?>
                            <td align="center"><?= $x; ?></td>
                            <td align="center"><?= $data['jumlah_pupuk']; ?></td>
                            <td align="center"><?= $x * $x; ?></td>
                            <td align="center"><?= $x * $data['jumlah_pupuk']; ?></td>
                            <?php } else { ?>
                            <td align="center">0</td>
                            <td align="center">0</td>
                            <td align="center">0</td>
                            <td align="center">0</td>
                            <?php } ?>
                        </tr>
                        <?php
                                $x++;
                            }
                            ?>
                        <tr>
                            <td colspan="2">Jumlah</td>
                            <td></td>
                            <td><?= $jumlah_x; ?></td>
                            <td><?= $jumlah_y; ?></td>
                            <td><?= $jumlah_xx; ?></td>
                            <td><?= $jumlah_xy; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Rata2</td>
                            <td></td>
                            <td>
                                <?php
                                    $rata2_x = $jumlah_x / $v;
                                    echo $rata2_x;
                                    ?>
                            </td>
                            <td>
                                <?php
                                    $rata2_y = $jumlah_y / $v;
                                    echo $rata2_y;
                                    ?>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td colspan="2">B1</td>
                            <td colspan="5">
                                <?php
                                    $b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $v)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $v);
                                    echo $b1;
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B0</td>
                            <td colspan="5">
                                <?php
                                    $b0 = $rata2_y - $b1 * $rata2_x;
                                    echo $b0;
                                    ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>

                    <div>
                        Rumus Regresi Linear :<br>
                        <?php
                        $y = $b0 . " + " . $b1 . " x";
                        echo $y;
                        ?>
                    </div>

                    <br>
                    <?php
                    if (isset($_POST['prediksi'])) {
                        $bulan = $_POST['bulan'];
                        $bln = ($v - 1) + $bulan;
                        $prediksi = $b0 + $b1 * $bln;
                    ?>

                    <div>
                        Prediksi pupuk untuk <?= $bulan; ?> bulan berikutnya adalah <?= $prediksi; ?>
                    </div>
                    <?php
                    }
                    ?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Prediksi Pupuk untuk beberapa bulan kedepan </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <select name="bulan" class="form-select" required>
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="prediksi" value="prediksi">Prediksi</button>

                </div>
            </form>
        </div>
    </div>
</div>

</html>