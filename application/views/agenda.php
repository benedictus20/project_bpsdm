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
    <link href="<?php echo base_url() ?>assets/css/styles2.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


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
                            <a href="#" class="nav-link align-middle px-1"> <span>Agenda Bidang</span> </a>
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
            <div class="card shadow mb-3" style="margin-top: 20px; margin-left: 10px;">
                <div class="card-header py-3">
                    <h2>Agenda Bidang</h2>
                </div>
                <!-- NGODING KONTEN DISEBELAH SINI GAN -->
                <a href="" class="btn btn-primary" style="margin-bottom: 10px; margin-top:10px;width:fit-content;" data-toggle="modal" data-target="#tambahAgenda">Tambah</a>
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <th>Tanggal</th>
                        <th>Nama Kegiatan</th>
                        <th>Bidang Penyelenggara</th>
                        <th>Jam Pelaksanaan</th>
                        <th>Penyelenggara</th>
                        <th>Tempat Kegiatan</th>
                        <th>Yang Membuka Acara</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($agenda as $a) : ?>
                            <tr>
                                <td><?php echo $a['tgl']; ?></td>
                                <td><?php echo $a['nama_kegiatan']; ?></td>
                                <td><?php echo $a['bidang_penyelenggara']; ?></td>
                                <td><?php echo $a['Jam']; ?></td>
                                <td><?php echo $a['penyelenggara']; ?></td>
                                <td><?php echo $a['tempat_kegiatan']; ?></td>
                                <td><?php echo $a['buka_acara']; ?></td>
                                <td> 
                                    <button href="" class="badge rounded-pill text-bg-success" style="width: 60px;" data-toggle="modal" data-target="#EditData">Edit </button>
                                    <br><button href="" class="badge rounded-pill text-bg-danger" style="width: 60px;">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="tambahAgenda" tabindex="-1" role="dialog" aria-labelledby="tambahAgendaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahAgendaLabel">Tambah Agenda</h5>
                        </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputNamaKegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNamaKegiatan" placeholder="Nama Kegiatan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputBidangPenyelenggara" class="col-sm-2 col-form-label">Bidang Penyelenggara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputBidangPenyelenggara" placeholder="Bidang Penyelenggara">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputJamPelaksanaan" class="col-sm-2 col-form-label">Jam Pelaksanaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputJamPelaksanaan" placeholder="Jam Pelaksanaan">
                    </div>
                    <div class="form-group row">
                    <label for="inputPenyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPenyelenggara" placeholder="Penyelenggara">
                    </div>
                    <div class="form-group row">
                    <label for="inputTempatKegiatan" class="col-sm-2 col-form-label">Tempat Kegiatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputTempatKegiatan" placeholder="Tempat Kegiatan">
                    </div>
                    <div class="form-group row">
                    <label for="inputYangMembukaAcara" class="col-sm-2 col-form-label">Yang Membuka Acara</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputinputYangMembukaAcara" placeholder="Yang Membuka Acara">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer justfy-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>