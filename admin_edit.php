<?php
include "db/koneksi.php";

$id_user = $_GET['id_user'];

$pilih = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_user='$id_user'");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nama_lengkap = $_POST['Nama_lengkap'];
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Jabatan = $_POST['Jabatan'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $Telepon = $_POST['Telepon'];
    $Pendidikan = $_POST['Pendidikan'];
    $Status_perkawinan = $_POST['Status_perkawinan'];

    $query = mysqli_query($koneksi, "UPDATE admin SET Nama_lengkap='$Nama_lengkap', id_user='$id_user', username='$username',password='$password', Jabatan='$Jabatan', Alamat='$Alamat', Kota='$Kota', Telepon='$Telepon', Pendidikan='$Pendidikan', Status_perkawinan='$Status_perkawinan'
    WHERE id_user='$id_user'");
     if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=admin&aksi=edit-berhasil';
    </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h1>Mengedit admin</h1>
            <form action="" method="post">

            <?php
                while ($data  = mysqli_fetch_array($pilih)){
                ?>

                <div class="mb-3">
                    <label for="Nama_lengkap" class="form-label">Nama_lengkap</label>
                    <input type="text" id="Nama_lengkap" class="form-control" name="Nama_lengkap"
                    value="<?php echo $data['Nama_lengkap'] ?>">
                </div>
                <div class="mb-3">
                    <label for="id_user" class="form-label">id_user</label>
                    <input type="text" id="id_user" class="form-control" name="id_user"
                    value="<?php echo $data['id_user'] ?>">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" id="username" class="form-control" name="username"
                    value="<?php echo $data['username'] ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" id="password" class="form-control" name="password"
                    value="<?php echo $data['password'] ?>">
                </div>
                <div class="mb-3">
                    <label for="Jabatan" class="form-label">Jabatan</label>
                    <input type="text" id="Jabatan" class="form-control" name="Jabatan"
                    value="<?php echo $data['Jabatan'] ?>">
               </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" id="Alamat" class="form-control" name="Alamat"
                    value="<?php echo $data['Alamat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="Kota" class="form-label">Kota</label>
                    <input type="text" id="Kota" class="form-control" name="Kota"
                    value="<?php echo $data['Kota'] ?>">
                </div>
                <div class="mb-3">
                    <label for="Telepon" class="form-label">Telepon</label>
                    <input type="text" id="Telepon" class="form-control" name="Telepon"
                    value="<?php echo $data['Telepon'] ?>">
                </div>
                <div class="mb-3">
                    <label for="Pendidikan" class="form-label">Pendidikan</label>
                    <input type="text" id="Pendidikan" class="form-control" name="Pendidikan"
                    value="<?php echo $data['Pendidikan'] ?>">
                </div>
                <div class="mb-3">
                    <label for="Status_perkawinan" class="form-label">Status_perkawinan</label>
                    <input type="text" id="Status_perkawinan" class="form-control" name="Status_perkawinan"
                    value="<?php echo $data['Status_perkawinan'] ?>">
                </div>
               <button type="submit" class="btn btn-primary">Simpan</button>
               <?php } ?>
            </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>