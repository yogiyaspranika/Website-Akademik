<?php

$kj_jenis = $_SESSION['kj'];
$query = "SELECT * FROM soal 
          WHERE kj_jenis='$kj_jenis'
          ORDER BY rand()
          limit 20";
$hasil= mysqli_query($link, $query) or die(mysql_error());

$sql = mysqli_query($link,"SELECT * FROM timer");
     
    /* Apabila data di database kosong, maka waktu awal di set 0 jam, 10 menit dan 0 detik */
    if(mysqli_num_rows($sql) == 0){
        $jam    = 0;
        $menit  = 10;
    }else{
        $data   = mysqli_fetch_array($sql);
         
         if($data['waktu'] < 60){ 
             /* Apabila waktu yang diiputkan kurang dari 60 menit, maka waktu dijadikan menit dan 0 jam */
             $menit = $data['waktu']; 
             $jam = 0; 
        }else{ 
             /* Apabila waktu yang diiputkan lebih dari 60 menit, maka waktu/60 dan sisa bagi dijadikan menit serta hasil bagi dijadikan jam */
             $menit = $data['waktu']%60;
 
             //awalnya seperti ini 
            //$jam = substr(($data['waktu']/60),0,1); //substr berfungsi untuk mengambil string, 0 dimulai dari string ke-0 dan 1 jumlah string yang akan diambil
            //saya ganti menjadi
            $jam = (int)($data['waktu']/60); //dijadikan integer
        } 
    }
    
if (isset($_SESSION["mulai"])) { 
    //jika session sudah ada
    $telah_berlalu = time() - $_SESSION["mulai"];
} else { 
    //jika session belum ada
    $_SESSION["mulai"]  = time();
    $telah_berlalu      = 0;
} 

?>
    <h2>
    <div id="timer_place" name="mulai">
        <span id="timer">00 : 00 : 00</span>
    </div>
    </h2>
    <div id="main-wrapper">

<!-- <?php echo $kj_jenis;  ?> -->
            <div class="soal">
                            <form  method="POST" action="?module=submit&kd=<?= $kj_jenis; ?> "class="form-horizontal" id="frmSoal">
                                <div class="card-body">
                                    <br>
                                    <div class="pertanyaan1">
                                        <?php 
                                        $no = 0;
                                        $x = 0;
                                        while ($soal = mysqli_fetch_array($hasil)) {
                                       ?>
                                    <label class="pertanyaan"> <?php $no = $no+1; echo $no.'.  '; echo $soal['pertanyaan']; ?>  </label>
                                     </div>

                                    <div class="form-group row">
                                    <div class="col-md-12">     
                                         <div class="opsi">
                                            <?php $x= $x + 1; ?>
                                            <input type="radio" class="custom-control-input" value="a" id="customControlValidation<?= $x; ?>" name="<?= $soal['no_soal']; ?>" >
                                            <label class="custom-control-label" for="customControlValidation<?= $x; ?>"><?php echo $soal['op_a']; ?></label>
                                        </div>
                                         <div class="opsi">
                                             <?php $x= $x + 1; ?>
                                            <input type="radio" class="custom-control-input" value="b" id="customControlValidation<?= $x; ?>" name="<?= $soal['no_soal']; ?>" >
                                            <label class="custom-control-label" for="customControlValidation<?= $x; ?>"><?php echo $soal['op_b']; ?></label>
                                        </div>
                                         <div class="opsi">
                                          <?php $x= $x + 1; ?>
                                            <input type="radio" class="custom-control-input" value="c" id="customControlValidation<?= $x; ?>" name="<?= $soal['no_soal']; ?>">
                                            <label class="custom-control-label" for="customControlValidation<?= $x; ?>"><?php echo $soal['op_c']; ?></label>
                                        </div>
                                        <div class="opsi">
                                         <?php $x= $x + 1; ?>
                                            <input type="radio" class="custom-control-input" value="d" id="customControlValidation<?= $x; ?>" name="<?= $soal['no_soal']; ?>">
                                            <label class="custom-control-label" for="customControlValidation<?= $x; ?>"><?php echo $soal['op_d']; ?></label>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                                </div>
                                <br><center>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary"
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
                                            margin-top: 10px;
                                        "
                                        onclick="return confirm('yakin?');"> 
                                        Submit</button>
                                    </div>
                                </div>
                                        </center>
                            </form>
                        </div>
            </div>
   