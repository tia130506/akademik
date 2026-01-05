<?php
require 'koneksi.php';

//AMBIL DATA PRODI
$prodi = $koneksi->query("SELECT * FROM prodi");
?>

<h2>Input Data Mahasiswa</h2>

<form action="proses.php" method="post">

    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Program Studi</label>
        <select name="prodi_id" class="form-control" required>
            <option value="">-- Pilih Prodi --</option>

            <?php while ($row = $prodi->fetch_assoc()) { ?>
                <option value="<?= $row['id'] ?>">
                    <?= $row['nama_prodi'] ?> (<?= $row['jenjang'] ?>)
                </option>
            <?php } ?>

        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <button type="submit" name="simpan_mahasiswa" class="btn btn-primary">Simpan</button>

</form>