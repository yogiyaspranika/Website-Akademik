
<?php

	$no_soal=$_GET['kd'];

	$query2 = "SELECT * FROM soal WHERE no_soal = '$no_soal'";
	$cekjenis = mysqli_query($link, $query2);
	$hasil2 = mysqli_fetch_array($cekjenis);


	$query = "DELETE FROM soal WHERE no_soal = '$no_soal'";
	$hasil = mysqli_query($link, $query);


	
	if($hasil){
		echo "<script> 
			alert('Soal telah berhasil dihapus.'); 
			window.location = '?module=soal'</script>";		
	}else{
		echo "<script> 
			alert('Soal gagal dihapus.'); 
			window.location = '?module=soal'</script>";
	}


?>
