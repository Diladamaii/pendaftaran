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
          <h6 class="mb-0">Admin</h6>
        </div>
        <div class="col-8 text-end">
        
            <div class="row">

              <div class="col-5">
                
              </div>
              <div class="col-2">
                
          </form>
          <div class="col-4">
            <a class="btn bg-gradient-dark mb-0" href="?dashboard=admin-add"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add</a>
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
            <td>Nama_lengkap</td>
            <td>id_user</td>
            <td>username</td>
            <td>password</td>
            <td>Jabatan</td>
            <td>Alamat</td>
            <td>Kota</td>
            <td>Telepon</td>
            <td>Pendidikan</td>
            <td>Status_perkawinan</td>
            <td>Aksi</td>
          </tr>


          <?php if (isset($_GET['cari'])) : ?>
            <?php $cari = $_GET['cari'] ?>
            <?php $query = mysqli_query($koneksi, "select * from admin where id_user like '%" . $cari . "%'"); ?>
          <?php else : ?>
            <?php $query = mysqli_query($koneksi, "SELECT * FROM admin");  ?>
          <?php endif ?>
          <tbody>
            <?php while ($data = mysqli_fetch_array($query)) : ?>
              <tr>
                <td><?php echo $data['Nama_lengkap'] ?></td>
                <td><?php echo $data['id_user'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['Jabatan'] ?></td>
                <td><?php echo $data['Alamat'] ?></td>
                <td><?php echo $data['Kota'] ?></td>
                <td><?php echo $data['Telepon'] ?></td>
                <td><?php echo $data['Pendidikan'] ?></td>
                <td><?php echo $data['Status_perkawinan'] ?></td>
                <td>
                  <a href="dashboard.php?dashboard=admin-edit&id_user=<?php echo $data['id_user'] ?>">Edit</a>
                  <a href="dashboard.php?dashboard=admin-delete&id_user=<?php echo $data['id_user'] ?>" onclick="return confirm('apakah anda yakin ingin menghapus?')">Hapus</a>
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