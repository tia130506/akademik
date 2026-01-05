<?php
require 'koneksi.php';

// INSERT
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

$sql = "INSERT INTO mahasiswa(nim, nama_mhs, tgl_lahir, alamat)
              VALUES('$nim','$nama_mhs','$tgl_lahir','$alamat')";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Maaf, data gagal disimpan!";
    }
}

// DELETE
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Maaf, data gagal dihapus!";
    }
}

// UPDATE
if (isset($_POST['ubah'])) {
    $nim_lama = $_POST['nim_lama']; // ← NIM asli sebelum diedit
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE mahasiswa 
              SET nim='$nim', nama_mhs='$nama_mhs', tgl_lahir='$tgl_lahir', alamat='$alamat'
              WHERE nim='$nim_lama'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Maaf, data gagal diubah!";
    }
}
?>
