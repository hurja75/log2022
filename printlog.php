<?php

include('function.php'); ?>

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

<body onload="window.print()">
    <style type="text/css" media="print">
    @page {
        size: auto;
        margin: 0mm;
    }

    html {
        background-color: #FFFFFF;
    }

    body {
        margin: 10mm 15mm 10mm 15mm
    }
    </style>

    <table border="1" align="center" width=100%>
        <thead>
            <tr>
                <td rowspan="3" width="30%" align="center"><img src="mun.png" alt=""></td>
                <td style="text-align:center" width="40%">
                    <h3>FORMULIR</h3>
                </td>
                <td width="30%" style="padding:1rem">No. Dokumen : 1234567899</td>
            </tr>
            <td rowspan="2" style="text-align:center; padding:1rem">
                <h3>PERMINTAAN PERBAIKAN HARDWARE DAN SOFTWARE PERALATAN TOL DAN TIS </h3>
            </td>
            <td style="padding:1rem">Tgl Terbit : 1 Januari 2022</td>
            <tr>
                <td style="padding:1rem">No. Revisi : 01</td>
            </tr>
        </thead>
        <tr>
        </tr>
    </table>
    <br>

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
                        <form action="function.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="date" name="tanggal" value="<?= $tgl; ?>" class="form-control">
                                <br>
                                <input type="text" name="lokasi" value="<?= $lokasi; ?>" class="form-control">
                                <br>
                                <input type="text" name="kategori" value="<?= $kategori; ?>" class="form-control">
                                <br>
                                <input type="text" name="tindakan" value="<?= $tindakan; ?>" class="form-control">
                                <br>
                                <input type="number" name="lamanonaktif" value="<?= $lama; ?>" class="form-control">
                                <br>
                                <input type="text" name="kondisiakhir" value="<?= $kondisi; ?>" class="form-control">
                                <br>
                                <input type="text" name="namauser" value="<?= $user; ?>" class="form-control">
                                <br>
                                <input type="text" name="namait" value="<?= $it; ?>" class="form-control">
                                <br>
                                <br>
                                <input type="text" name="idactivity" value="<?= $idlog; ?>">
                                <button type="submit" class="btn btn-primary" name="updateactivity">Submit</button>
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
                                <button type="submit" class="btn btn-primary" name="deleteactivity">Submit</button>
                        </form>
                    </div>
                </div>
                <?php
            }
                ?>
        </tbody>
    </table>
</body>

</html>