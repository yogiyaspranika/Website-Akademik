<?php
require '../functions.php';

$keyword = $_GET["keyword"];
$livel= 'level';
$query = "SELECT * FROM user
            WHERE
        nama LIKE '%$keyword%' OR
        nim LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' OR
        $livel LIKE '%$keyword%'
        ";
$mhs = query($query);

?>

<table border="1" cellpadding="10" cellspacing="0">
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
        <a href="ubah.php?id=<?= $row["id"]; ?> ">Edit</a>
    </td>
    <td><?= $row["username"] ?></td>
    <td><?= $row["nim"] ?></td>
    <td><?= $row["email"] ?></td>
    <td><?= $row["jurusan"] ?></td>
    <td><?= $row["level"] ?></td>
    <td>
        <img src="img/<?= $row["gambar"] ?>" widht="80" height="80"></td>
    </td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>