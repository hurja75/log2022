<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'logactiviti');

//Menambah log baru
if (isset($_POST['addlogbaru'])) {
    $idlog = $_POST['idactivity'];
    $tgl = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $kategori = $_POST['kategori'];
    $tindakan = $_POST['tindakan'];
    $lama = $_POST['lamanonaktif'];
    $kondisi = $_POST['kondisiakhir'];
    // $photo = $_POST['photo'];
    $user = $_POST['namauser'];
    $it = $_POST['namait'];

    //Soal upload gambar
    $allowed_extension = array('png', 'jpg');
    $nama = $_FILES['file']['name']; //mengambil nama gambar
    $dot = explode('.', $nama);
    $ekstensi = strtolower(end($dot)); //nagambil extensinya
    $ukuran = $_FILES['file']['size']; //ngambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //ngambil lokasi filenya

    //penamaan file -> enkripsi
    $images  = md5(uniqid($nama, true) . time()) . '.' . $ekstensi; //menggabungkan nama file yg dienkripsi dengan ekstensinya

    //validasi uda atau belum
    $cek = mysqli_query($conn, "select * from activity where idactivity='$idlog'");
    $hitung = mysqli_num_rows($cek);

    if ($hitung < 1) {
        //jika belum ada


        //proses upload gambar
        if (in_array($ekstensi, $allowed_extension) === true) {
            //validasi ukuran filenya
            if ($ukuran < 1500000) {
                move_uploaded_file($file_tmp, 'images/' . $images);

                $addlog = mysqli_query($conn, "insert into activity (tanggal,lokasi,kategori,tindakan,lamanonaktif,kondisiakhir,images,namauser,namait) VALUES('$tgl','$lokasi','$kategori','$tindakan','$lama','$kondisi','$images','$user','$it')");
                if ($addlog) {
                    header('location:log.php');
                } else {
                    echo 'Gagal';
                    header('location:log.php');
                }
            } else {
                //kalau filenya lebih dari 15mb
                echo '
                 <script>
                     alert("Ukuran file terlalu besar");
                     window.location.href="log.php";
                 </script>      
                 ';
            }
        } else {
            //kalau filenya tidak png / jpg
            echo '
             <script>
                 alert("File harus png / jpg");
                 window.location.href="log.php";
             </script>      
             ';
        }
    } else {
        //jika sudah ada
        echo '
         <script>
             alert("Nama barang sudah terdaftar");
             window.location.href="log.php";
         </script>      
         ';
    }
};

//update log
if (isset($_POST['updateactivity'])) {
    // var_dump($_POST);
    // echo "<script>alert('Oke')</script>";
    $idlog = $_POST['idactivity'];
    $tgl = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $kategori = $_POST['kategori'];
    $tindakan = $_POST['tindakan'];
    $lama = $_POST['lamanonaktif'];
    $kondisi = $_POST['kondisiakhir'];
    // $photo = $_POST['photo'];
    $user = $_POST['namauser'];
    $it = $_POST['namait'];

    //Soal upload gambar
    // $allowed_extension = array('png', 'jpg');
    // $nama = $_FILES['file']['name']; //mengambil nama gambar
    // $dot = explode('.', $nama);
    // $ekstensi = strtolower(end($dot)); //nagambil extensinya
    // $ukuran = $_FILES['file']['size']; //ngambil size filenya
    // $file_tmp = $_FILES['file']['tmp_name']; //ngambil lokasi filenya

    //penamaan file -> enkripsi
    // $images  = md5(uniqid($nama, true) . time()) . '.' . $ekstensi; //menggabungkan nama file yg dienkripsi dengan ekstensinya

    //INI VARIABEL SEMENTARA
    $ukuran = 0;
    if ($ukuran == 0) {
        //jika tidak ingin diupload
        $updatelog = mysqli_query(
            $conn,
            "update activity set 
        tanggal='$tgl', 
        lokasi ='$lokasi', 
        kategori ='$kategori',
        tindakan='$tindakan',
        lamanonaktif='$lama',
        kondisiakhir='$kondisi', 
        namauser='$user', 
        namait='$it'  
        where idactivity='$idlog'"
        );

        if ($updatelog) {
            header('location:log.php');
        } else {
            echo 'Gagal';
            header('location:log.php');
        }
    } else {
        //jika ingin
        move_uploaded_file($file_tmp, 'images/' . $images);
        $update = mysqli_query($conn, "update activity set tanggal='$tgl', lokasi ='$lokasi', kategori ='$kategori',tindakan='$tindakan',lamanonaktif='$lama',kondisi='$kondisi', images='$img', namauser='$user', namait='$it'  where idactivity='$idlog'");
        if ($update) {
            header('location:log.php');
        } else {
            echo 'Gagal';
            header('location:log.php');
        }
    }
}

