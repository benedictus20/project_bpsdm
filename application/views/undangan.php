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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
                    <a href="<?= base_url('') ?>dashboard/beranda" class="nav-link">
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
                            <a href="<?= base_url('') ?>agenda" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agenda Bidang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>undangan" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Undangan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('login/logout') ?>" class="nav-link">
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
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><b>Undangan</b></h1>
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
                                <h3 class="card-title">Data Table Undangan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php
                                $msg = $this->session->flashdata('flash');
                                if (!empty($msg)) {
                                    echo $msg;
                                }
                                ?>
                                <a href="" class="btn btn-success" style="margin-bottom: 10px;width:fit-content;" data-toggle="modal" data-target="#tambahUndangan"><i class="fas fa-plus fa-sm"></i> Tambah</a>
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <th>Tanggal</th>
                                        <th>Judul Undangan</th>
                                        <th>Jam Pelaksanaan</th>
                                        <th>Tempat Pelaksanan</th>
                                        <th>Yang Ditugaskan</th>
                                        <th>Nomor Surat</th>
                                        <th>Sample Pdf</th>
                                        <th>Aksi</th>
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
                                                <td>
                                                    <button href="" class="badge rounded-pill text-bg-success" data-toggle="modal" data-target="#editUndangan<?php echo $b['id']; ?>"><i class="fa fa-edit"></i> </button>
                                                    <button href="" class="badge rounded-pill text-bg-danger" data-toggle="modal" data-target="#deleteUndangan<?php echo $b['id']; ?>"><i class="fa fa-trash"></i></button>
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
    <div class="modal fade" id="tambahUndangan" tabindex="-1" role="dialog" aria-labelledby="tambahUndanganLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class=" modal-header">
                    <h5 class="modal-title" id="tambahUndanganLabel">Tambah Undangan</h5>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('undangan/tambah_undangan'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>judul_undangan</label>
                            <input type="text" name="judul_undangan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Jam Pelaksanaan</label>
                            <input type="time" name="jam_pelaksanaan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Pelaksana</label>
                            <input type="text" name="tempat_pelaksana" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>yang_ditugaskan</label>
                            <input type="text" name="yang_ditugaskan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>nomor_surat</label>
                            <input type="text" name="nomor_surat" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Input PDF</label>
                            <input type="file" name="pdf" class="form-control" required>
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
    foreach ($undangan as $b) : ?>
        <div class="modal fade" id="editUndangan<?php echo $b['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editUndanganLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="editUndanganLabel">Edit Agenda</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('undangan/edit_undangan'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">

                            <input type="hidden" name="id" class="form-control" value="<?= $b['id']; ?>" readonly>
                            </div>
                            <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl" class="form-control"value="<?= $b['tgl']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>judul_undangan</label>
                            <input type="text" name="judul_undangan" class="form-control"value="<?= $b['judul_undangan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Jam Pelaksanaan</label>
                            <input type="time" name="jam_pelaksanaan" class="form-control"value="<?= $b['jam_pelaksanaan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Pelaksana</label>
                            <input type="text" name="tempat_pelaksana" class="form-control"value="<?= $b['tempat_pelaksana']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>yang_ditugaskan</label>
                            <input type="text" name="yang_ditugaskan" class="form-control"value="<?= $b['yang_ditugaskan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>nomor_surat</label>
                            <input type="text" name="nomor_surat" class="form-control"value="<?= $b['nomor_surat']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Input PDF</label>
                            <input type="file" name="pdf" class="form-control" required>
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
    <!-- Modal hapus -->
    <?php
    foreach ($undangan as $b) : ?>
        <div class="modal fade" id="deleteUndangan<?php echo $b['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteUndanganLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="deleteUndanganLabel">Hapus Undangan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('undangan/delete_undangan'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Anda Yakin akan menghapus Undangan <?= $b['judul_undangan'] ?> ?</label>
                                <input type="hidden" name="id" required="" value="<?= $b['id']; ?>">
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
    </div>

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