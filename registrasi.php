<?php
session_start();
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
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/registrasi1.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="" class="logo"><img src="img/logo/logo.png" class="logo"></a>
            <a href="login.php"><img src="img/icon/login.png" width="40px" style="float:right;margin-right:15px;margin-top: 15px;"></a>
        <div class="login-form">
            
        <div class="warning">
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">username/password salah</p>
                <?php endif ?>
            </div>
            </div>
        </div>

            <marquee scrollamount="5" style="font-size:14px;color:#ff0000;text-shadow:2px 2px 4px #777;font-family:Courier New;margin-top:10px;border-top:2px solid salmon;">
            Pastikan data yang anda masukkan sinkron dengan data Akademik Anda!
            </marquee>

        <div class="slide-hero">
        <div class="isi-slider">
                <img src="css/img/logo/slide/hero1.jpg" alt="gambar1">
                <img src="css/img/logo/slide/hero2.jpg" alt="gambar1">
                <img src="css/img/logo/slide/hero3.jpg" alt="gambar1">
            </div>
        </div>

        <div class="content">
            <h2>Form Registrasi</h2>
            <div class="form-registrasi">
                <form action="" method="post" enctype="multipart/form-data">
                    <ul>
                        <li>
                        <div class="label">
                            <label for="username">Username : </label>
                            <input type="text" name="username" id="username" autocomplete="off" required>
                        </div>
                        </li>

                        <li>
                        <div class="label">
                            <label for="nim">Nim : </label>
                            <input type="text" name="nim" id="nim" autocomplete="off" required>
                        </div>
                        </li>

                        <li>
                        <div class="label">
                            <label for="email">Email : </label>
                            <input type="email" name="email" id="email" autocomplete="off" required>
                        </div>
                        </li>

                        <li>
                        <div class="label">
                            <label for="password">Password : </label>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>
                        </li>

                        <li>
                        <div class="label">
                            <label for="password2">Konfirmasi Password : </label>
                            <input type="password" name="password2" id="password2" autocomplete="off" required>
                        </div>
                        </li>

                        <li>
                        <div class="label">
                            <label for="jurusan">Jurusan : </label>
                            <input type="text" name="jurusan" id="jurusan" autocomplete="off" required>
                        </div>
                        </li>
                        
                            <a href="" class="logo"><img src="img/icon/profile.jpg" class="logo" style="
                            height:100px;width:100px;margin-left:230px;margin-top:20px;border-radius:20px;"></a>
                        
                        <li>
                        <br><br><br><br>
                        <div class="gambar">
                            <input type="file" name="gambar" id="gambar" autocomplete="off" style="
                            margin-left:230px;margin-top:15px; width:200px;">
                        </div>
                        </li>

                        <li>
                            <button type="submit" name="registrasi">Registrasi</submit>
                        </li>
                    </ul>
                </form> 
            </div>          
        </div>
        <div class="footer">
            <p class="copy">Copyright 2019. YogiYaspranika. </p>
        </div>
    </div>
</body>
</html>