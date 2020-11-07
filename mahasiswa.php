<?php
session_start();
if ($_SESSION['status']!="login") 
{
    header("location:login.php?pesan=belum_login");
}

if ($_SESSION['level']!="mahasiswa") 
{
    header("location:login.php");
}

if(!isset($_SESSION["login"])){
    header ("Location: login.php");
    exit;
}

require 'functions.php';
$nim = $_SESSION['nim'];
$mhs = query("SELECT * FROM user WHERE nim= '$nim'");
// var_dump($mhs[0]['username']);
// die;

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
    //set session dulu dengan nama $_SESSION["mulai"]
    
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
            <a href="mahasiswa.php?module=home" class="logo"><img src="img/logo/logo.png" class="logo"></a>
            <!-- <a href="logout.php"><img src="img/icon/login.png" width="40px" style="float:right;margin-right:15px;margin-top: 15px;"></a> -->
            <a href="mahasiswa.php?module=data"><img src="img/<?= $mhs[0]['gambar'] ?>" width="45px" 
                style="
                float:right;
                margin-right:15px;
                margin-top: 15px;"></a>
            <a href="" style="float:right; 
                    text-decoration:none;
                    color:salmon;
                    margin-top:10px;"
                    >
                    <?php echo $mhs[0]['username'];?>
                    <br>
                    <?php echo $mhs[0]['nim']; ?>
                    <a>
        <div class="login-form">
            

            <marquee scrollamount="5" style="font-size:14px;color:#ff0000;text-shadow:2px 2px 4px #777;
            font-family:Courier New;border-top:2px solid salmon;border-bottom:2px solid salmon;">
            Selamat Datang di Halaman E-Learning Mata Kuliah Interaksi Manusia Komputer
            </marquee>

            <div class="navbar">
                <a href="?module=home">Home</a>
                <a href="?module=tampilFile">Materi</a>
                <a href="?module=mulai">Soal</a>
                    <!-- <div class="dropdown">
                        <button class="dropbtn">Mahasiswa
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?module=data">Data Mahasiswa <a>
                            <a href="?module=tambah">Tambah Data <a>
                        </div>
                    </div> -->
                <a href="?module=nilai">Nilai</a>
                <a href="logout.php" style="float:right;margin-right:30px;">Keluar</a>
            </div>
</div>
        </div>
        <div class="slide-hero">
        <div class="isi-slider">
                <img src="css/img/logo/slide/hero1.jpg" alt="gambar1" >
                <img src="css/img/logo/slide/hero2.jpg" alt="gambar1" >
                <img src="css/img/logo/slide/hero3.jpg" alt="gambar1" >
            </div>
        </div>
        
        <div class="content cf">
            <?php require_once('mahasiswa/'.$_GET['module'].'.php'); ?>
        </div>
        <div class="footer">
            <p class="copy">Copyright 2019. YogiYaspranika. </p>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
            */
            var detik = 0;
            var menit = <?php echo $menit; ?>;
            var jam     = <?php echo $jam; ?>;
            var hari    = 2;
                  
            /**
               * Membuat function hitung() sebagai Penghitungan Waktu
            */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                     * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
                /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 3 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<h1 align="center"'+peringatan+'>Sisa waktu anda <br/>' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h1>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
  
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
  
                   /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
  
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                             
                        if(jam < 0) { 
                            clearInterval(); 
                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                            var frmSoal = document.getElementById("frmSoal"); 
                            alert('Waktu Anda telah habis, Terima kasih sudah berkunjung.');
                            frmSoal.submit(); 
                        } 
                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
      }); 
      // ]]>
    </script>