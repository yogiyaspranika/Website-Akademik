<?php
// $kj_jenis = $_GET['kd'];
//perhatikan soal adalah nama tabel di phpmyadmiin. lalu, cari ctrl+f dengan keyword while
$query1 = "SELECT * FROM soal";
$hasil= mysqli_query($link, $query1) or die(mysql_error());

?>



<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title m-b-0"><font color="black">Daftar Soal</font></h1>
        </div>

        <div class="comment-widgets scrollable">
            <a href="?module=tambahsoal&kd=<?php echo $kj_jenis; ?>"> <button type="button" class="btn btn-success btn-lg">Add Question</button></a>
            <!-- Comment Row -->
            <?php 
            $no = 0;
            while ($soal = mysqli_fetch_array($hasil))

            {
               $no = $no +1; ?>
               <div class="d-flex flex-row comment-row m-t-0">

                <div class="p-2">
                    <?php echo $no; ?>
                </div>
                <div class="comment-text w-100">
                    <h4 class="font-medium"><?php echo $soal['pertanyaan']; ?></h4>
                    <span class="m-b-15 d-block"> <?php echo $soal['op_a']; ?> </span><br>
                    <span class="m-b-15 d-block"> <?php echo $soal['op_b']; ?> </span><br>
                    <span class="m-b-15 d-block">  <?php echo $soal['op_c']; ?> </span><br>
                    <span class="m-b-15 d-block">  <?php echo $soal['op_d']; ?> </span><br>
                    <span class="float-right"> <?php echo "Kunci Jawaban : ".$soal['kj']; ?> </span> 
                    <div class="comment-footer">
                        <a href="?module=editsoal&kd=<?php echo $soal['no_soal']; ?>"> <button type="button" class="btn btn-cyan btn-sm">Edit</button> </a>
                        <a href="?module=hapussoal&kd=<?php echo $soal['no_soal']; ?>"><button type="button" class="btn btn-danger btn-sm">Delete</button> </a>
                    </div>
                </div>
            </div>

            <?php } ?>

