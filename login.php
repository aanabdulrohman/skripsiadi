<?php

require 'connect.php';


//cek login nya 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //cocokin data login nya
    $cekdatabase = mysqli_query($conn, "SELECT * From login where email='$email' and password ='$password'");

    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if ($hitung > 0) {

        $data = mysqli_fetch_assoc($cekdatabase);

        // cek jika user login sebagai admin
        if ($data['keterangan'] == "admin") {

            // buat session login dan username
            $_SESSION['email'] = $email;
            $_SESSION['keterangan'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index.php");

            // cek jika user login sebagai pegawai
        } else if ($data['keterangan'] == "pembeli") {
            // buat session login dan username
            $_SESSION['email'] = $email;
            $_SESSION['keterangan'] = "	
            pembeli";
            // alihkan ke halaman dashboard pegawai
            header("location:index1.php");

            // cek jika user login sebagai pengurus
        } else if ($data['keterangan'] == "pembeli") {
            // buat session login dan username
            $_SESSION['email'] = $email;
            $_SESSION['keterangan'] = "pembeli";
            // alihkan ke halaman dashboard pengurus
            header("location:halaman_pengurus.php");
        } else {

            // alihkan ke halaman login kembali
            header("location:index.php?pesan=gagal");
        }
    } else {
        header("location:index.php?pesan=gagal");
    }
};

if (!isset($_SESSION['log'])) {
} else {
    header('location:index.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style1.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img"
                            style="background-image: url(https://images.pexels.com/photos/1797428/pexels-photo-1797428.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form method="POST" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="email" name="email" id="inputEmail" class="form-control"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="**********"
                                        id="inputPassword">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded-pill "
                                        name="login">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                </div>
                            </form>
                            <!-- <p class="nav-link text-center">Not a member?
                                <a class="nav-link" href="register1.php" target="_blank">Sign Up</a>
                            </p> -->
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