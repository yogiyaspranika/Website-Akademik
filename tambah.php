<?php
require 'functions.php';
session_start();

if(!isset($_SESSION["login"])){
    header ("Location: login.php");
    exit;
}
//cek toombol submit
if(isset($_POST["submit"])){
    //ambil data dari form inputan

    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil di Tambahkan');
                document.location.href = 'index.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('Data Gagal di Tambahkan');
                document.location.href = 'index.php';
            </script>
            ";
    }
}

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" autocomplete="off" required>
        </li>

        <li>
            <label for="nik">NIM : </label>
            <input type="text" name="nik" id="nik" autocomplete="off" required>
        </li>

        <li>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" autocomplete="off" required>
        </li>

        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" autocomplete="off" required>
        </li>

        <li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar" id="gambar">
        </li>

        <li>
            <label for="ket">Status : </label>
            <input type="text" name="ket" id="ket" autocomplete="off" required>
        </li>

        <li>
            <button type="submit" name="submit">Tambah Data </button>
        </li>
    </ul>
</form>

</body>
</html>