<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BPSDM</title>
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/fontawesome-free/css/all.min.css">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/regular.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/vendor/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/vendor/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="col-lg-9 align-items-center align-items-sm-start px-3">
            <img src="<?= base_url() ?>assets/img/logo_BPSDM.png" width="160px" style="margin-bottom: 20px; margin-top:20px;">
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('') ?>dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Agenda
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>agenda" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agenda Bidang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>undangan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Undangan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 nav-icon"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item">
                    <a class="nav-link" href="#" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            <b>Hai, <?= $user['nama']; ?></b>
                        </span>
                        <i class="fa fa-user-tie fa-lg"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><b>Dashboard</b></h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <?php
                $msg = $this->session->flashdata('flash');
                if (!empty($msg)) {
                    echo $msg;
                }
                ?>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info" style="width: 21rem; height:10rem;margin-left: 10px; margin-top:5px;">
                            <div class=" inner">
                                <h3><?= $jumlah_pelatihan ?></h3>

                                <p>Jumlah Pelatihan dan Webinar</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-podcast"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success" style="width: 21rem; height:10rem; margin-left: 60px; margin-top:5px;">
                            <div class="inner">
                                <h3><?= $agenda ?></sup></h3>

                                <p>Jumlah Agenda Bidang</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-calendar-day"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning" style="width: 21rem; height:10rem;margin-left: 110px; margin-top:5px;">
                            <div class="inner">
                                <h3><?= $undangan ?></h3>

                                <p>Jumlah Undangan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                </div>
                <!-- ./wrapper -->

                <!-- jQuery -->
                <script src="<?= base_url() ?>assets/vendor/plugins/jquery/jquery.min.js"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="<?= base_url() ?>assets/vendor/plugins/jquery-ui/jquery-ui.min.js"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                    $.widget.bridge('uibutton', $.ui.button)
                </script>
                <!-- Bootstrap 4 -->
                <script src="<?= base_url() ?>assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- ChartJS -->
                <script src="<?= base_url() ?>assets/vendor/plugins/chart.js/Chart.min.js"></script>
                <!-- Sparkline -->
                <script src="<?= base_url() ?>assets/vendor/plugins/sparklines/sparkline.js"></script>
                <!-- JQVMap -->
                <script src="<?= base_url() ?>assets/vendor/plugins/jqvmap/jquery.vmap.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
                <!-- jQuery Knob Chart -->
                <script src="<?= base_url() ?>assets/vendor/plugins/jquery-knob/jquery.knob.min.js"></script>
                <!-- daterangepicker -->
                <script src="<?= base_url() ?>assets/vendor/plugins/moment/moment.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/plugins/daterangepicker/daterangepicker.js"></script>
                <!-- Tempusdominus Bootstrap 4 -->
                <script src="<?= base_url() ?>assets/vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                <!-- Summernote -->
                <script src="<?= base_url() ?>assets/vendor/plugins/summernote/summernote-bs4.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="<?= base_url() ?>assets/vendor/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- AdminLTE App -->
                <script src="<?= base_url() ?>assets/vendor/dist/js/adminlte.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="<?= base_url() ?>assets/vendor/dist/js/pages/dashboard.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="<?= base_url() ?>assets/vendor/dist/js/demo.js"></script>
            </div>
        </section>

        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="logoutLabel">Hapus Data</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('login/logout'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Apa Anda Yakin Ingin Logout?</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal logout -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>