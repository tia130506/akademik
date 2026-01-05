<?php
require 'koneksi.php';

$tampil = $koneksi->query("
    SELECT mahasiswa.*, prodi.nama_prodi, prodi.jenjang
    FROM mahasiswa
    JOIN prodi ON mahasiswa.prodi_id = prodi.id
");
?>

<h2>List Data Mahasiswa</h2>
    <a href="index.php?page=create_mahasiswa" class="btn btn-primary">Tambah Mahasiswa</a>
    
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Jenjang</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $no = 1;
    while ($row = $tampil->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama_mhs'] ?></td>
            <td><?= $row['nama_prodi'] ?></td>
            <td><?= $row['jenjang'] ?></td>
            <td><?= $row['tgl_lahir'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td>
                <a href="index.php?page=edit_mahasiswa&nim=<?= $row['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="index.php?page=proses&hapus_mahasiswa=<?= $row['nim'] ?>"
                    onclick="return confirm('Yakin hapus?')"class="btn btn-danger btn-sm">Hapus
                </a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>