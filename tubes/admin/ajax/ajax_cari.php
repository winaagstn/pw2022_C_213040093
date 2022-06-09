<?php
require '../functions.php';
$keyword =  $_GET['keyword'];
$sql = "SELECT * FROM dokter
        WHERE 
        nama_dokter LIKE '%$keyword%' OR 
        no_tlp LIKE '%$keyword%'  
        ";
$dokter = query($sql);

?>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if (empty($dokter)) : ?>
        <tr>
            <td colspan="4">
                <p style="color: red; font-style: italic">data dokter tidak ditemukan!</p>
            </td>
        </tr>
        <?php endif ; ?>

        <?php $i=1;
        foreach($dokter as $d => $value) :?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="../img/<?= $value['foto']; ?>" width="60"></td>
            <td><?= $value['nama_dokter']; ?></td>
            <td>
                <a href="./detail.php?id=<?= $value['id_dokter']; ?>" class="btn btn-info">lihat detail</a>
            </td>
        </tr>
        <?php endforeach ; ?>

    </table>
