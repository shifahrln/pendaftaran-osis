<?php
session_start();
include "app/boot.php";
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Aplikasi Pendaftaran Osis</title>
    <link rel="icon" href="assets/img/logo.png" type="img/png">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-lg-block bg-primary shadow-lg p-5 text center mt 5">
                                <div class="text-center">
                                    <h3 class="text-white"><img src="app/image/logo12-removebg-preview.png" width="80px" class="mt-3 mb-4"><br>
                                        <b>Pendaftaran Osis <br> SMK Negeri 1 Rongga</b>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to Pendaftaran Osis!</h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                        <div class="form-input mb-3">
                                            <input type="email" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan email anda" required>
                                        </div>
                                        <div class="form-input ">
                                            <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan password anda" required>
                                        </div>

                                        <br>
                                        <button href="" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                        <hr>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
</script>
</body>
<?php


include "app/koneksi.php";

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $cari = $konek->query("select*from login where username='$user' and password='$pass'");
    $cek = $cari->num_rows;
    if ($cek == 0) {
        echo "<script>
        alert('Maaf user/pass tidak ditemukan');
        </script>";
    } else {
        $_SESSION['user'] = $user;

        echo "<script>
        alert('Anda Berhasil login');
        </script>";
?>
        <script>
            document.location.href = 'app/index.php';
        </script>
<?php
    }
}
?>