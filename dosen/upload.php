<?php
    if(!isset($_SESSION["login"])){
        header ("Location: login.php");
        exit;
    }
    //cek toombol submit
    if(isset($_POST["submit"])){
        //ambil data dari form inputan
        if(tambahFile($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil di Tambahkan');
                    document.location.href = '?module=upload';
                </script>
                ";
        }else{
            echo "
                <script>
                    alert('Data Berhasil di Tambahkan');
                    document.location.href = '?module=upload';
                </script>
                ";        
        }
    }
?>

<style>
    .dia{
        margin-left: 40px;
        padding: 30px;
    }
    .judul1 h2{
        width: 850px;
        margin-left: 40px;
    }
</style>
<div class="judul1">
    <h2>Upload Materi</h2>
</div>

<div class="dia">
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul" autocomplete="off">
            </li>

            <li>
                <label for="data">Masukkan File : </label> <br>
                <img src="img/logo/upload.png" width="80px" height="80px" style="margin-left:60px;"> <br>
                <input type="file" name="data1" id="data">
            </li>

            <li>
                <button type="submit" name="submit">Upload</button>
            </li>
        </ul>
    </form>
</div>