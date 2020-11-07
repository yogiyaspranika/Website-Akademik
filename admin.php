<?php
session_start();

if(!isset($_SESSION["login"])){
    header ("Location: login.php");
    exit;
}

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon.png">
    <title>E-Learning</title>
    <link rel="stylesheet" href="css/layout1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <a href="admin.php?module=home" class="logo"><img src="img/logo/logo.png" class="logo"></a>
            <a href="logout.php"><img src="img/icon/login.png" width="40px" style="float:right;margin-right:15px;margin-top: 15px;"></a>
        <div class="login-form">
            

            <marquee scrollamount="5" style="font-size:14px;color:#ff0000;text-shadow:2px 2px 4px #777;
            font-family:Courier New;border-top:2px solid salmon;border-bottom:2px solid salmon;">
            Selamat Datang di Halaman Admin E-Learning Mata Kuliah Interaksi Manusia Komputer
            </marquee>

            <div class="navbar">
                <a href="?module=home">Home</a>
                    <div class="dropdown">
                        <button class="dropbtn">Upload
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?module=upload">Upload File<a>
                            <a href="?module=tampilFile">Tampil File <a>
                            <a href="?module=hapusfile">Hapus File <a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Soal
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?module=soal">Soal <a>
                            <a href="?module=tambahsoal">Tambah Soal <a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Mahasiswa
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?module=data">Data Mahasiswa <a>
                            <a href="?module=tambah">Tambah Data <a>
                        </div>
                    </div>
                <a href="?module=hasil">Nilai</a>
            </div>
</div>
        </div>
        <div class="slide-hero">
        <div class="isi-slider">
                <img src="css/img/logo/slide/hero1.jpg" alt="gambar1">
                <img src="css/img/logo/slide/hero2.jpg" alt="gambar1">
                <img src="css/img/logo/slide/hero3.jpg" alt="gambar1">
            </div>
        </div>
        <div class="content cf">
            <?php require_once('dosen/'.$_GET['module'].'.php'); ?>
        </div>
        <div class="footer">
            <p class="copy">Copyright 2019. YogiYaspranika. </p>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

</body>
</html>