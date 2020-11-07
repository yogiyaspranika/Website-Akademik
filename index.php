<?php
session_start();

if(!isset($_SESSION["login"])){
    header ("Location: login.php");
    exit;
}
//connect
//require/include untuk memanggil file
require 'functions.php';

$mhs = query("SELECT * FROM user");

//jika tombol cari ditekan
if(isset($_POST["cari"])){
    $mhs = cari($_POST["keywoard"]);
}

//ambil data mahasiswa dari tabel mahasiswa
// mysqli_fetch_row() mengembalikan array numerik, 
//mysqli_fetch_assoc() mengembalikan array assosiatif
//mysqli_fetch_array() mengembailakn array numerik dan assosiatif
//mysqli_fetch_object() mengmbalikan object array

// while ($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataBase ADMIN</title>
</head>
<body>
<a href ="logout.php">LogOut</a>
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data <a>
<br><br>

<!-- <form action="" method="post">
    <input type="text" name="keywoard" size="40" autofocus
    placeholder="masukkan keywoard pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-car">Searching</button>

</form> -->

<br>
<div id="container">
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
</div>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</body>
</html>