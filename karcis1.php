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
                            <form method="POST" action="export.php" target="_blank">
                                <div class="form-group mb-3">
                                    <label class="label" for=" nama">Nama Driver</label>
                                    <input class="form-control1" type="text" name="panggil" placeholder="Nama "
                                        required />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="inputEmail">Alamat Lapak</label>
                                    <input class="form-control1" type="text" name="alamat"
                                        placeholder="Jl Kapt P Tendean 11, Dki Jakarta" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="Jenis Pupuk">Jenis Pupuk</label>
                                    <select name="nilai" class="form-control1 mb-3" aria-label="Default select example">
                                        <option value=""></option>
                                        <option value="Media Tanam">Media Tanam</option>
                                        <option value="Pupuk Kompos">Pupuk Kompos</option>
                                        <option value="Pupuk Kandang">Pupuk Kandang</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="Jumlah Pupuk">Jumlah Pupuk</label>
                                    <input class="form-control1" type="number" name="jumlah" required />
                                </div>
                                <!-- //type 2 -->

                                <div class="form-group mb-3">
                                    <label class="label" for="Jenis Pupuk">Jenis Pupuk-2</label>
                                    <select name="nilai2" class="form-control1 mb-3"
                                        aria-label="Default select example">
                                        <option value=""></option>
                                        <option value="Media Tanam">Media Tanam</option>
                                        <option value="Pupuk Kompos">Pupuk Kompos</option>
                                        <option value="Pupuk Kandang">Pupuk Kandang</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="Jumlah Pupuk">Jumlah Pupuk</label>
                                    <input class="form-control1" type="number" name="jumlah2" />
                                </div>

                                <!-- type 3 -->
                                <div class="form-group mb-3">
                                    <label class="label" for="Jenis Pupuk">Jenis Pupuk-3</label>
                                    <select name="nilai3" class="form-control1 mb-3"
                                        aria-label="Default select example">
                                        <option value=""></option>
                                        <option value="Media Tanam">Media Tanam</option>
                                        <option value="Pupuk Kompos">Pupuk Kompos</option>
                                        <option value="Pupuk Kandang">Pupuk Kandang</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="Jumlah Pupuk">Jumlah Pupuk</label>
                                    <input class="form-control1" type="number" name="jumlah3" />
                                </div>
                                <div class="form-group mb3">
                                    <button type="submit" class="form-control1 btn btn-primary rounded-pill submit px-2"
                                        value="Simpan" target="_blank">Print</button>
                                </div>
                                <a href="keluar.php" class="btn btn-primary rounded-pill">Kembali</a>

                            </form>

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