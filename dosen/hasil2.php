<?php

$query = "SELECT * FROM nilai";
$hasil= mysqli_query($link, $query) or die(mysql_error());

?>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai Angka</th>
                <th>Nilai Huruf</th>
                <th>Paket</th>
                <th>Keterangan</th>
            
            </tr>

            <?php 
                $no = 0;
                $x = 0;
                while ($soal = mysqli_fetch_array($hasil)) {
            ?>
            
            <tr>
                <?php $no = $no+1;?> 
                <td><?= $no ?></td>
                <td><?= $soal['nim']; ?></td>
                <td><?= $soal['nama']; ?></td>
                <td><?= $soal['nilai']; ?></td>
                <td>
                <?php 
                    if ($soal['nilai'] >= 86 ) {
                        echo "A";}
                    elseif ($soal['nilai'] >= 75 && $soal['nilai' < 86]) {
                        echo "B";}
                    elseif ($soal['nilai'] >= 67 && $soal['nilai' < 75]) {
                        echo "C";}
                    elseif ($soal['nilai'] >= 50 && $soal['nilai' < 67]) {
                        echo "D";}
                    elseif ($soal['nilai'] >= 0 && $soal['nilai' < 50]) {
                        echo "E";}
                    ; ?>
                </td>
                <td><?= $soal['no_mk'] ?></td>
                <td>
                    <?php if($soal['nilai'] > 69) :?>
                        <?php echo 'Lulus';?>
                    <?php else: ?>
                        <?php echo 'Tidak Lulus'; ?>
                    <?php endif; ?>
                </td>
            </tr>
        </table>