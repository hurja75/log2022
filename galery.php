<?php 
require 'function.php';
require 'cek.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Gallery</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="assets/plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
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
                <img src="mun.png" class="mx-auto d-block" style="width:80%">
                <h5 class="text-center"><b>MMN - JTSE</b></h5>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <div class="sidebar">
                        <!-- Sidebar user (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="./assets/dist/img/user1.jpg" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="index.php" class="d-block">Lt. 4 Menara Bosowa</a>
                            </div>
                        </div>

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
                                    <a href="ruangan.php" class="nav-link">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>
                                            Ruangan

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
                                    <a href="tamu.php" class="nav-link">
                                        <i class="nav-icon fas fa-columns"></i>
                                        <p>
                                            Tamu
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="pengunjung.php" class="nav-link">
                                        <i class="nav-icon fas fa-user-check"></i>
                                        <p>
                                            Pengunjung

                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="smasuk.php" class="nav-link">
                                        <i class="nav-icon fas fa-envelope"></i>
                                        <p>
                                            Suarat Masuk

                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="skeluar.php" class="nav-link">
                                        <i class="nav-icon fas fa-envelope-open-text"></i>
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
                            </ul>
                            </li>

                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div>
                                        <div class="btn-group w-100 mb-2">
                                            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all">
                                                All items </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category
                                                1 (WHITE) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category
                                                2 (BLACK) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category
                                                3 (COLORED) </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category
                                                4 (COLORED, BLACK) </a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle
                                                items </a>
                                            <div class="float-right">
                                                <select class="custom-select" style="width: auto;" data-sortOrder>
                                                    <option value="index"> Sort by Position </option>
                                                    <option value="sortData"> Sort by Custom Data </option>
                                                </select>
                                                <div class="btn-group">
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortAsc>
                                                        Ascending </a>
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortDesc>
                                                        Descending </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">
                                            <div class="filtr-item col-sm-2" data-category="1"
                                                data-sort="Gerbang Kaluku Bodoa">
                                                <a href="images/11.jpg" data-toggle="lightbox"
                                                    data-title="Gerbang Kaluku Bodoa">
                                                    <img src="images/img5.jpg" class="img-fluid mb-2"
                                                        alt="Gerbang Kaluku Bodoa" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                                <a href="images/dd.jpg" data-toggle="lightbox"
                                                    data-title="Gerbang Cambaya">
                                                    <img src="images/img6.jpg" class="img-fluid mb-2"
                                                        alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3" data-sort="red sample">
                                                <a href="images/IMG_3011.JPG" data-toggle="lightbox"
                                                    data-title="sample 3 - red">
                                                    <img src="images/img7.JPG" class="img-fluid mb-2"
                                                        alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="4" data-sort="red sample">
                                                <a href="images/IMG_3022.JPG" data-toggle="lightbox"
                                                    data-title="sample 4 - red">
                                                    <img src="images/img8.JPG" class="img-fluid mb-2"
                                                        alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="5" data-sort="black sample">
                                                <a href="images/IMG_3022.JPG" data-toggle="lightbox"
                                                    data-title="Gerbang Tamalanrea">
                                                    <img src="images/img9.JPG" class="img-fluid mb-2"
                                                        alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="6" data-sort="white sample">
                                                <a href="images/slide1.jpg" data-toggle="lightbox"
                                                    data-title="sample 6 - white">
                                                    <img src="images/img10.jpg" class="img-fluid mb-2"
                                                        alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="7" data-sort="white sample">
                                                <a href="images/IMG_3020.JPG" data-toggle="lightbox"
                                                    data-title="Gerbang Tamalanrea">
                                                    <img src="images/img11.JPG" class="img-fluid mb-2"
                                                        alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="8" data-sort="black sample">
                                                <a href="images/IMG_3022.JPG" data-toggle="lightbox"
                                                    data-title="sample 8 - black">
                                                    <img src="images/img12.JPG" class="img-fluid mb-2"
                                                        alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="9" data-sort="red sample">
                                                <a href="images/IMG_2669.jpg" data-toggle="lightbox"
                                                    data-title="sample 9 - red">
                                                    <img src="images/img13.jpg" class="img-fluid mb-2"
                                                        alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="10"
                                                data-sort="white sample">
                                                <a href="images/IMG_3011.JPG" data-toggle="lightbox"
                                                    data-title="sample 10 - white">
                                                    <img src="images/img14.JPG" class="img-fluid mb-2"
                                                        alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="11"
                                                data-sort="white sample">
                                                <a href="images/IMG_3011.JPG" data-toggle="lightbox"
                                                    data-title="Gerbang Cambaya">
                                                    <img src="images/img15.JPG" class="img-fluid mb-2"
                                                        alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="12"
                                                data-sort="black sample">
                                                <a href="images/IMG_3011.JPG" data-toggle="lightbox"
                                                    data-title="Gerbang Tamalanrea">
                                                    <img src="images/img16.JPG" class="img-fluid mb-2"
                                                        alt="black sample" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021-2022 worrkshop IT</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
    <!-- Filterizr-->
    <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
    </script>
</body>

</html>