//Delete log
if (isset($_POST['deleteactivity'])) {
    $idlog = $_POST['idlog'];

    $deletelog = mysqli_query($conn, "delete from activity where idactivity='$idlog'");
    if ($deletelog) {
        header('location:log.php');
    } else {
        echo 'Gagal';
        header('location:log.php');
    }
}

//add tamu
if (isset($_POST['addtamu'])) {
    $nama = $_POST['nama'];
    $bertemu = $_POST['bertemu'];
    $status = $_POST['status'];


    $addtotamu = mysqli_query($conn, "insert into tamu (nama,bertemu,status) VALUES('$nama','$bertemu','$status')");
    if ($addtotamu) {
        header('location:tamu.php');
    } else {
        echo 'Gagal';
        header('location:tamu.php');
    }
}

//Update tamu
if (isset($_POST['updatetamu'])) {
    $nama = $_POST['nama'];
    $bertemu = $_POST['bertemu'];
    $status = $_POST['status'];
    $idt = $_POST['idtamu'];

    $update = mysqli_query($conn, "update tamu set nama ='$nama', bertemu ='$bertemu', status ='$status' where idtamu='$idt'");
    if ($update) {
        header('location:tamu.php');
    } else {
        echo 'Gagal';
        header('location:tamu.php');
    }
}

//hapus tamu
if (isset($_POST['deletetamu'])) {
    $idt = $_POST['idtamu'];

    $delete = mysqli_query($conn, "delete from tamu where idtamu='$idt'");
    if ($delete) {
        header('location:tamu.php');
    } else {
        echo 'Gagal';
        header('location:tamu.php');
    }
}

//tambah checklist
if (isset($_POST['addchecklist'])) {
    $idc = $_POST['idchecklist'];
    $tgl = $_POST['tanggal'];
    $lokasi = $_POST['namalokasi'];
    $hby = $_POST['hybrid'];
    $gto = $_POST['gto'];
    $tfi = $_POST['tfi'];
    $ups = $_POST['ups'];
    $plaza = $_POST['plaza'];
    $rtm = $_POST['rtm'];
    $barrier = $_POST['barrier'];
    $reader = $_POST['readerunik'];
    $printer = $_POST['printer'];
    $cdom = $_POST['cameradom'];
    $ccap = $_POST['cameracapture'];
    $jar4 = $_POST['jaringanseksi4'];
    $jar12 = $_POST['jaringanseksi12'];
    $jar3 = $_POST['jaringanseksi3'];
    $cam12 = $_POST['cameraseksi12'];
    $cam4 = $_POST['cameraseksi4'];
    $cam3 = $_POST['cameraseksi3'];
    $ket = $_POST['keterangan'];
    $it = $_POST['namait'];


    $addchecklist = mysqli_query($conn, "insert into checklist (tanggal,namalokasi,hybrid,gto,tfi,ups,plaza,rtm,barrier,readerunik,printer,cameradom,cameracapture,jaringanseksi4,jaringanseksi12,jaringanseksi3,cameraseksi12,cameraseksi4,cameraseksi3,keterangan,namait) VALUES('$tgl','$lokasi','$hby','$gto','$tfi','$ups','$plaza','$rtm','$barrier','$reader','$printer','$cdom','$ccap','$jar4','$jar12','$jar3','$cam12','$cam4','$cam3','$ket','$it')");
    if ($addchecklist) {
        header('location:checklist.php');
    } else {
        echo 'Gagal';
        header('location:checklist.php');
    }
}

