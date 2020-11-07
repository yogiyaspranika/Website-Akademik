<?php

$mhs = query("SELECT * FROM fileUpload");

?>

<style>
    .judul2{
        text-align: center;
        color: red;
        margin-left: 40px;
	    width: 850px;
	    font-size: 25px;
        font-weight: bold;
        background-color: rgba(228, 149, 47, 0.479);
    }
</style>
<div class="judul2">
    <h1>Daftar Materi</h1>
</div>
<div class="main">    
    <br>
    <div id="container">
        <table border="1" class="kotakM"cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>File</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach( $mhs as $row): ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="hapusfile.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin?');">Hapus</a> | 
                <a href="?module=editfile&id=<?= $row["id"]; ?> ">Edit</a>
            </td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["namaData"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        </table>
    </div>
</div>