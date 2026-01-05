<?php
require 'koneksi.php';

if (!isset($_GET['nim'])) {
    echo "NIM tidak ditemukan!";
    exit;
}

$nim = $_GET['nim'];

$sql = $koneksi->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
$data = $sql->fetch_assoc();

if (!$data) {
    echo "Data mahasiswa tidak ditemukan!";
    exit;
}

$prodi = $koneksi->query("SELECT * FROM prodi");
?>

<h1>Edit Data Mahasiswa</h1>

<form action="index.php?page=proses" method="post">

    <input type="hidden" name="nim_lama" value="<?= $data['nim'] ?>">

    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control"
               value="<?= $data['nim'] ?>">
    </div>

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" class="form-control"
               value="<?= $data['nama_mhs'] ?>">
    </div>

    <div class="mb-3">
        <label>Program Studi</label>
        <select name="prodi_id" class="form-control" required>
            <?php while ($p = $prodi->fetch_assoc()) { ?>
                <option value="<?= $p['id'] ?>"
                    <?= ($p['id'] == $data['prodi_id']) ? 'selected' : '' ?>>
                    <?= $p['nama_prodi'] ?> (<?= $p['jenjang'] ?>)
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control"
               value="<?= $data['tgl_lahir'] ?>">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"><?= $data['alamat'] ?></textarea>
    </div>

    <button type="submit" name="ubah_mahasiswa" class="btn btn-primary">Update</button>


</form>