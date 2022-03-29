<?php 
require 'function.php';
require 'cek.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Masuk | DataTables</title>

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



<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <a class="navbar-brand" href="#">Data Lokasi</a>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
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
        <aside class="main-sidebar sidebar-light-primary elevation-4">
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
                        <a href="#" class="d-block">Lokasi</a>
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
                <?php require("card.php"); ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#lokasi"><i class="fa fa-plus"></i>
                                        Tambah Lokasi
                                    </button>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Lokasi</th>
                                                <th>Lokasi</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            $ambilsemuadatalokasi = mysqli_query($conn,"select * from lokasi ORDER BY idlokasi DESC");
                                            while($data =mysqli_fetch_array($ambilsemuadatalokasi)){
                                                $idl = $data['idlokasi'];
                                                $namalokasi = $data['namalokasi'];                                       
                                        ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$idl;?></td>
                                                <td><?=$namalokasi;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#editlokasi<?=$idl;?>"><i class="fa fa-edit"></i>
                                                        Edit
                                                    </button>

                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#deletelokasi<?=$idl;?>"><i
                                                            class="fa fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="editlokasi<?=$idl;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-primary">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Lokasi</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                <input type="text" name="idlokasi" value="<?=$idl;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="namalokasi"
                                                                    value="<?=$namalokasi;?>" class="form-control">
                                                                <br>
                                                                <input type="hidden" name="idl" value="<?=$idl;?>">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="updatelokasi">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                </div>


                                <!-- The Modal -->
                                <div class="modal fade" id="deletelokasi<?=$idl;?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-gradient-danger">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Lokasi</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus <?=$namalokasi;?>?
                                                    <br>
                                                    <br>
                                                    <input type="hidden" name="idl" value="<?=$idl;?>">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="deletelokasi">Submit</button>
                                            </form>
                                        </div>
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

<!-- modal Insert Tamu -->
<div class="modal fade" id="lokasi">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title">Insert Data Lokasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="modal-body">
                        <input type="text" name="idlokasi" placeholder="ID Lokasi" class="form-control" required>
                        <br>
                        <input type="text" name="namalokasi" placeholder="Lokasi" class="form-control" required>
                        <br>

                        <br>
                        <button type="submit" class="btn btn-primary" name="addlokasi">Submit</button>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


</html>