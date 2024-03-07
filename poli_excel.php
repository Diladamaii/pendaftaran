<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-poli.xls");
?>

<table class="table mt-3" border="1">
    <tr>
            <td>id</td>
            <td>nama_poli</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM poli");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['nama_poli'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>