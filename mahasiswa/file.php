<?php
//cek data apakah $_GET ada data
if(!isset($_GET["files"])){
    //redirect
    header("Location: ?module=tampilFile");
    exit;
}
?>

<style>
    .main1 embed{
            margin-left:30px;
        }
</style>
<a href="mahasiswa.php?module=home"><img src="img/icon/animasi.gif" heigth="60px" width="100px" style="position:absolute;margin-left:-600px;margin-top:130px;"></a>
<div class="main1">
    <ul>
        <embed src="img/upload/<?= $_GET["files"]; ?>" width="760" height="630"> </embed>
    </ul>
</div>
<!-- <div class="side-bar1">
    <h3>Downloads</h3>
    <div class="colr1">
    <center><a href="img/upload/<?php echo $_GET['files']; ?>" target="_blank"><img src="img/logo/upload.png" width="80px" height="80px">
        <br><?php echo $_GET['judul']; ?></a> <br></center>
    </div>
</div> -->