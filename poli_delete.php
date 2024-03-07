<?php
include "db/Koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM poli WHERE id='$id'");

if ($query) {
    echo "<script>
        window.location = 'dashboard.php?dashboard=poli&aksi=edit-berhasil';
    </script>";
}