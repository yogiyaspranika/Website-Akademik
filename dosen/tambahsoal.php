<?php
error_reporting(1);
// $kj_jenis = $_GET['kd'];
//tambahsoal sama dengan di bagian form input bawah sekali
if($_POST['tambahsoal']){

	$pertanyaan = $_POST['pertanyaan'];
	$op_a = $_POST['op_a'];
	$op_b = $_POST['op_b'];
	$op_c = $_POST['op_c'];
	$op_d = $_POST['op_d'];
	$kj = $_POST['kj'];
	$kj_jenis = $_POST['kj_jenis'];

	$query2 = "INSERT INTO `soal`(`pertanyaan`, `op_a`,  `op_b`, `op_c`, `op_d`, `kj`, `kj_jenis`) VALUES ('$pertanyaan', '$op_a', '$op_b', '$op_c', '$op_d', '$kj' , '$kj_jenis')";
	$hasil= mysqli_query($link, $query2) or die(mysqli_error());

	if ($hasil) {
		echo "<script> 
			alert('Soal telah berhasil ditambahkan.'); 
			window.location = '?module=soal'
			</script>";		
	}


}

?>
		<h2>Tambah Soal</h2>
			<form class="soal" method="POST">
					
					<div class="pertanyaanT">
						<label for="cono1" class="col-sm-3 text-right control-label col-form-label">Pertanyaan :</label>
						<div class="col-sm-9">
							<textarea name="pertanyaan" class="form-control" placeholder="Pertanyaan . . ." id="cono1"></textarea>
						</div>
					</div>

					<div class="opsiT">
						<label for="fname" class="col-sm-3 text-right control-label col-form-label">Pilihan Jawaban :</label>
						<div class="col-sm-9">
							<textarea name="op_a" class="form-control" id="fname" placeholder="Pilihan A"></textarea>
						</div>
					</div>

					<div class="opsiT">
						<div class="col-sm-9">
							<textarea name="op_b" class="form-control" id="lname" placeholder="Pilihan B"></textarea>
						</div>
					</div>

					<div class="opsiT">
						<div class="col-sm-9">
							<textarea name="op_c" class="form-control" id="lname" placeholder="Pilihan C"></textarea>
						</div>
					</div>

					<div class="opsiT">
						<div class="col-sm-9">
							<textarea name="op_d" class="form-control" id="email1" placeholder="Pilihan D"></textarea>
						</div>
					</div>

					<div class="kunciT">
					<label class="col-sm-3 text-right">Kunci Jawaban :</label>
						<div class="col-sm-9">
							<div class="radio">
								<input type="radio" class="custom-control-input" id="customControlValidation1" name="kj" required value="a">
								<label class="custom-control-label" for="customControlValidation1">Pilihan A</label>
							</div>

							<div class="radio">
								<input type="radio" class="custom-control-input" id="customControlValidation2" name="kj" required value="b">
								<label class="custom-control-label" for="customControlValidation2">Pilihan B</label>
							</div>

							<div class="radio">
								<input type="radio" class="custom-control-input" id="customControlValidation3" name="kj" required value="c">
								<label class="custom-control-label" for="customControlValidation3">Pilihan C</label>
							</div>

							<div class="radio">
								<input type="radio" class="custom-control-input" id="customControlValidation3" name="kj" required value="d">
								<label class="custom-control-label" for="customControlValidation3">Pilihan D</label>
							</div>
						</div>
					</div>

					<div class="kodeS">
						<label for="email1" class="col-sm-3 text-right control-label col-form-label">Kode Soal</label>
						<div class="col-sm-9">
							<input type="text" name="kj_jenis" class="form-control" id="email1" placeholder="Kode Soal">
						</div>
					</div>

					<div class="button-tambah">
							<input type="submit" name="tambahsoal"
							style="
								font-family: 'Times New Roman', Times, serif;
								font-size: 20px;
								width: 110px;
								height: 30px;
								border-radius: 5px;
								background-color: sandybrown;
								color: red;
								font-style: bold;
								border: 1px solid salmon;
								margin-left: 41%;
								margin-right: auto;
								margin-bottom: 0px;
								margin-top: 20px;
							"> 
					</div>
			</form>