<?php
require 'koneksi.php';

/* =====================
   HAPUS DATA
===================== */
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $query = "DELETE FROM prodi WHERE id='$id'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Data gagal dihapus!";
    }
}

/* =====================
   UPDATE DATA
===================== */
if (isset($_POST['update_prodi'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $ket = $_POST['keterangan'];

    $query = "
        UPDATE prodi SET
            nama_prodi='$nama',
            jenjang='$jenjang',
            keterangan='$ket'
        WHERE id='$id'
    ";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Gagal update data";
    }
}


//insert data

if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_prodi'];
        $jenjang = $_POST['jenjang'];
        $ket = $_POST['keterangan'];

        $koneksi->query("INSERT INTO prodi (nama_prodi, jenjang, keterangan)
                          VALUES ('$nama','$jenjang','$ket')");
        header("Location:index.php?page=datamahasiswa");
    }
?>
