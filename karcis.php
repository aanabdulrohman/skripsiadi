<?php
require 'connect.php';
// require 'blmlogin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Struk - Pembelian</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-71">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h2 class="text-center font-weight-light my-4"> <b>Form Print</b></h2>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="export.php" target="_blank">
                                        <table>
                                            <!-- <div class="form-floating mb-3">
                                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required/>
                                                    <label for="nama">Nama Penerima</label>
                                                </div> -->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="panggil" placeholder="Nama Lengkap"
                                                    required />
                                                <label for="">Nama Driver</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="alamat"
                                                    placeholder="Nama Lengkap" required />
                                                <label for="">Alamat Lapak</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select name="nilai" class="form-select mb-3"
                                                    aria-label="Default select example">
                                                    <option value="Media Tanam">Media Tanam</option>
                                                    <option value="Pupuk Kompos">Pupuk Kompos</option>
                                                    <option value="Pupuk Kandang">Pupuk Kandang</option>
                                                </select>
                                                <label for="Jenis Pupuk">Jenis Pupuk</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="number" name="jumlah" required />
                                                <label for="">Jumlah Pupuk</label>
                                            </div>

                                            <!-- // jenis type pupuk ke 2// -->
                                            <div class="form-floating mb-3">
                                                <select name="nilai2" class="form-select mb-3"
                                                    aria-label="Default select example">
                                                    <option value="Media Tanam">Media Tanam</option>
                                                    <option value="Pupuk Kompos">Pupuk Kompos</option>
                                                    <option value="Pupuk Kandang">Pupuk Kandang</option>
                                                </select>
                                                <label for="Jenis Pupuk">Jenis Pupuk</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="number" name="jumlah2" required />
                                                <label for="">Jumlah Pupuk</label>
                                            </div>

                                            <!-- //jenis pupuk ke 3 -->
                                            <div class="form-floating mb-3">
                                                <select name="nilai3" class="form-select mb-3"
                                                    aria-label="Default select example">
                                                    <option value="Media Tanam">Media Tanam</option>
                                                    <option value="Pupuk Kompos">Pupuk Kompos</option>
                                                    <option value="Pupuk Kandang">Pupuk Kandang</option>
                                                </select>
                                                <label for="Jenis Pupuk">Jenis Pupuk</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="number" name="jumlah3" required />
                                                <label for="">Jumlah Pupuk</label>
                                            </div>
                                        </table>
                                        <input type="submit" class=" form-control btn btn-primary" target="_blank"
                                            value="Simpan" />
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Sutan Fanabih</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>