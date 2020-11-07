<?php

//paginatioan
//konfigurasi pagination
$JumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM soal"));
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$jumlahHalaman = ceil($jumlahData / $JumlahDataPerHalaman);

$awalData = ($JumlahDataPerHalaman * $halamanAktif) - $JumlahDataPerHalaman;

$query1 = "SELECT * FROM soal LIMIT $awalData,$JumlahDataPerHalaman";
$hasil= mysqli_query($link, $query1) or die(mysql_error());

?>

        <!-- navigasi -->
        <div class="navigasi">
            <?php if($halamanAktif > 1) : ?>
                <a href="admin.php?module=soal&halaman=<?= $halamanAktif - 1?>">&laquo;</a>
            <?php endif; ?>

            <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
                <?php if($i == $halamanAktif): ?>
                    <a href="admin.php?module=soal&halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?> </a>
                <?php else: ?>
                    <a href="admin.php?module=soal&halaman=<?= $i; ?>"><?= $i; ?> </a>
                <?php endif ?>
            <?php endfor; ?>

            <?php if($halamanAktif < $jumlahHalaman) : ?>
                <a href="admin.php?module=soal&halaman=<?= $halamanAktif + 1?>">&raquo;</a>
            <?php endif; ?>
        </div>

        <!-- soal -->
        <div class="soal">
            <?php 
            $no = 0;
            while ($soal = mysqli_fetch_array($hasil))
            {
               $no = $no +1; ?>
                <div class="soal-isi">
                    
                    <h4 class="pertanyaan"><?php echo $no; ?>. <?php echo $soal['pertanyaan']; ?></h4>
                    <span class="opsi"> <?php echo $soal['op_a']; ?> </span><br>
                    <span class="opsi"> <?php echo $soal['op_b']; ?> </span><br>
                    <span class="opsi">  <?php echo $soal['op_c']; ?> </span><br>
                    <span class="opsi">  <?php echo $soal['op_d']; ?> </span><br>
                    <span class="kunci"> <?php echo "Kunci Jawaban : ".$soal['kj']; ?> </span> 
                    <div class="edit">
                        <a href="?module=editsoal&kd=<?php echo $soal['no_soal']; ?>"> <button type="button">Edit</button> </a>
                        <a href="?module=hapussoal&kd=<?php echo $soal['no_soal']; ?>" onclick="
                            return confirm('yakin?');"><button type="button">Delete</button> </a>
                     </div>
            <?php } ?>
            
        </div>

