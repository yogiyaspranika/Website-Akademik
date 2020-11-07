<?php
if(isset($_POST["tambah"])){

    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('User Berhasil di Tambahkan');
                document.location.href = 'admin.php?module=data';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('User Berhasil di Tambahkan');
                document.location.href = 'admin.php?module=data';
            </script>
            ";
    }
}

?>


        <div class="content">
            <h2>Tambah Data Mahasiswa</h2>
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
                        
                            <a href="" class="logo1"><img src="img/icon/profile.jpg" class="logo1" style="
                            height:100px;width:100px;margin-left:230px;margin-top:20px;border-radius:20px;"></a>
                        
                        <li>
                        <br><br><br><br><br>
                        <div class="gambar">
                            <input type="file" name="gambar" id="gambar" autocomplete="off" style="
                            margin-left:230px;margin-top:15px; width:200px;">
                        </div>
                        </li>

                        <li>
                            <button type="submit" name="tambah">Tambah</submit>
                        </li>
                    </ul>
                </form> 
            </div>          
        </div>
    </div>