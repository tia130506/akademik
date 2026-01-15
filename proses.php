<?php
require 'koneksi.php';

//Isert data mahasiswa
if (isset($_POST['simpan_mahasiswa'])) {

    $nim      = $_POST['nim'];
    $nama     = $_POST['nama_mhs'];
    $tgl      = $_POST['tgl_lahir'];
    $alamat   = $_POST['alamat'];
    $prodi_id = $_POST['prodi_id'];

    $query = "INSERT INTO mahasiswa 
              (nim, nama_mhs, tgl_lahir, alamat, prodi_id)
              VALUES 
              ('$nim','$nama','$tgl','$alamat','$prodi_id')";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Gagal menyimpan mahasiswa";
    }
}

// Update data mahasiswa
if (isset($_POST['ubah_mahasiswa'])) {

    $nim_lama = $_POST['nim_lama'];
    $nim      = $_POST['nim'];
    $nama     = $_POST['nama_mhs'];
    $tgl      = $_POST['tgl_lahir'];
    $alamat   = $_POST['alamat'];
    $prodi_id = $_POST['prodi_id'];

    $query = "UPDATE mahasiswa SET
                nim='$nim',
                nama_mhs='$nama',
                tgl_lahir='$tgl',
                alamat='$alamat',
                prodi_id='$prodi_id'
              WHERE nim='$nim_lama'";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Gagal update mahasiswa";
    }
}

//DELETE MAHASISWA
if (isset($_GET['hapus_mahasiswa'])) {

    $nim = $_GET['hapus_mahasiswa'];
    $koneksi->query("DELETE FROM mahasiswa WHERE nim='$nim'");
    header("Location:index.php?page=datamahasiswa");
    exit;
}

//Insert data prodi
if (isset($_POST['simpan_prodi'])) {

    $nama    = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $ket     = $_POST['keterangan'];

    $query = "INSERT INTO prodi (nama_prodi, jenjang, keterangan)
              VALUES ('$nama','$jenjang','$ket')";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=prodi");
        exit;
    } else {
        echo "Gagal simpan prodi";
    }
}

//Update prodi
if (isset($_POST['update_prodi'])) {

    $id      = $_POST['id'];
    $nama    = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $ket     = $_POST['keterangan'];

    $query = "UPDATE prodi SET
                nama_prodi='$nama',
                jenjang='$jenjang',
                keterangan='$ket'
              WHERE id='$id'";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=prodi");
        exit;
    } else {
        echo "Gagal update prodi";
    }
}

//Delete data prodi
if (isset($_GET['hapus_prodi'])) {

    $id = $_GET['hapus_prodi'];
    $koneksi->query("DELETE FROM prodi WHERE id='$id'");
    header("Location:index.php?page=prodi");
    exit;
}



?>a