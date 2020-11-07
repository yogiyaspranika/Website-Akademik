<?php
//connect
$link=mysqli_connect("localhost","root","","belajar");

//query data tabel mahasiswa
// $result=mysqli_query($link,"SELECT * FROM mahasiswa");
// //info error
// if(!$result){
//     echo mysqli_error($link);
// }

function query($query){
    global $link;
    $result= mysqli_query($link,$query);
    $rows= [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    //htmlspecialchars()
    global $link;

    $username = strtolower(stripslashes($data["username"]));
    
    $password = mysqli_real_escape_string($link, $data["password"]);
    $password2 = mysqli_real_escape_string($link, $data["password2"]);
    $nim = $data["nim"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $level = 'mahasiswa';

    //upload gambar
    $gambar = upload();
    error_reporting(1);
    if( !$gambar){
        return false;
    }

    //cek username sudah terdaftar atau belum
    $result=mysqli_query($link, "SELECT username FROM user1 
        WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //cek nim sudah terdaftar atau belum
    $result=mysqli_query($link, "SELECT nim FROM user 
        WHERE nim = '$nim'");
        
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Nim Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //cek email sudah terdaftar atau belum
    $result=mysqli_query($link, "SELECT email FROM user 
        WHERE email = '$email'");
        
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('email Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //konfirmasi password
    if ($password !== $password2){
        echo "<script>
                alert('password tidak sama');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah userbaru ke database
    $query=mysqli_query($link, "INSERT INTO user
                                VALUES
                            (null, '$username','$nim','$email','$password','$jurusan','$level','$gambar')
                            ");

    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function hapus($id){
    global $link;
    $query = "DELETE FROM user WHERE id = $id";
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function hapusfile($id){
    global $link;
    $query = "DELETE FROM fileUpload WHERE id = $id";
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function ubah1($data){
    global $link;
    
    $id = $data["id"];
    $username = $data["username"];
    $nim = $data["nim"];
    $email = $data["email"];
    $password1 = $data["password"];
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $jurusan = $data["jurusan"];
    $level = $data["level"];
    $gambarlama = $data['gambarlama'];
    
    //cek apakah gambar diganti
    if ($_FILES['gambar']['error'] === 4){
        $gambar = $gambarlama;
    }else{
        $gambar = upload();
    }


    $password1 = 'password';
    $level1 = 'level';

    $query= "UPDATE user SET
            username = '$username',
            nim = '$nim',
            email = '$email',
            $password1 = '$password',
            jurusan = '$jurusan',
            $level1 = '$level',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($link, $query);

    return mysqli_affected_rows($link);
}

function ubahfile($data){
    global $link;

    $id = $data["id"];
    $judul = $data["judul"];
    //data
    $datalama = $data['datalama'];
    //cek apakah data diganti
    if ($_FILES['namaData']['error'] === 4){
        $gambar = $datalama;
    }else{
        $gambar = uploadfile();
    }

    $query= "UPDATE fileUpload SET
            judul = '$judul',
            namaData = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($link, $query);

    return mysqli_affected_rows($link);
}

function cari($keywoard){
    $query = "SELECT * FROM mahasiswa1
                WHERE
                nama LIKE '%$keywoard%' OR
                nik LIKE '%$keywoard%' OR
                email LIKE '%$keywoard%' OR
                jurusan LIKE '%$keywoard%' OR
                ket LIKE '%$keywoard%'
            ";
        return query($query);
}

function registrasi($data){
    global $link;

    $username = strtolower(stripslashes($data["username"]));
    
    $password = mysqli_real_escape_string($link, $data["password"]);
    $password2 = mysqli_real_escape_string($link, $data["password2"]);
    $nim = $data["nim"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $level = 'mahasiswa';

    //upload gambar
    $gambar = upload();
    error_reporting(1);
    if( !$gambar){
        return false;
    }

    //cek username sudah terdaftar atau belum
    $result=mysqli_query($link, "SELECT username FROM user1 
        WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //cek nim sudah terdaftar atau belum
    $result=mysqli_query($link, "SELECT nim FROM user 
        WHERE nim = '$nim'");
        
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Nim Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //cek email sudah terdaftar atau belum
    $result=mysqli_query($link, "SELECT email FROM user 
        WHERE email = '$email'");
        
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('email Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //konfirmasi password
    if ($password !== $password2){
        echo "<script>
                alert('password tidak sama');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah userbaru ke database
    $query=mysqli_query($link, "INSERT INTO user
                                VALUES
                            (null, '$username','$nim','$email','$password','$jurusan','$level','$gambar')
                            ");

    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang diupload
    if( $error === 4){
        echo "
            <script>
                alert('Upload Gambar Terlebih Dahulu');
                document.location.href = 'registrasi.php';
            </script>
        ";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "
            <script>
                alert('Yang Anda Upload Bukan Gambar');
                document.location.href = 'registrasi.php';
            </script>
        ";
        return false;
    }

    //cek ukuran gambar yang bisa diupload
    if( $ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran Gambar Terlalu Besar');
                document.location.href = 'registrasi.php';
            </script>
        ";
        return false;
    }

    //generate nama file
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    //jika yang diupload benar
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    
    return $namaFileBaru;
}

function tambahFile($data){
    //htmlspecialchars()
    global $link;

    $judul = $data['judul'];

    //upload file
    $dot = uploadFile();
    error_reporting(1);
    if( !$dot){
        return false;
    }

    //tambah userbaru ke database
    $query=mysqli_query($link, "INSERT INTO fileUpload
                                VALUES
                            (null, '$judul','$dot')
                            ");

    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function uploadFile(){
    $namaFile = $_FILES['data1']['name'];
    $ukuranFile = $_FILES['data1']['size'];
    $error = $_FILES['data1']['error'];
    $tmpName = $_FILES['data1']['tmp_name'];

    //cek apakah ada gambar yang diupload
    if( $error === 4){
        echo "
            <script>
                alert('Upload File Terlebih Dahulu');
                document.location.href = '?module=upload';
            </script>
        ";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiFileValid = ['pdf','word','txt','ods','ppt', 'pptx'];
    $ekstensiFile = explode('.', $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if( !in_array($ekstensiFile, $ekstensiFileValid)){
        echo "
            <script>
                alert('Yang Anda Upload Bukan pdf');
                document.location.href = '?module=upload';
            </script>
        ";
        return false;
    }

    //cek ukuran gambar yang bisa diupload
    if( $ukuranFile > 10000000){
        echo "
            <script>
                alert('Ukuran File Terlalu Besar');
                document.location.href = '?module=upload';
            </script>
        ";
        return false;
    }

    //generate nama file
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    //jika yang diupload benar
    move_uploaded_file($tmpName, 'img/upload/' . $namaFileBaru);
    
    return $namaFileBaru;
    
}

function tampilData(){
    global $link;
    
    $tampilFile = query("SELECT * FROM fileUpload");

    $i=1;
    foreach($tampilFile as $tampil1){
        echo $tampil1['judul'];
        echo '</br>' ;
        $i++ ;
    }
}

?>