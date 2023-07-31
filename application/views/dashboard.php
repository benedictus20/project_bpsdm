<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BPSDM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/regular.css" rel="stylesheet" type="text/css">


    <!-- Template Main CSS File -->
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <div class="col-lg-9">
                        <img src="<?= base_url() ?>assets/img/logo_BPSDM.png" width="160px" style="margin-bottom: 70px; margin-top:20px;">
                    </div>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <div style="width: 200px;">
                            <a href="<?= base_url('') ?>dashboard/beranda" class="nav-link align-middle px-1"><span>Dashboard</span></a>
                        </div>
                        <div>
                            <a href="#" class="nav-link align-middle px-1"> <span>Manage User</span> </a>
                        </div>
                        <div>
                            <a href="#" class="nav-link align-middle px-1"><span>Undangan</span></a>
                        </div>
                        <div>
                            <a href="<?= base_url('login/logout') ?>" class="nav-link align-middle px-1">Logout</a>
                        </div>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                <h2 style="margin-bottom: 100px;">Dashboard</h2>
                <!-- NGODING KONTEN DISEBELAH SINI GAN -->
                <div class="row">
                    <div class="card" style="width: 21rem; height:10rem; background-color:#1e8704; margin-left: 25px; margin-top:5px;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Pelatihan dan Webinar</h5>
                            <div><i class="fas fa-regular fa-heart" style="font-size: 50px;"></i></div>
                            <h3 class="card-text" style="text-align: center;">250</h3>
                        </div>
                    </div>
                    <div class="card" style="width: 21rem; height:10rem; background-color:#1e8704; margin-left: 25px; margin-top:5px;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Undangan</h5>
                            <div><i class="fas fa-regular fa-heart" style="font-size: 50px;"></i></div>
                            <h3 class="card-text" style="text-align: center;">250</h3>
                        </div>
                    </div>
                    <div class="card" style="width: 21rem; height:10rem; background-color:#029acc; margin-left: 25px;margin-top:5px;">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah User</h5>
                            <div><i class="fas fa-heart" style="font-size: 50px;"></i></div>
                            <h3 class="card-text" style="text-align: center;">250</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>