<?php
error_reporting(1);
$no_soal = $_GET['kd'];
$query1 = "SELECT * FROM soal WHERE no_soal='$no_soal'";
$hasil1 = mysqli_query($link, $query1);
$soal = mysqli_fetch_array($hasil1);

//tambahsoal sama dengan di bagian form input bawah sekali
if($_POST['updatesoal']){

	$pertanyaan = $_POST['pertanyaan'];
	$op_a = $_POST['op_a'];
	$op_b = $_POST['op_b'];
	$op_c = $_POST['op_c'];
	$op_d = $_POST['op_d'];
	$kj = $_POST['kj'];
	$kj_jenis = $_POST['kj_jenis'];

	$query2 = "UPDATE  `soal` SET `pertanyaan`= '$pertanyaan', `op_a` = '$op_a', `op_b` = '$op_b', `op_c` = '$op_c', `op_d` = '$op_d', `kj` = '$kd' WHERE no_soal='$no_soal'";
	$hasil= mysqli_query($link, $query2) or die(mysqli_error());

	if ($hasil) {
		echo "
			<script> alert('Soal telah berhasil dirubah.'); 
			window.location = '?module=soal'
			</script>";	
	}
}

?>			
			<h2>Edit Soal</h2>
			<form class="soal" method="POST">
					<div class="pertanyaanE">
						<label for="cono1" class="col-sm-3 text-right control-label col-form-label">Pertanyaan</label>
						<div class="col-sm-9">
							<textarea name="pertanyaan"  class="form-control"> <?php echo $soal['pertanyaan']; ?> </textarea>
						</div>
					</div>
					
					<div class="opsiE">
						<label for="fname" class="col-sm-3 text-right control-label col-form-label">Option 1</label>
						<div class="col-sm-9">
							<input type="text" name="op_a" class="form-control" id="fname" value="<?php echo $soal['op_a']; ?>"> 

						</div>
					</div>

					<div class="opsiE">
						<label for="lname" class="col-sm-3 text-right control-label col-form-label">Option 2</label>
						<div class="col-sm-9">
							<input type="text" name="op_b" class="form-control" id="lname" value="<?php echo $soal['op_b']; ?>">
						</div>
					</div>

					<div class="opsiE">
						<label for="lname" class="col-sm-3 text-right control-label col-form-label">Option 3</label>
						<div class="col-sm-9">
							<input type="text" name="op_c" class="form-control" id="lname" value="<?php echo $soal['op_c']; ?>">
						</div>
					</div>

					<div class="opsiE">
						<label for="email1" class="col-sm-3 text-right control-label col-form-label">Option 4</label>
						<div class="col-sm-9">
							<input type="text" name="op_d" class="form-control" id="email1" value="<?php echo $soal['op_d']; ?>">
						</div>
					</div>

					<div class="kunciE">
					<label class="col-sm-3 text-right">Kunci Jawaban</label>
						<div class="col-sm-9">
							<div class="radioE">
								<input type="radio" class="custom-control-input" id="customControlValidation1" name="kj" value="a" required>
								<label class="custom-control-label" for="customControlValidation1">Option A</label>
							</div>
							<div class="radioE">
								<input type="radio" class="custom-control-input" id="customControlValidation2" name="kj"  value="b" required>
								<label class="custom-control-label" for="customControlValidation2">Option B</label>
							</div>
							<div class="radioE">
								<input type="radio" class="custom-control-input" id="customControlValidation3" name="kj" value="c" required>
								<label class="custom-control-label" for="customControlValidation3">Option C</label>
							</div>
							<div class="radioE">
								<input type="radio" class="custom-control-input" id="customControlValidation3" name="kj" value="d" required>
								<label class="custom-control-label" for="customControlValidation3">Option D</label>
							</div>
						</div>
					</div>

					<div class="border-top">
						<input type="submit" name="updatesoal"
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