<?php
//require 'function.php';

$query1 = $conn->query("SELECT * FROM activity WHERE kategori='kerusakan mayor'");
$query2 = $conn->query("SELECT * FROM activity WHERE kategori='perbaikan'");
$query3 = $conn->query("SELECT * FROM activity WHERE kategori='perawatan rutin'");
$query4 = $conn->query("SELECT * FROM activity WHERE kategori='pemasangan baru'");



$jml_kerusakanmayor = mysqli_num_rows($query1);
$jml_perbaikan = mysqli_num_rows($query2);
$jml_perawatanrutin = mysqli_num_rows($query3);
$jml_pemasanganbaru = mysqli_num_rows($query4);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

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


<div class="row">
    <div class="col-lg-3 col-4">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h4><?php echo number_format($jml_kerusakanmayor, 0, ",", ","); ?> Kerusakan Mayor</h2>
                </h4>

                <p>Terpakai hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-home"></i>
            </div>
            <a href="log.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h4><?php echo number_format($jml_perbaikan, 0, ",", ","); ?> Perbaikan</h4>

                <p>karyawan hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="log.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h4><?php echo number_format($jml_perawatanrutin, 0, ",", ","); ?>
                    Perawatan </h4>
                </h3>
                <p>Perawatan rutin tahun</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="log.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-dark">
            <div class="inner">
                <h4><?php echo number_format($jml_pemasanganbaru, 0, ",", ","); ?>
                    Pemasangan baru</h4>
                <p>Hari ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="log.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


</html>