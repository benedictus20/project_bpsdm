<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.png" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/styles2.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand"><span class="fw-bolder text-primary">BPSDM Provinsi Jawa Barat</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="btn btn-block btn-outline-primary btn-sm" href="<?= base_url('login') ?>">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pb-3">
                <div class="row">
                    <div class="col-sm-2 col-md-3 ">
                        <div class="text-white" style="background-color:#007bff;">
                            <h4 class="text-center"><?= $tanggal ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 pb-5">
                <div class="row">
                    <div>
                        <div class="text-white bg-warning disabled color-palette">
                            <h4 class="text-center">Agenda Bidang</h4>
                        </div>
                        <div class="container-fluid">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <th>Tanggal</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Bidang Penyelenggara</th>
                                    <th>Jam Pelaksanaan</th>
                                    <th>Tempat Kegiatan</th>
                                    <th>Yang Ditugaskan</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($agenda as $a) : ?>
                                        <tr>
                                            <td><?php echo $a['tgl']; ?></td>
                                            <td><?php echo $a['nama_kegiatan']; ?></td>
                                            <td><?php echo $a['bidang_penyelenggara']; ?></td>
                                            <td><?php echo $a['Jam']; ?></td>
                                            <td><?php echo $a['tempat_kegiatan']; ?></td>
                                            <td><?php echo $a['buka_acara']; ?></td>
                                            <td><a href="" class="btn btn-block btn-success btn-sm">Lihat</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 pb-5">
                <div class="row">
                    <div>
                        <div class="text-white bg-success color-palette">
                            <h4 class="text-center">Undangan</h4>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <th>Tanggal</th>
                                <th>Judul Undangan</th>
                                <th>Jam Pelaksanaan</th>
                                <th>Tempat Pelaksanan</th>
                                <th>Yang Ditugaskan</th>
                                <th>Nomor Surat</th>
                                <th>Sample Pdf</th>
                            </thead>
                            <tbody>
                                <?php foreach ($undangan as $b) : ?>
                                    <tr>
                                        <td><?php echo $b['tgl']; ?></td>
                                        <td><?php echo $b['judul_undangan']; ?></td>
                                        <td><?php echo $b['jam_pelaksanaan']; ?></td>
                                        <td><?php echo $b['tempat_pelaksana']; ?></td>
                                        <td><?php echo $b['yang_ditugaskan']; ?></td>
                                        <td><?php echo $b['nomor_surat']; ?></td>
                                        <td><?php echo $b['pdf']; ?></td>
                                        <td><a href="" class="btn btn-block btn-success btn-sm">Lihat</a></td>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </header>
        <!-- About Section-->
    </main>
    <!-- Core theme JS-->
    <script src="<?= base_url('') ?>assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/'); ?>vendor/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>vendor/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/'); ?>vendor/dist/js/demo.js"></script>
    <!-- page script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>