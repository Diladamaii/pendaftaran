<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-transaksi.xls");
?>

<table class="table mt-3" border="1">
    <tr>
            <td>id_transaksi</td>
            <td>pasien_id</td>
            <td>resep_id</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM transaksi");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?php echo $data['id_transaksi'] ?></td>
                <td><?php echo $data['pasien_id'] ?></td>
                <td><?php echo $data['resep_id'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>