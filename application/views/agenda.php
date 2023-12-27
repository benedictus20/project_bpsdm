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
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
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
                    <a href="<?= base_url('') ?>dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Agenda
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>agenda" class="nav-link active">
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
                        <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/logo.png" style="width: 40px;"></img>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><b>Agenda Bidang</b></h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Table Agenda Bidang</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php
                                $msg = $this->session->flashdata('msg');
                                if (!empty($msg)) {
                                    echo $msg;
                                }
                                ?>
                                <a href="" class="btn btn-success" style="margin-bottom: 10px;width:fit-content;" data-toggle="modal" data-target="#tambahAgenda"><i class="fas fa-plus fa-sm"></i> Tambah</a>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <th>Tanggal</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Bidang Penyelenggara</th>
                                        <th>Jam Pelaksanaan</th>
                                        <th>Tempat Kegiatan</th>
                                        <th>Yang Ditugaskan</th>
                                        <th>Status</th>
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
                                                <td>
                                                    <?php
                                                    if ($a['status'] == 0) {
                                                        echo '<p class="badge badge-pill badge-warning">Belum disetujui</p>';
                                                    } else {
                                                        if ($a['status'] == 1) {
                                                            echo '<p class="badge badge-pill badge-success">Telah disetujui</p>';
                                                        } else {
                                                            echo '<p class="badge badge-pill badge-danger">Ditolak</p>';
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <button href="" class="badge rounded-pill text-bg-success" data-toggle="modal" data-target="#editData<?php echo $a['id']; ?>"><i class="fa fa-edit"></i> </button>
                                                    <button href="" class="badge rounded-pill text-bg-danger" data-toggle="modal" data-target="#deleteData<?php echo $a['id']; ?>"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ./col -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- Modal tambah -->
    <div class="modal fade" id="tambahAgenda" tabindex="-1" role="dialog" aria-labelledby="tambahAgendaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class=" modal-header">
                    <h5 class="modal-title" id="tambahAgendaLabel">Tambah Agenda</h5>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('agenda/tambah_agenda'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Bidang Penyelenggara</label>
                            <select class="form-control" name="bidang_penyelenggara">
                                <option value="Bidang SKPK">Bidang SKPK</option>
                                <option value="Bidang PKTI">Bidang PKTI</option>
                                <option value="Bidang PKTU">Bidang PKTU</option>
                                <option value="Bidang PKM">Bidang PKM</option>
                                <option value="Sekretariat">Sekretariat</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Jam Pelaksanaan</label>
                            <input type="time" name="Jam" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Kegiatan</label>
                            <input type="text" name="tempat_kegiatan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Yang Ditugaskan</label>
                            <div class="form-group input-group">
                                <textarea type="text" name="buka_acara" class="form-control" id="nama"> </textarea>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#pilihKaryawan">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal edit -->
    <?php
    foreach ($agenda as $a) : ?>
        <div class="modal fade" id="editData<?php echo $a['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editAgendaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="editAgendaLabel">Edit Agenda</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agenda/edit_agenda'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">

                                <input type="hidden" name="id" class="form-control" value="<?= $a['id']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tgl" class="form-control" value="<?= $a['tgl']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" class="form-control" value="<?= $a['nama_kegiatan']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Bidang Penyelenggara</label>
                                <select class="form-control" name="bidang_penyelenggara">
                                    <option><?= $a['bidang_penyelenggara']; ?></option>
                                    <option value="Bidang SKPK">Bidang SKPK</option>
                                    <option value="Bidang PKTI">Bidang PKTI</option>
                                    <option value="Bidang PKTU">Bidang PKTU</option>
                                    <option value="Bidang PKM">Bidang PKM</option>
                                    <option value="Sekretariat">Sekretariat</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jam Pelaksanaan</label>
                                <input type="time" name="Jam" class="form-control" value="<?= $a['Jam']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Tempat Kegiatan</label>
                                <input type="text" name="tempat_kegiatan" class="form-control" value="<?= $a['tempat_kegiatan']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Yang Ditugaskan</label>
                                <div class="form-group input-group">
                                    <textarea type="text" name="buka_acara" class="form-control" id="editPilihKaryawan"><?= $a['buka_acara']; ?></textarea>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#pilihKaryawanEdit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="status" class="form-control" value="<?= $a['status']; ?>" readonly>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Modal Pilih Karyawan -->
    <div class="modal fade" tabindex="-1" id="pilihKaryawan" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class=" modal-header">
                    <h4 class="modal-title">Pilih Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nama Jabatan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php foreach ($karyawan as $k) : ?>
                                <tr>
                                    <td><?php echo $k['no']; ?></td>
                                    <td><?php echo $k['nip']; ?></td>
                                    <td><?php echo $k['nama']; ?></td>
                                    <td><?php echo $k['nama_jabatan']; ?></td>
                                    <td>
                                        <input type="checkbox" id="cek_karyawan" data-nama="<?= $k['nama']; ?>">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="selectKaryawan()" id="select">Select</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pilih Karyawan Edit-->
    <div class="modal fade" tabindex="-1" id="pilihKaryawanEdit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class=" modal-header">
                    <h4 class="modal-title">Pilih Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <table id="example3" class="table table-bordered table-striped">
                        <thead>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nama Jabatan</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php foreach ($karyawan as $k) : ?>
                                <tr>
                                    <td><?php echo $k['no']; ?></td>
                                    <td><?php echo $k['nip']; ?></td>
                                    <td><?php echo $k['nama']; ?></td>
                                    <td><?php echo $k['nama_jabatan']; ?></td>
                                    <td>
                                        <input type="checkbox" id="cek_karyawanEdit" data-nama="<?= $k['nama']; ?>">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="selectKaryawanEdit()">Select</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal hapus -->
    <?php
    foreach ($agenda as $a) : ?>
        <div class="modal fade" id="deleteData<?php echo $a['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAgendaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="deleteAgendaLabel">Hapus Data</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agenda/delete_agenda'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Anda Yakin akan menghapus Agenda <?= $a['nama_kegiatan'] ?> ?</label>
                                <input type="hidden" name="id" required="" value="<?= $a['id']; ?>">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Modal logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class=" modal-header">
                    <h5 class="modal-title" id="logoutLabel">LOGOUT</h5>
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
        $(document).ready(function() {
            $('#example1').DataTable();
            $('#example3').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
    <script>
        function selectKaryawan() {
            var selectedKaryawan = [];
            var selectedEditKaryawan = [];

            // Loop melalui kotak centang yang dipilih dan simpan datanya
            $('#example1').DataTable().$('#cek_karyawan:checked').each(function(index) {
                var nama = $(this).data('nama');
                selectedKaryawan.push((index + 1) + '. ' + nama);
                // Perbarui input "Yang Ditugaskan" di modal "Tambah Agenda"
                $('#nama').val(selectedKaryawan.join('\n'));

                $('#pilihKaryawan').modal('hide');
            });
        }

        function selectKaryawanEdit() {
            var selectedEditKaryawan = [];

            // Loop melalui kotak centang yang dipilih dan simpan datanya
            $('#example3').DataTable().$('#cek_karyawanEdit:checked').each(function(index) {
                var nama = $(this).data('nama');
                selectedEditKaryawan.push((index + 1) + '. ' + nama);
            });

            // Perbarui input "Yang Ditugaskan" di modal "Edit Agenda"
            $('.buka_acara').val(selectedEditKaryawan.join('\n'));

            $('#pilihKaryawanEdit').modal('hide');
        }
    </script>


</body>

</html>