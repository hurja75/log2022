<?php 
require 'function.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload|Gambar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="assets/#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <a class="navbar-brand" href="galery.php">SELAMAT DATANG PT. Marga Utama Nusantara, PT. Makassar
                    Metro
                    Network, PT. Jalan Tol Seksi Empat</a>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="assets/#" role="button">
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
            <span class="brand-text font-weight-light"></span>
            </a>

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
        </aside>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container p-3 my-3 border">
                <div class="col-sm-3"></div>
                <div style="width:800px;margin:20px auto; text-align:left">
                    <legend>Form Upload Gambar
                    </legend>
                    <form method="post" enctype="multipart/form-data" action="upload.php">
                        <div class="form-group">
                            <input type="file" name="gambar">
                            <input type="submit" name="gambar" value="Upload">
                        </div>
                        <h4>Note :</h4>
                        <h5>Gambar yang mau diupload di RENAME terlebih dahulu dengan nama:</h5>
                        <h5>img1, img2, img3 dan img4</h5>
                    </form>
                </div>
            </div>



            <!-- upload Video -->
            <div class="container p-3 my-3 border">
                <div class="col-sm-3"></div>
                <div style="width:800px;margin:20px auto; text-align:left">
                    <?php
                    if (isset($_REQUEST['upload']))
                    {
                        $name=$_FILES['file_video']['name'];
                        $type=$_FILES['file_video']['type'];
                        $size=$_FILES['file_video']['size'];
                        //replace tanda spasi pada nama file dengan _
                        $nama_file=str_replace(" ","_",$name);
                        $tmp_name=$_FILES['file_video']['tmp_name'];
                        $nama_folder="video/";
                        $nama_file_baru=$nama_folder.basename($nama_file);
                        //Filter jenis file video dan ukuran file
                        if ((($type == "video/mp4") || ($type == "video/3gpp")  || ($type == "video/x-flv")) && ($size < 250000000 ))
                        {
                            //cek jika nama file sudah ada
                            if (file_exists($nama_file_baru))
                            {
                                $msg="File dengan nama $nama_file sudah ada!\n";
                            }
                            else
                            {  
                                //pindah file dari temporari ke alamat tujuan
                                if(move_uploaded_file($tmp_name,$nama_file_baru))
                                {
                                    $msg="File video $nama_file sudah berhasil diupload";
                                
                                }
                            }
                        }
                        else
                        {
                            $msg="Jenis file tidak sesuai atau ukuran file terlalu besar!";
                        }
                        echo "<p align=\"center\">$msg</p>";
                    }
                    else
                    {
                    ?>
                    <fieldset>
                        <legend>Form Upload Video
                        </legend>
                        <form name="video" enctype="multipart/form-data" method="post" action="" style="padding:10px;">
                            <input type="file" name="file_video" />
                            <input type="submit" name="upload" value="Upload" />
                        </form>
                        <h4>Note :</h4>
                        <h5>Video yang mau diupload di RENAME terlebih dahulu dengan nama:</h5>
                        <h5>video1 format mp4</h5>
                    </fieldset>
                    <?php
                    }
                    ?>
                </div>


            </div>

        </div>
        <!-- Content Header (Page header) -->
    </div>

</body>


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
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- jQuery and JS bundle w/ Popper.js -->

</body>
<?php
// Load file koneksi.php

// Ambil Data yang Dikirim dari Form
if (isset($_POST['gambar'])) {
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
if($tipe_file == "images/JPG" || $tipe_file == "images/PNG"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 7000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 2MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query = "INSERT INTO gambar(nama,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";
      $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='upload.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='upload.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='upload.php'>Kembali Ke Form</a>";
}
}


?>

</html>