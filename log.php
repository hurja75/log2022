<?php
require 'function.php';
require 'cek.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info Karyawan | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>

<style>
.zoomable {
    width: 100px;
}

.zoomable:hover {
    transform: scale(2.5);
    transition: 0.3s ease;
}

a {
    text-decoration: none;
    color: white;
}
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <a class="navbar-brand" href="#">LOG ACTIVITY</a>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-info elevation-3">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="mun.png" class="mx-auto d-block" style="width:70%">
                <span class="brand-text font-weight-light"></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="./assets/dist/img/user1.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Log Activity IT</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <?php require("nav.php"); ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <?php //require("card.php"); 
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#tambahactivity"><i class="fa fa-plus"></i>
                                        Tambah Data Activity
                                    </button>
                                    <a href="printlog.php" target="_blank">
                                        <button type="button" class="btn btn-success" data-toggle="modal"><i
                                                class="fa fa-print"></i>
                                            Print
                                        </button>
                                    </a>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Photo</th>
                                                <th>Lokasi</th>
                                                <th>Kategori</th>
                                                <th>Tindakan</th>
                                                <th>Lamanonaktif </th>
                                                <th>Kondisiakhir</th>
                                                <th>User</th>
                                                <th>IT</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $ambilsemuadatalog = mysqli_query($conn, "select * from activity ORDER BY idactivity DESC");
                                            while ($data = mysqli_fetch_array($ambilsemuadatalog)) {
                                                $idlog = $data['idactivity'];
                                                $tgl = $data['tanggal'];
                                                $lokasi = $data['lokasi'];
                                                $kategori = $data['kategori'];
                                                $tindakan = $data['tindakan'];
                                                $lama = $data['lamanonaktif'];
                                                $kondisi = $data['kondisiakhir'];
                                                //$images = $data['images'];
                                                $user = $data['namauser'];
                                                $it = $data['namait'];

                                                //cek semua gambar atau tidak
                                                $gambar = $data['images']; //ambil gambar
                                                if ($gambar == null) {
                                                    //jika tidak ada gambar
                                                    $img = 'No Photo';
                                                } else {
                                                    //jika ada gambar
                                                    $img = '<img src="images/' . $gambar . '" class="zoomable">';
                                                }
                                            ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $tgl; ?></td>
                                                <td><?= $img; ?></td>
                                                <td><?= $lokasi; ?></td>
                                                <td><?= $kategori; ?></td>
                                                <td><?= $tindakan; ?></td>
                                                <td><?= $lama; ?></td>
                                                <td><?= $kondisi; ?></td>
                                                <td><?= $user; ?></td>
                                                <td><?= $it; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#edit<?= $idlog; ?>"><i class="fa fa-edit"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#delete<?= $idlog; ?>"><i
                                                            class="fa fa-trash-alt"></i>
                                                    </button>
                                                    <a href="form.php?id=<?= $idlog; ?>" type="button" target="blank"
                                                        class="btn btn-info" role="button"><i
                                                            class="fa fa-print"></i></a>
                                                </td>
                                            </tr>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="edit<?= $idlog; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-cyan">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Activiti</h4>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form action="function.php" method="post"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="date" name="tanggal" value="<?= $tgl; ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="lokasi" value="<?= $lokasi; ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="kategori"
                                                                    value="<?= $kategori; ?>" class="form-control">
                                                                <br>
                                                                <input type="text" name="tindakan"
                                                                    value="<?= $tindakan; ?>" class="form-control">
                                                                <br>
                                                                <input type="number" name="lamanonaktif"
                                                                    value="<?= $lama; ?>" class="form-control">
                                                                <br>
                                                                <input type="text" name="kondisiakhir"
                                                                    value="<?= $kondisi; ?>" class="form-control">
                                                                <br>
                                                                <input type="text" name="namauser" value="<?= $user; ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="namait" value="<?= $it; ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <br>
                                                                <input type="hidden" name="idactivity"
                                                                    value="<?= $idlog; ?>">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="updateactivity">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                </div>


                                <!-- The Modal -->
                                <div class="modal fade" id="delete<?= $idlog; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus activity</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus <?= $idlog; ?>?
                                                    <br>
                                                    <br>
                                                    <input type="hidden" name="idlog" value="<?= $idlog; ?>">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="deleteactivity">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Lt.4 Menara Bosowa</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./assets/plugins/jszip/jszip.min.js"></script>
    <script src="./assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./assets/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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

<!-- modal Insert karyawan -->
<div class="modal fade" id="tambahactivity">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title">Insert Data Activity</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="date" name="tanggal" placeholder="Tanggal" class="form-control" required>

                        <label for="sel1">Pilih Lokasi:</label>
                        <select name="lokasi" class="form-control" id="lokasi" onchange="lokasi()">
                            <?php
                            $ambillokasi = mysqli_query($conn, "select * from lokasi");
                            while ($fetcharray = mysqli_fetch_array($ambillokasi)) {
                                $idlok = $fetcharray['idlokasi'];
                                $namalokasi = $fetcharray['namalokasi'];
                            ?>
                            <option value="<?= $idlok; ?>"><?= $namalokasi; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <label for="sel2">Pilih Kategori:</label>
                        <select name="kategori" class="form-control" id="kategori" onchange="kategori()">
                            <?php
                            $ambilkategori = mysqli_query($conn, "select * from kategori");
                            while ($fetcharray = mysqli_fetch_array($ambilkategori)) {
                                $idkategori = $fetcharray['idkategori'];
                                $namakategori = $fetcharray['namakategori'];
                            ?>
                            <option value="<?= $namakategori; ?>"><?= $namakategori; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <br>
                        <textarea type="text" name="tindakan" placeholder="Tindakan" class="form-control"
                            required></textarea>
                        <br>
                        <input type="number" name="lamanonaktif" placeholder="Menit" class="form-control" required>
                        <br>
                        <textarea type="text" name="kondisiakhir" placeholder="Kondisi Akhir" class="form-control"
                            required></textarea>

                        <label for="sel2">Pilih Nama User:</label>
                        <select name="namauser" class="form-control" id="namauser">
                            <?php
                            $ambilnamauser = mysqli_query($conn, "select * from user");
                            while ($fetcharray = mysqli_fetch_array($ambilnamauser)) {
                                $iduser = $fetcharray['iduser'];
                                $namauser = $fetcharray['namauser'];
                            ?>
                            <option value="<?= $namauser; ?>"><?= $namauser; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <label for="sel2">Pilih Nama IT:</label>
                        <select name="namait" class="form-control" id="namait" onchange="namait()">
                            <?php
                            $ambilsemuait = mysqli_query($conn, "select * from it");
                            while ($fetcharray = mysqli_fetch_array($ambilsemuait)) {
                                $idit = $fetcharray['idit'];
                                $namait = $fetcharray['namait'];
                                $ttd = $fetcharray['ttd'];
                            ?>
                            <option value="<?= $idit; ?>"><?= $namait; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <br>
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary" name="addlogbaru">Submit</button>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


</html>