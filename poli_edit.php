<?php
include "db/koneksi.php";

$id = $_GET['id'];

$pilih = mysqli_query($koneksi, "SELECT * FROM poli WHERE id='$id'");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_poli = $_POST['nama_poli'];

    $query = mysqli_query($koneksi, "UPDATE poli SET id='$id', nama_poli='$nama_poli'
    WHERE id='$id'");
     if ($query) {
        echo "<script>
        window.location = 'dashboard.php?dashboard=poli&aksi=edit-berhasil';
    </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah poli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h1>Mengedit poli</h1>
            <form action="" method="post">

            <?php
                while ($data  = mysqli_fetch_array($pilih)){
                ?>

                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <input type="text" id="id" class="form-control" name="id"
                    value="<?php echo $data['id'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nama_poli" class="form-label">nama_poli</label>
                    <input type="text" id="nama_poli" class="form-control" name="nama_poli"
                    value="<?php echo $data['nama_poli'] ?>">
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