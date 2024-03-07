<?php include 'db/koneksi.php' ?>
<?php
if (isset($_GET['aksi'])) {
  if ($_GET['aksi'] == "hapus-berhasil") {
    echo "
        <div class='alert alert-primary' role='alert'>
            Data Berhasil Dihapus!
        </div>
        ";
  }
  if ($_GET['aksi'] == "add-berhasil") {
    echo "
        <div class='alert alert-success' role='alert'>
            Data Berhasil Ditambahkan!
        </div>
        ";
  }
}
?>
<div class="col-md-12 mb-lg-0 mb-4">
  <div class="card mt-4">
    <div class="card-header pb-0 p-3">
      <div class="row">
        <div class="col-4 d-flex align-items-center">
          <h6 class="mb-0">Resep</h6>
        </div>
        <div class="col-8 text-end">
          <form action="" method="get" class="form-inline">
            <div class="row">

              <div class="col-5">
                <input type="text" class="form-control" placeholder="Cari" aria-label="First name" name="cari">
                <input type="hidden" class="form-control" placeholder="Cari" aria-label="First name" name="dashboard" value="resep">
              </div>
              <div class="col-2">
                <input type="submit" class="btn bg-gradient-primary" value="Cari" aria-label="Last name">
              </div>
          </form>
          <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=resep-add"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add</a>
          </div>
          <div class="col-1">
          <a class="btn bg-gradient-dark mb-0" href="resep_excel.php"><i class="fas fa-file-excel"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="card-body p-3">
    <div class="row">
      <div class="col-md-12 mb-md-0 mb-4">
        <table class="table mt-3">
          <tr>
            <td>id_resep</td>
            <td>deskripsi</td>
            <td>harga</td>
            <td>Aksi</td>
          </tr>


          <?php if (isset($_GET['cari'])) : ?>
            <?php $cari = $_GET['cari'] ?>
            <?php $query = mysqli_query($koneksi, "select * from resep where id_resep like '%" . $cari . "%'"); ?>
          <?php else : ?>
            <?php $query = mysqli_query($koneksi, "SELECT * FROM resep");  ?>
          <?php endif ?>
          <tbody>
            <?php while ($data = mysqli_fetch_array($query)) : ?>
              <tr>
                <td><?php echo $data['id_resep'] ?></td>
                <td><?php echo $data['deskripsi'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td>
                  <a href="dashboard.php?dashboard=resep-edit&id_resep=<?php echo $data['id_resep'] ?>">Edit</a>
                  <a href="dashboard.php?dashboard=resep-delete&id_resep=<?php echo $data['id_resep'] ?>"onclick="return confirm('yakin menghapus')">Hapus</a>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>