//update ruangan
if (isset($_POST['updateruangan'])) {
    $ruangan = $_POST['ruangrapat'];
    $agenda = $_POST['agenda'];
    $jam = $_POST['jam'];
    $ket = $_POST['keterangan'];
    $tgl = $_POST['tanggal'];
    $idr = $_POST['idruangan'];

    $addruangan = mysqli_query($conn, "update ruangan set ruangrapat='$ruangan', agenda='$agenda', jam='$jam', keterangan='$ket', tanggal='$tgl' where idruangan='$idr'");
    if ($addruangan) {
        header('location:ruangan.php');
    } else {
        echo 'Gagal';
        header('location:ruangan.php');
    }
}

//delete ruangan
if (isset($_POST['deleteruangan'])) {
    $idr = $_POST['idruangan'];

    $deleteruangan = mysqli_query($conn, "delete from ruangan where idruangan='$idr'");
    if ($deleteruangan) {
        header('location:ruangan.php');
    } else {
        echo 'Gagal';
        header('location:ruangan.php');
    }
}

//Tambah surat keluar
if (isset($_POST['addskeluar'])) {
    $idsk = $_POST['idsk'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat_penerima'];
    $pengirim = $_POST['pengirim'];

    $addskeluar = mysqli_query($conn, "insert into suratkeluar (nama,alamat_penerima,pengirim) VALUES('$nama','$alamat','$pengirim')");
    if ($addskeluar) {
        header('location:skeluar.php');
    } else {
        echo 'Gagal';
        header('location:skeluar.php');
    }
}

//update skeluar
if (isset($_POST['updateskeluar'])) {
    $idsk = $_POST['idsk'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat_penerima'];
    $pengirim = $_POST['pengirim'];

    $updatskeluar = mysqli_query($conn, "update suratkeluar set nama='$nama', alamat_penerima='$alamat', pengirim='$pengirim'  where idsk='$idsk'");
    if ($updatskeluar) {
        header('location:skeluar.php');
    } else {
        echo 'Gagal';
        header('location:skeluar.php');
    }
}

//Delete skeluar
if (isset($_POST['deleteskeluar'])) {
    $idsk = $_POST['idsk'];

    $deleteskeluar = mysqli_query($conn, "delete from suratkeluar where idsk='$idsk'");
    if ($deleteskeluar) {
        header('location:skeluar.php');
    } else {
        echo 'Gagal';
        header('location:skeluar.php');
    }
}

//Tambah lokasi
if (isset($_POST['addlokasi'])) {
    $idl = $_POST['idlokasi'];
    $namalokasi = $_POST['namalokasi'];

    $addlokasi = mysqli_query($conn, "insert into lokasi (idlokasi,namalokasi) VALUES('$idl', '$namalokasi')");
    if ($addlokasi) {
        header('location:lokasi.php');
    } else {
        echo 'Gagal';
        header('location:lokasi.php');
    }
}

//update lokasi
if (isset($_POST['updatelokasi'])) {
    $idl = $_POST['idlokasi'];
    $namalokasi = $_POST['namalokasi'];

    $updatsmasuk = mysqli_query($conn, "update lokasi set idlokasi='$idl', namalokasi='$namalokasi'  where idlokasi='$idl'");
    if ($updatsmasuk) {
        header('location:lokasi.php');
    } else {
        echo 'Gagal';
        header('location:lokasi.php');
    }
}

//Delete lokasi
if (isset($_POST['deletelokasi'])) {
    $idl = $_POST['idl'];

    $deletelokasi = mysqli_query($conn, "delete from lokasi where idlokasi='$idl'");
    if ($deletelokasi) {
        header('location:lokasi.php');
    } else {
        echo 'Gagal';
        header('location:lokasi.php');
    }
}