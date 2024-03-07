<?php
include "db/Koneksi.php";

$id_user = $_GET['id_user'];

$query = mysqli_query($koneksi, "DELETE FROM admin WHERE id_user='$id_user'");

if ($query) {
    echo "<script>
        window.location = 'dashboard.php?dashboard=admin&aksi=edit-berhasil';
    </script>";
}