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

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <a class="navbar-brand" href="#">CHECKLIST IT</a>
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
                        <a href="#" class="d-block">Check List IT</a>
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
                                        data-target="#addchecklist"><i class="fa fa-plus"></i>
                                        Tambah Data Checklist
                                    </button>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Lokasi</th>
                                                <th>Hybrid</th>
                                                <th>Gto</th>
                                                <th>Tfi</th>
                                                <th>Ups</th>
                                                <th>Plaza</th>
                                                <th>Rtm</th>
                                                <th>Barrier</th>
                                                <th>Reader</th>
                                                <th>Printer</th>
                                                <th>CamDom</th>
                                                <th>CamCapture</th>
                                                <th>Jaringan seksi4</th>
                                                <th>Jaringan seksi1&2</th>
                                                <th>Jaringan seksi3</th>
                                                <th>Camseksi 1&2</th>
                                                <th>Camseksi 4</th>
                                                <th>Camseksi 3</th>
                                                <th>Keterangan</th>
                                                <th>IT</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no=1;
                                                $ambilsemuadatachecklist = mysqli_query($conn,"select * from checklist ORDER BY idchecklist DESC");
                                                while($data =mysqli_fetch_array($ambilsemuadatachecklist)){
                                                    $idc = $data['idchecklist'];
                                                    $tgl = $data['tanggal'];  
                                                    $lokasi = $data['namalokasi'];
                                                    $hby = $data['hybrid'];
                                                    $gto = $data['gto'];
                                                    $tfi = $data['tfi'];
                                                    $ups = $data['ups'];
                                                    $plaza = $data['plaza'];
                                                    $rtm = $data['rtm'];
                                                    $barrier = $data['barrier'];
                                                    $reader = $data['readerunik'];
                                                    $printer = $data['printer'];
                                                    $cdom = $data['cameradom'];
                                                    $ccap = $data['cameracapture'];
                                                    $jar4 = $data['jaringanseksi4'];
                                                    $jar12 = $data['jaringanseksi12'];
                                                    $jar3 = $data['jaringanseksi3'];
                                                    $cam12 = $data['cameraseksi12'];
                                                    $cam4 = $data['cameraseksi4'];
                                                    $cam3 = $data['cameraseksi3'];
                                                    $ket = $data['keterangan'];
                                                    $it = $data['namait'];                                               

                                            ?>

                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$tgl;?></td>
                                                <td><?=$lokasi;?></td>
                                                <td><?=$hby;?></td>
                                                <td><?=$gto;?></td>
                                                <td><?=$tfi;?></td>
                                                <td><?=$ups;?></td>
                                                <td><?=$plaza;?></td>
                                                <td><?=$rtm;?></td>
                                                <td><?=$barrier;?></td>
                                                <td><?=$reader;?></td>
                                                <td><?=$printer;?></td>
                                                <td><?=$cdom;?></td>
                                                <td><?=$ccap;?></td>
                                                <td><?=$jar4;?></td>
                                                <td><?=$jar12;?></td>
                                                <td><?=$jar3;?></td>
                                                <td><?=$cam12;?></td>
                                                <td><?=$cam4;?></td>
                                                <td><?=$cam3;?></td>
                                                <td><?=$ket;?></td>
                                                <td><?=$it;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#editchecklist<?=$idc;?>"><i
                                                            class="fa fa-edit"></i>
                                                        Edit
                                                    </button>

                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#deletechecklist<?=$idc;?>"><i
                                                            class="fa fa-trash-alt"></i>
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="editchecklist<?=$idc;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-cyan">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Checklist</h4>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                <input type="text" name="tanggal" value="<?=$tgl;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="namalokasi"
                                                                    value="<?=$lokasi;?>" class="form-control">
                                                                <br>
                                                                <input type="text" name="hybrid" value="<?=$hby;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="gto" value="<?=$gto;?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="tfi" value="<?=$tfi;?>"
                                                                    class="form-control">
                                                                <br>

                                                                <br>
                                                                <br>
                                                                <input type="hidden" name="idc" value="<?=$idc;?>">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="updatechecklist">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                </div>


                                <!-- The Modal -->
                                <div class="modal fade" id="delete<?=$idk;?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus karyawan</h4>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="post">
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus <?=$nama;?>?
                                                    <br>
                                                    <br>
                                                    <input type="hidden" name="idk" value="<?=$idk;?>">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="deletekaryawan">Submit</button>
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
    </div>

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
<div class="modal fade" id="addchecklist">
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
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" placeholder="Tanggal" class="form-control" required>

                        <option selected>Pilih Lokasi</option>
                        <select name="namalokasi" class="custom-select" id="inputGroupSelect01"
                            onchange="merk_change()">
                            <?php 
                            $ambilsemuadatanya = mysqli_query($conn,"select * from lokasi");
                            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){                    
                                $idl = $fetcharray['idlokasi'];
                                $lokasi = $fetcharray['namalokasi'];
                            ?>
                            <option value="<?=$idl;?>"><?=$idl;?></option>
                            <?php 
                            }                      
                            ?>
                        </select>
                        <br>
                        <br>
                        <label for="sel1">hybrid</label>
                        <div class="radio" name="hybrid">
                            <input type="radio" name="hybrid" value="Baik"> Baik
                            <input type="radio" name="hybrid" value="Rusak"> Rusak
                        </div>
                        <br>
                        <label for="sel1">GTO</label>
                        <div class="radio" name="gto">
                            <label><input type="radio" name="gto" value="Baik"> Baik</label>
                            <label><input type="radio" name="gto" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">TFI</label>
                        <div class="radio" name="tfi">
                            <label><input type="radio" name="tfi" value="Baik"> Baik</label>
                            <label><input type="radio" name="tfi" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">UPS</label>
                        <div class="radio" name="ups">
                            <label><input type="radio" name="ups" value="Baik"> Baik</label>
                            <label><input type="radio" name="ups" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Plaza</label>
                        <div class="radio" name="plaza">
                            <label><input type="radio" name="plaza" value="Baik"> Baik</label>
                            <label><input type="radio" name="plaza" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Real Time Monitoring</label>
                        <div class="radio" name="rtm">
                            <label><input type="radio" name="rtm" value="Baik"> Baik</label>
                            <label><input type="radio" name="rtm" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Barrier Palang</label>
                        <div class="radio" name="barrier">
                            <label><input type="radio" name="barrier" value="Baik"> Baik</label>
                            <label><input type="radio" name="barrier" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Reader Unik</label>
                        <div class="radio" name="readerunik">
                            <label><input type="radio" name="readerunik" value="Baik"> Baik</label>
                            <label><input type="radio" name="readerunik" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Printer</label>
                        <div class="radio" name="printer">
                            <label><input type="radio" name="printer" value="Baik"> Baik</label>
                            <label><input type="radio" name="printer" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Camera Dom</label>
                        <div class="radio" name="cameradom">
                            <label><input type="radio" name="cameradom" value="Baik"> Baik</label>
                            <label><input type="radio" name="cameradom" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Camere Capture</label>
                        <div class="radio" name="cameracapture">
                            <label><input type="radio" name="cameracapture" value="Baik"> Baik</label>
                            <label><input type="radio" name="cameracapture" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Jaringan Seksi 4</label>
                        <div class="radio" name="jaringanseksi4">
                            <label><input type="radio" name="jaringanseksi4" value="Baik"> Baik</label>
                            <label><input type="radio" name="jaringanseksi4" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Jaringan Seksi 1&2</label>
                        <div class="radio" name="jaringanseksi12">
                            <label><input type="radio" name="jaringanseksi12" value="Baik"> Baik</label>
                            <label><input type="radio" name="jaringanseksi12" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">Jaringan Seksi 3</label>
                        <div class="radio" name="jaringanseksi3">
                            <label><input type="radio" name="jaringanseksi3" value="Baik"> Baik</label>
                            <label><input type="radio" name="jaringanseksi3" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">CCTV Seksi 1&2</label>
                        <div class="radio" name="cameraseksi12">
                            <label><input type="radio" name="cameraseksi12" value="Baik"> Baik</label>
                            <label><input type="radio" name="cameraseksi12" value="Rusak"> Rusak</label>
                        </div>
                        <br>
                        <label for="sel1">CCTV Seksi 4</label>
                        <div class="radio" name="cameraseksi4">
                            <label><input type="radio" name="cameraseksi4" value="Baik"> Baik</label>
                            <label><input type="radio" name="cameraseksi4" value="Rusak"> Rusak</label>
                        </div>
                        <br>

                        <label for="sel1">CCTV Seksi 3</label>
                        <div class="radio" name="cameraseksi3">
                            <label><input type="radio" name="cameraseksi3" value="Baik"> Baik</label>
                            <label><input type="radio" name="cameraseksi3" value="Rusak"> Rusak</label>
                        </div>
                        <br>

                        <textarea name="keterangan" placeholder="Keterangan" class="form-control" required></textarea>

                        <option selected>Pilih IT</option>
                        <select name="namait" class="custom-select" id="inputGroupSelect01" placeholder="Pilih IT"
                            require>
                            <?php 
                            $ambilsemuadatanya = mysqli_query($conn,"select * from it");
                            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){                    
                                $idi = $fetcharray['idit'];
                                $it = $fetcharray['namait'];
                            ?>
                            <option value="<?=$it;?>"><?=$it;?></option>
                            <?php 
                            }                      
                            ?>
                        </select>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary" name="addchecklist">Submit</button>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


</html>