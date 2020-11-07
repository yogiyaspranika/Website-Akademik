<?php
session_start();
require 'functions.php';

//cek cookie
if(isset($_COOKIE['login']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    //ambil username beedasarkan id
    $result = mysqli_query($link, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha512',$row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header ("Location: admin.php?module=home");
    exit;
}


if(isset($_POST["login"])){

    $query1 = mysqli_query($link,"SELECT * FROM soal 
      order by rand()
      limit 1");
  
    while($row = mysqli_fetch_array($query1)) {
        $kj = $row['kj_jenis'];
    }

    $nim = $_POST["nim"];
    $password = $_POST["password"];

    $result=mysqli_query($link, "SELECT * FROM user WHERE nim = '$nim'");
    $result1=mysqli_query($link, $result);
    $data = mysqli_fetch_array($result1);
    //cek user
    if(mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if(isset($_POST["remember"])){
                //buat cookie

                setcookie('id',$row['id'], time()+60);
                setcookie('key',hash('sha512', $row['username']));
            }
            //cek level login
            if($row['level'] === 'mahasiswa'){
                header("Location: mahasiswa.php?module=home");
                $_SESSION['kj'] = $kj;
                $_SESSION['status'] = "login";
                $_SESSION['level'] = "mahasiswa";
                $_SESSION['nim'] = $nim;
                $_SESSION['nama'] = $row['username'];
                exit;
            }
                header("Location: admin.php?module=home");
                $_SESSION['kj'] = $kj;
                exit;
        }else{
            echo "<script>
                alert('Nim/Password yang Anda Masukkan Salah');
                // document.location.href = 'login.php';
            </script>";
            return false;
        }
    }
    echo "<script>
                alert('Nim/Password yang Anda Masukkan Salah');
                document.location.href = 'login.php';
            </script>";
            return false;
}

if(isset($_POST["registrasi"])){
    header("Location: registrasi.php");   
    exit;    
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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="header">
        <a href="" class="logo"><img src="img/logo/logo.png" class="logo"></a>
            <div class="login-form">
            

        <form action="" method="post">
        <ul>
        <li>
            <input type="password" name="password" id="password" placeholder="Password anda">
        </li>

        <li>
            <input type="text" name="nim" id="nim" placeholder="Nim anda" autocomplete="off">
        </li>

        <br>
        <div class="remeb">
            <li>          
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
        </div>
        <br>
            <li>
                <button type="submit" name="login" class="tombol-login">Masuk</submit>
            </li>
            <li>
                <button type="submit" name="registrasi" class="tombol-register">Daftar</submit>
            </li>
    </ul>
        </form>
        
        <div class="warning">
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Nim/Password Salah</p>
                <?php endif ?>
            </div>
            </div>
        </div>

            <marquee scrollamount="5" style="font-size:14px;color:#ff0000;text-shadow:2px 2px 4px #777;font-family:Courier New;margin-top:10px;">
            E-Learning ini hanya tersedia untuk Mata Kuliah Interaksi Manusia Komputer!
            </marquee>

        <div class="slide-hero">
            <div class="isi-slider">
                <img src="css/img/logo/slide/hero1.jpg" alt="gambar1">
                <img src="css/img/logo/slide/hero2.jpg" alt="gambar1">
                <img src="css/img/logo/slide/hero3.jpg" alt="gambar1">
            </div>
        </div>

        <div class="content">
            <h2>Fakultas Ilmu Komputer</h2>
            <p class="penulis">ditulis oleh<a href="#">
                YogiYaspranika</a>. Pada <?php echo date("l,d,M,Y")?> </p>

            <p>Fakultas Ilmu Komputer adalah salah satu Fakultas di Universitas Sriwijaya yang terdiri dari 4 jurusan
                yaitu, Sistem Informasi, Teknik Informatika, Sistem Komputer dan Teknik Komputer Jaringan. Yang dimana Sistem Informasi
                lebih berfokus kepada pembelajaran Database dan Website, Teknik Informatika lebih berfokus pada pemrograman baik
                pmrograman Web, Applikasi maupun Android, Sistem Komputer lebih berfokus terhadap sistem yang ada didalam komputer sedangkan 
                Teknik Komputer Jaringan lebih berfokus kepada cara mengatur atau mengkonfigurasi perangkat komputer.</p>
            </p>

            <p>Sistem Komputer adalah salah satu jurusan di Fakultas Ilmu Komputer Universitas Sriwijaya yang memiliki 3 group riset yaitu 
                pertama group riset Jaringan Komputer yang berfokus kepada keamanan jaringan, IoT, Sistem terdistribusi dsb, kedua group riset Robotika berfokus kepada perancangan robot 
                seperti robot air, udara dan darat dsb. Dan yang terakhir Citra yang berfokus kepada pengenalan terhadap image citra seperti citra retina, image prossesing dsb. 

            </p>

            <p>Program Studi Sistem Komputer pada tahun 2025 menjadi program pendidikan akademik yang terkemuka di bidang riset dan rekayasa teknologi sistem komputer yang mampu menghasilkan sumber daya manusia yang bertaqwa pada Tuhan Yang Maha Esa, berkualitas, berakhlak tinggi, berwawasan keilmuan, professional dan mempunyai keunggulan ilmu sehingga mampu bersaing di era globalisasi. Visi tersebut akan dicapai dengan cara  meningkatkan kualitas, kuantitas dan pendayagunaan sumber daya manusia bidang sistem komputer dengan tujuan untuk mengatasi kesenjangan digital, kesenjangan informasi dan meningkatkan kemandirian masyarakat dalam pemanfaatan Teknologi Informasi dan Komunikasi (TIK) secara efektif optimal serta meningkatkan kapasitas personil, baik untuk lingkungan pemerintah dalam rangka meningkatkan tata pamong, maupun lingkungan industri dalam memacu perkembangan industri, baik industri TIK itu sendiri maupun TIK sebagai pendukung industri/bisnis dan aktivitas lainnya.</p>
        </div>
        <div class="footer">
            <p class="copy">Copyright 2019. YogiYaspranika. </p>
        </div>
    </div>
</body>
</html>