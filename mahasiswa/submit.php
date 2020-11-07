<?php
$kj_jenis = $_GET['kd'];

$query = "SELECT * FROM soal WHERE kj_jenis='$kj_jenis' ";
$hasil = mysqli_query($link, $query) or die(mysql_error());
$benar = 0;
$salah = 0;


while ($soal = mysqli_fetch_array($hasil)) {
	error_reporting(0);

	$noskrng =  $soal['no_soal'];
	$jawaban = $_POST[$noskrng];
	$arrayjawaban[$noskrng] = $jawaban;
	$kunci = $soal['kj'];

	if ($arrayjawaban[$noskrng]==$kunci) {
		$benar = $benar + 1;
	} 
	else {
		$salah= $salah + 1;
	}
	// error_reporting(0);
}

if ($benar==0) {
	$nilai = 0;
}
else {
	$nilai = $benar / ($benar + $salah) * 100; 
}
	$nilaisalah = 100 - $nilai;

 


	//Input Nilai
	$name = $_SESSION['nama'];
	$nim = $_SESSION['nim'];

	$query1 = "INSERT INTO `nilai`( `nama`, `no_mk`,  `nilai`, `nim`) VALUES ('$name', '$kj_jenis', '$nilai','$nim')";
    $hasil1 = mysqli_query($link, $query1) or die(mysqli_error());

    if ($hasil) {
        echo "<script>alert('Succes');</script>";
	}
    else {
        echo "<script> alert('Gagal.');  </script>";
	}

?>

<!-- card -->
<div class="card">
	<div class="card-body">
	<br>
	<h2>Hasil Ujian</h2>

		<div class="soal">
    <center>
			<table class="table2">
                                  <thead>
                                    <tr>
                                      <th>Nama</th>
                                      <th>Nim</th>
                                      <th >Angka</th>
                                      <th>Huruf</th>
                                      <th >keterangan</th>
                                      
                                    </tr>
								  </thead>

								  <tbody>
                                    <tr>
                                      <td><?php  echo $name; ?></td>
                                      <td><?php  echo $nim; ?></td>
									  <td><?php  echo $nilai ?></td>
									  
                                      <td><?php 
                                            if ($nilai >= 86 ) {
                                                echo "A";}
                                            elseif ($nilai >= 75 && $nilai < 86) {
                                                echo "B";}
                                            elseif ($nilai >= 67 && $nilai < 75) {
                                                echo "C";}
                                            elseif ($nilai >= 50 && $nilai < 67) {
                                                echo "D";}
                                            elseif ($nilai >= 0 && $nilai < 50) {
                                                echo "E";}
                                            ; ?> 
										</td>
										
                                        <td>
                                        <?php if($nilai > 29) :?>
                                          <?php
                                            echo 'Lulus';
                                          ?>
                                          <?php else: ?>
                                            <?php echo 'Tidak Lulus'; ?>
                                        <?php endif; ?>
                           
                                      </td>
                                
                                    </tr>
                                  </tbody>
			</table>
      </center>
			<br>

		<div class="hasilA">
			<h4>JUMLAH BENAR: <?= $benar; ?></h4>
			<h4>JUMLAH SALAH : <?= $salah; ?></h4>
			<h4>NILAI : <?= $nilai; ?></h4>
		</div>
</div>
<!-- row -->

