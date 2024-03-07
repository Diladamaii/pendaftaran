<?php
include "db/Koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM pasien WHERE id='$id'");

if ($query) {
    echo "<script>
        window.location = 'dashboard.php?dashboard=pasien&aksi=edit-berhasil';
    </script>";
}