<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-resep.xls");
?>

<table class="table mt-3" border="1">
    <tr>
            <td>id_resep</td>
            <td>deskripsi</td>
            <td>harga</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM resep");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?php echo $data['id_resep'] ?></td>
                <td><?php echo $data['deskripsi'] ?></td>
                <td><?php echo $data['harga'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>