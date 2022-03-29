<?php

include('function.php');
$id = $_GET['id'];

$ambilsemuadatalog = mysqli_fetch_array(mysqli_query($conn, "select * from activity where idactivity='$id'"));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" align="center" width=100%>
        <thead>
            <tr>
                <td rowspan="3" width="30%" align="center"><img src="mun.png" alt="" width="200px"></td>
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



    <table border="1" align="center" width=100%>
        <tr align="left" height="40px">
            <th width=50%>Hari/Tanggal : Rabu 23 Des 2020</th>
            <th>Shift : </th>
            <th width=30%>Lokasi : GTM02</th>
        </tr>

    </table>

    <table border="1" align="center" width=100%>
        <thead>
            <tr>
                <th style="padding:1rem" colspan="2">HARDWARE PERALATAN TOL</th>
            </tr>
            <tr>
                <th style="padding:1rem" width=50%>PLAZA GERBANG TOL</th>
                <th style="padding:1rem" width=50%>URAIAN</th>

            </tr>
            <tr>
                <td style="padding:1rem">
                    <p>Unit Plaza Computer System (PCS)</p>
                    <p>Unit Real Time Monitoring Camera System (RTM)</p>
                    <p>Unit Server CCTV Recording Computer</p>
                    <p>Printer</p>
                    <p>Hub Switch</p>
                    <p>UPS</p>
                </td>
                <td style="padding:1rem; vertical-align:top">
                    <?= $ambilsemuadatalog['tindakan'] ?>
                </td>
            </tr>
            <tr>
                <th width=50%>PLAZA GERBANG TOL</th>
                <th width=50%>URAIAN</th>
            </tr>
            <tr height=30%>
                <td rowspan="3" style="padding:1rem">
                    <p>Unit Line Toll Computer SYSTEM (PCS)</p>
                    <p>Keyboard LTCS</p>
                    <p>Printer LTCS</p>
                    <p>Contact Less Card Reader (CSC) Dinas</p>
                    <p>Contact Less Card Reader e-Pay</p>
                    <p>Gate Barrier</p>
                    <p>SAM Multiaplet</p>
                    <p>Kamera Dom</p>
                    <p>Kamera capture</p>
                    <p>Overhead Traffic Light (OTL)</p>
                    <p>Unit TFI</p>
                    <p>Counter</p>
                    <p>Loop Coil</p>
                    <p>Hub Switch</p>
                    <p>UPS</p>
                    <p>Dispenser GTO</p>
                </td>
                <td style="padding:1rem">
                    <table>
                        <tr style="vertical-align: top;">
                            <td width=50% align="center">
                                <img style="max-width:80%;height:auto;" src="images/<?= $ambilsemuadatalog['images'] ?>" alt="">
                            </td>
                            <td>
                                <?= $ambilsemuadatalog['tindakan'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <th>KONDISI AKHIR</th>
            </tr>
            <tr>
                <td style="padding:1rem">
                    <p>hfdhfdjfgjhfgjgfjgfjgfjhgfj</p>
                    <p>hfdhfdjfgjhfgjgfjgfjgfjhgfj</p>
                </td>
            </tr>
        </thead>

        <table border="1" align="center" width=100%>
            <thead>
                <tr>
                    <th style="padding:1rem" colspan="2">HARDWARE PERALATAN TIS</th>
                </tr>
                <tr>
                    <th style="padding:1rem" width=50%>TRAFFIC INFORMATION SYSTEM</th>
                    <th style="padding:1rem" width=50%>URAIAN</th>
                </tr>
                <tr>
                    <td style="padding:1rem">
                        <p>Videotron LED screen</p>
                        <p>TV Wall and system</p>
                        <p>Camera CCTV, Jenis .....</p>
                        <p>UPS</p>
                        <p>Server</p>
                        <p></p>
                    </td>
                    <td style="padding:1rem">
                        tessssss
                    </td>
                </tr>
            </thead>
        </table>

        <table border="1" width=100%>
            <thead>
                <th width=33%>User</th>
                <th width=33%>Teknisi Peralatan Tol</th>
                <th width=33%>Diketahui</th>
            </thead>
            <tbody>
                <tr height="100px">
                    <th>tess</th>
                    <th>tess</th>
                    <th>tess</th>
                </tr>
                <tr>
                    <th width=33%>Nama : Muslimin</th>
                    <th width=33%>Nama : TIM IT</th>
                    <th width=33%>Nama : Mashuri Said</th>
                </tr>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
</body>

</html>