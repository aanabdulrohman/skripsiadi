<?php
require 'connect.php';
require 'blmlogin.php';

// tambah admin nih cok 
if (isset($_POST['addadmin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $keterangan = $_POST['keterangan'];

    $queryinsert = mysqli_query($conn, "INSERT INTO login (email,password,keterangan) VALUES   ('$email','$password','$keterangan')");

    if ($queryinsert) {
        //fi berhasil 
        echo ('');
    } else {
        //kalau gagal insert ke db
        header('location:password.html');
    }
}
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
                                    <h3 class=" mb-4 text-left">Sign Up</h3>
                                </div>
                            </div>
                            <form method="POST" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for=" nama">Status Akun</label>
                                    <input class="form-control1" type="text" name="keterangan" placeholder="level Akun"
                                        required />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="inputEmail">Email address</label>
                                    <input class="form-control1" type="email" name="email"
                                        placeholder="name@example.com" required />
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="inputPassword">Password</label>
                                    <input class="form-control1" type="password" name="password"
                                        placeholder="Create a password" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control1 btn btn-primary rounded-pill submit px-2"
                                        name="addadmin">Register</button>
                                </div>

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