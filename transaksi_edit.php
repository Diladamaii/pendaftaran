<?php
include "db/koneksi.php";

$id_transaksi = $_GET['id_transaksi'];

$pilih = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_transaksi = $_POST['id_transaksi'];
    $pasien_id = $_POST['pasien_id'];
    $resep_id = $_POST['resep_id'];

    $query = mysqli_query($koneksi, "UPDATE transaksi SET id_transaksi='$id_transaksi', pasien_id='$pasien_id',resep_id='$resep_id',
    WHERE id_transaksi='$id_transaksi'");
     if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=transaksi&aksi=edit-berhasil';
    </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h1>Mengedit transaksi</h1>
            <form action="" method="post">

            <?php
                while ($data  = mysqli_fetch_array($pilih)){
                ?>

                <div class="mb-3">
                    <label for="id_transaksi" class="form-label">id_transaksi</label>
                    <input type="text" id="id_transaksi" class="form-control" name="id_transaksi"
                    value="<?php echo $data['id_transaksi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="pasien_id" class="form-label">pasien_id</label>
                    <input type="text" id="pasien_id" class="form-control" name="pasien_id"
                    value="<?php echo $data['pasien_id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="resep_id" class="form-label">resep_id</label>
                    <input type="text" id="resep_id" class="form-control" name="resep_id"
                    value="<?php echo $data['resep_id'] ?>">
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