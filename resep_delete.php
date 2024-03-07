<?php
include "db/Koneksi.php";

$id_resep = $_GET['id_resep'];

$query = mysqli_query($koneksi, "DELETE FROM resep WHERE id_resep='$id_resep'");

if ($query) {
    echo "<script>
        window.location = 'dashboard.php?dashboard=resep&aksi=edit-berhasil';
    </script>";
}