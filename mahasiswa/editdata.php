<?php

$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM user WHERE id = $id")[0];

//cek toombol submit
if(isset($_POST["submit"])){
    //ambil data dari form inputan
    if(ubah1($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil di Ganti');
                document.location.href = 'mahasiswa.php?module=data';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('Data Gagal di Ganti');
                document.location.href = 'mahasiswa.php?module=data';
            </script>
            ";
    }
}

?>
<h2>Edit Data Mahasiswa</h2>
<div class="form-registrasi">
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <input type="hidden" name="gambarlama" value="<?= $mhs['gambar']; ?>">
    

    <ul>
        
        <li>
        <div class="label">
            <label for="nama">Nama : </label>
            <input type="text" name="username" id="nama" required
            value="<?= $mhs["username"]; ?>">
        </div>
        </li>

        <li>
        <div class="label">
            <label for="nik">NIM : </label>
            <input type="text" name="nim" id="nik" required
            value="<?= $mhs["nim"]; ?>">
        </div>
        </li>

        <li>
        <div class="label">
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" required
            value="<?= $mhs["email"]; ?>">
        </div>
        </li>

        <li>
        <div class="label">
        <label for="pass">Ganti Password : </label>
        <input type="password" name="password" id="pass" required
        value="<?= $mhs['password']; ?>">
        </div>
        </li>

        <li>
        <div class="label">
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" required
            value="<?= $mhs["jurusan"]; ?>"> 
        </div>
        </li>

        <li>
        <div class="gambar">
            <label for="gambar">Gambar : </label> <br>
            <img src="img/<?= $mhs['gambar']; ?>" widht="80" height="80"
            style="height:100px;
                    width:100px;
                    margin-left:150px;
                    margin-top:20px;
                    border-radius:20px;">
            <br>
            <input type="file" name="gambar" id="nama" 
            style=" margin-left:280px;
                    margin-top:20px;
                    border-radius:20px;">
        </div>
        </li>

        <li>
        <div class="label">
            <label for="ket">Status : </label>
            <input type="text" name="level" id="ket" required
            value="<?= $mhs["level"]; ?>">
        </div>
        </li>

        <li>
            <button type="submit" name="submit">Edit Data </button>
        </li>
    </ul>
</form>
</div>