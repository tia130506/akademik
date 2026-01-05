<h2>List Data Prodi</h2>
<a href ='index.php?page=create' class= 'btn btn-primary'>Input Data Prodi</a>
        <table class="table table-bordered"">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Prodi</th>
      <th scope="col">Jenjang</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require 'koneksi.php';
        $data = $koneksi->query("SELECT * FROM prodi");
        while ($row = $data->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_prodi'] ?></td>
            <td><?= $row['jenjang'] ?></td>
            <td><?= $row['keterangan'] ?></td>
            <td>
                <a href="index.php?page=hapus&hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                <a href="index.php?id=<?=$row['id']?>&page=edit" class="btn btn-success btn-sm">Edit</a>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>
