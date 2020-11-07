<?php

$mhs = query("SELECT * FROM user");

//jika tombol cari ditekan
if(isset($_POST["cari"])){
    $mhs = cari($_POST["keywoard"]);
}

?>

<style>
    .juduol h1{
        width: 848px;
    }
</style>
<div class="main">
    <div class="juduol">
        <h1>Daftar Mahasiswa</h1>
    </div>
    <br>
    <div id="container">
        <table border="1" class="wowo"cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Status</th>
            <th>Gambar</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach( $mhs as $row): ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin?');">Hapus</a> | 
                <a href="?module=editdata&id=<?= $row["id"]; ?> ">Edit</a>
            </td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><?= $row["level"] ?></td>
            <td>
                <img src="img/<?= $row["gambar"] ?>" widht="50" height="50"></td>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        </table>
    </div>
</div>
