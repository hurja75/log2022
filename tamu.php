<?php 
require 'function.php';
require 'cek.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info Tamu | DataTables</title>

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
                <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN PT. Marga Utama Nusantara, PT. Makassar Metro
                    Network, PT. Jalan Tol Seksi Empat</a>
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="mun.png" class="mx-auto d-block" style="width:70%">
                <h5 class="text-center">MMN </h5>

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
                        <a href="#" class="d-block">Lt. 4 Menara Bosowa</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-dashboard"></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="karyawan.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Karyawan

                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="ruangan.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Ruangan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="smasuk.php" class="nav-link">
                                <i class="nav-icon fas fa-envelope-open-text"></i>
                                <p>
                                    Surat Masuk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="skeluar.php" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Surat Keluar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                </nav>
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
                                        data-target="#addtamu"><i class="fa fa-plus"></i>
                                        Tambah Data Tamu
                                    </button>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tamu</th>
                                                <th>Bertemu Siapa</th>
                                                <th>Status</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=1;
                                            $ambilsemuadatatamu = mysqli_query($conn,"select * from tamu ORDER BY idtamu DESC");
                                            while($data =mysqli_fetch_array($ambilsemuadatatamu)){
                                                $idt = $data['idtamu'];
                                                $nama = $data['nama'];
                                                $bertemu = $data['bertemu'];
                                                $status = $data['status'];
                                                

                                        ?>

                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$bertemu;?></td>
                                                <td><?=$status;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#edit<?=$idt;?>"><i class="fa fa-edit"></i>
                                                        Edit
                                                    </button>

                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#delete<?=$idt;?>"><i class="fa fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="edit<?=$idt;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-primary">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Tamu</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                <input type="text" name="nama" value="<?=$nama;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="bertemu" value="<?=$bertemu;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="status" value="<?=$status;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <br>
                                                                <input type="hidden" name="idtamu" value="<?=$idt;?>">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="updatetamu">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                </div>


                                <!-- The Modal -->
                                <div class="modal fade" id="delete<?=$idt;?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-gradient-danger">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Tamu</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus <?=$nama;?>?
                                                    <br>
                                                    <br>
                                                    <input type="hidden" name="idtamu" value="<?=$idt;?>">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="deletetamu">Submit</button>
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
<div class="modal fade" id="addtamu">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title">Insert Data Tamu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="modal-body">
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                        <br>
                        <input type="text" name="bertemu" placeholder="Bertemu siapa" class="form-control" required>
                        <br>
                        <input type="text" name="status" placeholder="Status" class="form-control" required>
                        <br>
                        <button type="submit" class="btn btn-primary" name="addtamu">Submit</button>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


</html>