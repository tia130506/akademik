<?php
require 'koneksi.php';

// ambil id dari URL
$row = $_GET['id'];

// ambil data prodi berdasarkan id
$query = "SELECT * FROM prodi WHERE id='$row'";
$sql = $koneksi->query($query);
$data = $sql->fetch_assoc();
?>

<h2>Edit Data Prodi</h2>

<form action="index.php?page=proses" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <div class="mb-3">
        <label>Nama Prodi</label>
        <input type="text" name="nama_prodi"
               class="form-control"
               value="<?= $data['nama_prodi'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Jenjang</label>
        <select name="jenjang" class="form-control" required>
            <option value="">-- Pilih Jenjang --</option>
            <option value="D2" <?= ($data['jenjang']=='D2')?'selected':'' ?>>D2</option>
            <option value="D3" <?= ($data['jenjang']=='D3')?'selected':'' ?>>D3</option>
            <option value="D4" <?= ($data['jenjang']=='D4')?'selected':'' ?>>D4</option>
            <option value="S2" <?= ($data['jenjang']=='S2')?'selected':'' ?>>S2</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control"><?= $data['keterangan'] ?></textarea>
    </div>

    <div>
        <input type="submit" name="update_prodi" value="Update" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-secondary">
    </div>
</form>
