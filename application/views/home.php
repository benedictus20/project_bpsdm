<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BPSDM</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/fontawesome-free/css/all.min.css">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/regular.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
</head>

<body class="d-flex flex-column h-100">
    <header id="header">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
            <div class="container px-5">
                <img src="<?= base_url() ?>assets/img/logo_BPSDM.png" height="60px">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="btn btn-block btn-outline-primary btn-sm" href="<?= base_url('login') ?>">Sign In</a></li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- Header-->
        <main class="py-5">
            <div class="container px-5 pb-3">
                <div class="row">
                    <div class="col-sm-2 col-md-3 ">
                        <section class="badge badge-primary">
                            <h4><?= $tanggal ?></h4>
                        </section>
                    </div>
                </div>
            </div>
            <section id="agenda_bidang">
                <div class="container px-5 pb-5" data-aos="fade-up">
                    <div class="row">
                        <div>
                            <div class="text-white bg-warning disabled color-palette">
                                <h5 class="text-center" style="color: #202020;">Agenda Bidang</h5>
                            </div>
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <th>Tanggal</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Bidang Penyelenggara</th>
                                    <th>Jam Pelaksanaan</th>
                                    <th>Tempat Kegiatan</th>
                                    <th>Yang Ditugaskan</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($agenda as $a) : ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y', strtotime($a['tgl'])); ?></td>
                                            <td><?php echo $a['nama_kegiatan']; ?></td>
                                            <td><?php echo $a['bidang_penyelenggara']; ?></td>
                                            <td><?php echo $a['Jam']; ?></td>
                                            <td><?php echo $a['tempat_kegiatan']; ?></td>
                                            <td><?php echo $a['buka_acara']; ?></td>
                                            <td><a href="" class="btn btn-block btn-success btn-sm" data-toggle="modal" data-target="#lihatAgenda<?php echo $a['id']; ?>">Lihat</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="container px-5 pb-3 d-flex justify-content-center">
                            <a class="btn btn-block btn-warning" style="width: 200px;" data-toggle="modal" data-target="#downloadAgenda">Download Agenda</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
            </section>
            <!-- Download Agenda -->
            <div class="modal fade" tabindex="-1" id="downloadAgenda" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class=" modal-header">
                            <h4 class="modal-title">Download Agenda</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body table-responsive">
                            <table id="example3" class="table table-bordered table-hover">
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
                                            <td><?php echo date('d/m/Y', strtotime($a['tgl'])); ?></td>
                                            <td><?php echo $a['nama_kegiatan']; ?></td>
                                            <td><?php echo $a['bidang_penyelenggara']; ?></td>
                                            <td><?php echo $a['Jam']; ?></td>
                                            <td><?php echo $a['tempat_kegiatan']; ?></td>
                                            <td><?php echo $a['buka_acara']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lihat Agenda -->
            <?php
            foreach ($agenda as $a) : ?>
                <div class="modal fade" id="lihatAgenda<?php echo $a['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="lihatAgendaLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class=" modal-header">
                                <h5 class="modal-title" id="lihatAgendaLabel">Data Agenda</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('agenda/lihat_agenda'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <input type="hidden" name="id" class="form-control" value="<?= $a['id']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tgl" class="form-control" value="<?= $a['tgl']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                        <input type="text" name="nama_kegiatan" class="form-control" value="<?= $a['nama_kegiatan']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Bidang Penyelenggara</label>
                                        <input type="text" name="bidang_penyelenggara" class="form-control" value="<?= $a['bidang_penyelenggara']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Jam Pelaksanaan</label>
                                        <input type="time" name="Jam" class="form-control" value="<?= $a['Jam']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Kegiatan</label>
                                        <input type="text" name="tempat_kegiatan" class="form-control" value="<?= $a['tempat_kegiatan']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Yang Ditugaskan</label>
                                        <textarea name="buka_acara" class="form-control" rows="3" readonly><?= $a['buka_acara']; ?></textarea>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <section id="undangan">
                <div class="container px-5 pb-5">
                    <div class="row">
                        <div>
                            <div class="text-white bg-success color-palette">
                                <h5 class="text-center" style="color: #202020;">Undangan</h5>
                            </div>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <th>Tanggal</th>
                                    <th>Judul Undangan</th>
                                    <th>Jam Pelaksanaan</th>
                                    <th>Tempat Pelaksanan</th>
                                    <th>Yang Ditugaskan</th>
                                    <th>Nomor Surat</th>
                                    <th>File Undangan</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($undangan as $b) : ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y', strtotime($b['tgl'])); ?></td>
                                            <td><?php echo $b['judul_undangan']; ?></td>
                                            <td><?php echo $b['jam_pelaksanaan']; ?></td>
                                            <td><?php echo $b['tempat_pelaksana']; ?></td>
                                            <td><?php echo $b['yang_ditugaskan']; ?></td>
                                            <td><?php echo $b['nomor_surat']; ?></td>
                                            <td><?php echo $b['pdf']; ?></td>
                                            <td><a href="" class="btn btn-block btn-success btn-sm" data-toggle="modal" data-target="#lihatUndangan<?php echo $b['id']; ?>">Lihat</a></td>
                                        <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="container px-5 pb-3 d-flex justify-content-center">
                            <a class="btn btn-block btn-success " style="width: 200px;" data-toggle="modal" data-target="#downloadUndangan">Download Undangan</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Download Undangan -->
            <div class="modal fade" tabindex="-1" id="downloadUndangan" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class=" modal-header">
                            <h4 class="modal-title">Download Agenda</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body table-responsive">
                            <table id="example4" class="table table-bordered table-hover">
                                <thead>
                                    <th>Tanggal</th>
                                    <th>Judul Undangan</th>
                                    <th>Jam Pelaksanaan</th>
                                    <th>Tempat Pelaksanan</th>
                                    <th>Yang Ditugaskan</th>
                                    <th>Nomor Surat</th>
                                    <th>File Undangan</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($undangan as $b) : ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y', strtotime($b['tgl'])); ?></td>
                                            <td><?php echo $b['judul_undangan']; ?></td>
                                            <td><?php echo $b['jam_pelaksanaan']; ?></td>
                                            <td><?php echo $b['tempat_pelaksana']; ?></td>
                                            <td><?php echo $b['yang_ditugaskan']; ?></td>
                                            <td><?php echo $b['nomor_surat']; ?></td>
                                            <td><?php echo $b['pdf']; ?></td>
                                        <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lihat Undangan -->
            <?php
            foreach ($undangan as $b) : ?>
                <div class="modal fade" id="lihatUndangan<?php echo $b['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="lihatUndanganLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class=" modal-header">
                                <h5 class="modal-title" id="lihatUndanganLabel">Data Undangan</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('home/lihat_undangan'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <input type="hidden" name="id" class="form-control" value="<?= $b['id']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="date" name="tgl" class="form-control" value="<?= $b['tgl']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Judul Undangan</label>
                                        <input type="text" name="judul_undangan" class="form-control" value="<?= $b['judul_undangan']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Jam Pelaksanaan</label>
                                        <input type="time" name="jam_pelaksanaan" class="form-control" value="<?= $b['jam_pelaksanaan']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Pelaksana</label>
                                        <input type="text" name="tempat_pelaksana" class="form-control" value="<?= $b['tempat_pelaksana']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Yang Ditugaskan</label>
                                        <input type="text" name="yang_ditugaskan" class="form-control" value="<?= $b['yang_ditugaskan']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Surat</label>
                                        <input type="text" name="nomor_surat" class="form-control" value="<?= $b['nomor_surat']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>File Undangan</label>
                                        <input type="text" name="pdf" class="form-control" value="<?= $b['pdf']; ?>" readonly>
                                    </div>
                                    <a href="<?= base_url("./upload/" .  $b['pdf']) ?>" class="btn btn-primary" download>Download File</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </main>
        <!-- About Section-->
    </header>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
            $('#example2').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example3').DataTable({
                //scrollY : '250px',
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
            $('#example4').DataTable({
                //scrollY : '250px',
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>