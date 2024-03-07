<?php
include "db/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_transaksi = $_POST['id_transaksi'];
    $pasien_id = $_POST['pasien_id'];
    $resep_id = $_POST['resep_id'];

    $query = mysqli_query($koneksi, "INSERT INTO transaksi VALUES('$id_transaksi','$pasien_id','$resep_id')");
    if ($query) {
        echo "berhasil";
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
                </div>

            </div>
        </div>

        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_transaksi" class="form-label">id_transaksi</label>
                    <input type="text" id="id_transaksi" class="form-control" name="id_transaksi">
                </div>

                <div class="mb-3">
                    <label for="resep_id" class="form-label">resep_id</label>
                    <?php $qresep = mysqli_query($koneksi, 'SELECT * FROM resep');?>
                    <select name="resep_id" id="" class="form-select">
                    <?php while ($qdata = mysqli_fetch_assoc($qresep)) :?>
                        <option value="<?php echo $qdata['id_resep'] ?>"><?php echo $qdata['deskripsi'] ?> - <?php echo $qdata['harga'] ?></option>
                    <?php endwhile ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pasien_id" class="form-label">pasien_id</label>
                    <?php $pasien = mysqli_query($koneksi, 'SELECT * FROM pasien');?>
                    <select name="pasien_id" id="" class="form-select">
                    <?php while ($datapasien = mysqli_fetch_assoc($pasien)) :?>
                        <option value="<?php echo $datapasien['id'] ?>"><?php echo $datapasien['nama_pasien'] ?> - <?php echo $datapasien['alamat'] ?></option>
                    <?php endwhile ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>