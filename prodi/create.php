<h1>Input Data Prodi</h1>

<form action="index.php?page=proses" method="post">

    <div class="mb-3">
        <label>Nama Prodi</label>
        <input type="text" name="nama_prodi" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Jenjang</label>
        <select name="jenjang" class="form-control" required>
            <option value="">-- Pilih Jenjang --</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="S2">S2</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control"></textarea>
    </div>

    <button type="submit" name="simpan_prodi" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=dataprodi" class="btn btn-secondary">Kembali</a>

</form>