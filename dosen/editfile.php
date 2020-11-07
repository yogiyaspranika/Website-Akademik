<?php
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM fileUpload WHERE id =$id")[0];

//cek toombol submit
if(isset($_POST["submit"])){
    //ambil data dari form inputan
    if(ubahfile($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil di Ganti');
                document.location.href = 'admin.php?module=hapusfile';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('Data Gagal di Ganti');
                document.location.href = 'admin.php?module=hapusfile';
            </script>
            ";
        echo mysqli_error($link);
        exit;
    }
}

?>
	<h2>Edit Data</h2>
            <div class="form-registrasi">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <input type="hidden" name="datalama" value="<?= $mhs['namaData']; ?>">
            <ul>
                <li>
                <div class="label">
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" required
                    value="<?= $mhs["judul"]; ?>">
                </div>
                </li>

                <li>
                <div class="gambar">
                    <img src="img/logo/upload.png" widht="100" height="100" style="
                            height:100px;width:100px;margin-left:240px;margin-top:20px;border-radius:20px;"> <br>
                    <input type="file" name="namaData" id="namaData" style="
                            margin-left:230px;margin-top:15px; width:200px;" value="<?= $mhs['namaData']; ?>">
                </div>
                </li>

                <li>
                    <button type="submit" name="submit">Edit </button>
                </li>
            </ul>
        </form>