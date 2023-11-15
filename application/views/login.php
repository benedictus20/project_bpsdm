<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BPSDM | Penjadwalan Agenda Harian</title>

    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css">

    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.png" />
</head>

<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 shadow bg-white box-area">
            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="<?= base_url() ?>assets/img/logo.png" class="img-fluid" style="width: 250px;">
                </div>
            </div>
            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h1 class="text-info">BPSDM <br> Provinsi Jawa Barat</h1>
                        <p class="text-danger">*Silahkan Login</p>
                        <?php
                        $msg = $this->session->flashdata('message');
                        if (!empty($msg)) {
                            echo $msg;
                        }
                        ?>
                    </div>
                    <form class="user" method="post" action="<?= base_url('login'); ?>">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" id="username" aria-describedby="emailHelp" name="username" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="cek">
                                <label class="form-check-label text-secondary" for="cek"><small>Show Password</small></label>
                            </div>
                            <div class="input-group mb-3">
                                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                                <a class="btn btn-block btn-outline-danger btn-user w-100 fs-6" href=" <?= base_url('home') ?>" style="margin-top: 10px;">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>
<script>
    const pw = document.getElementById("password");
    const cek = document.getElementById("cek");

    cek.onchange = function(e) {
        pw.type = cek.checked ? "text" : "password";
    };
</script>

</body>

</html>