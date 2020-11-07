<?php
require 'functions.php';

if(isset($_POST["registrasi"])){

    if(registrasi($_POST) > 0){
        echo "
            <script>
                alert('User Berhasil di Tambahkan');
                document.location.href = 'login.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('User Berhasil di Tambahkan');
                document.location.href = 'login.php';
            </script>
            ";
    }
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css">
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>

<a href="login.php">Back</a>
<h1>Registrasi</h1>

<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" autocomplete="off" required>
        </li>

        <li>
            <label for="nim">Nim : </label>
            <input type="text" name="nim" id="nim" autocomplete="off" required>
        </li>

        <li>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" autocomplete="off" required>
        </li>

        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" autocomplete="off" required>
        </li>

        <li>
            <label for="password2">Konfirmasi Password : </label>
            <input type="password" name="password2" id="password2" autocomplete="off" required>
        </li>

        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" autocomplete="off" required>
        </li>

        <li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar" id="gambar" autocomplete="off">
        </li>

        <li>
            <button type="submit" name="registrasi">Registrasi</submit>
        </li>
    </ul>
</form>

</body>
</html>