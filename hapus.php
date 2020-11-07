<?php
require 'functions.php';
session_start();

if(!isset($_SESSION["login"])){
    header ("Location: login.php");
    exit;
}

$id = $_GET["id"];

if( hapus($id) > 0){
    echo "
        <script>
            alert('Data Berhasil di Hapus');
            document.location.href = 'admin.php?module=data';
        </script>
          ";
}else{
    echo "
        <script>
            alert('Data Gagal di Hapus');
            document.location.href = 'admin.php?module=data';
        </script>
        ";
}
?>