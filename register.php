<?php
require 'connect.php';
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">

                                    <form method="POST" class="signin-form">
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" name="keterangan" placeholder="Nama Lengkap" required />
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="email" name="email" placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="password" name="password" placeholder="Create a password" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="addadmin">Sign
                                                In</button>
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50 text-left">
                                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                    <input type="checkbox" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="w-50 text-md-right">
                                                <a href="404.html" target="_blank">Forgot Password</a>
                                            </div>
                                        </div>
                                    </form>
                                    <form method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <!-- <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <!-- <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="keterangan" placeholder="Nama Lengkap" required />
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" name="email" placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="password" name="password" placeholder="Create a password" required />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <!-- <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-block" name="addadmin">Register</button>
                                            </div>
                                        </div>
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
        <div id="layoutAuthentication_footer">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>