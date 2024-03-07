<?php
include "db/koneksi.php";

$id_resep = $_GET['id_resep'];

$pilih = mysqli_query($koneksi, "SELECT * FROM resep WHERE id_resep='$id_resep'");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_resep = $_POST['id_resep'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "UPDATE resep SET id_resep='$id_resep', deskripsi='$deskripsi',harga='$harga'
    WHERE id_resep='$id_resep'");
     if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=resep&aksi=edit-berhasil';
    </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h1>Mengedit resep</h1>
            <form action="" method="post">

            <?php
                while ($data  = mysqli_fetch_array($pilih)){
                ?>

                <div class="mb-3">
                    <label for="id_resep" class="form-label">id_resep</label>
                    <input type="text" id="id_resep" class="form-control" name="id_resep"
                    value="<?php echo $data['id_resep'] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <input type="text" id="deskripsi" class="form-control" name="deskripsi"
                    value="<?php echo $data['deskripsi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="text" id="harga" class="form-control" name="harga"
                    value="<?php echo $data['harga'] ?>">
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