<?php
include "db/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_pasien = $_POST['nama_pasien'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($koneksi, "INSERT INTO pasien VALUE('$id','$nama_pasien','$alamat','$no_hp')");
    if ($query) {
        echo "berhasil";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h1>Menambah pasien</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <input type="text" id="id" class="form-control" name="id">
                </div>
                <div class="mb-3">
                    <label for="nama_pasien" class="form-label">nama_pasien</label>
                    <input type="text" id="nama_pasien" class="form-control" name="nama_pasien">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input type="text" id="alamat" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">no_hp</label>
                    <input type="text" id="no_hp" class="form-control" name="no_hp">
                </div>

               <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>