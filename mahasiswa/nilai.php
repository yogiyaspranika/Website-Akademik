<?php

$kj_jenis = $_SESSION['kj'];
$nim = $_SESSION['nim'];

$query = "SELECT * FROM nilai WHERE nim = '$nim'";
$hasil= mysqli_query($link, $query) or die(mysql_error());


?>
                        <h2>Nilai Anda</h2>
                        <center>
                            <table class="table1">
                                  <thead>
                                    <tr>
                                      <th >No</th>
                                      <th>Nim</th>
                                      <th>Nama</th>
                                      <th >Angka</th>
                                      <th>Huruf</th>
                                      <th >keterangan</th>
                                      
                                    </tr>
                                  </thead>

                                   <?php 
                                        $no = 0;
                                        $x = 0;
                                        while ($soal = mysqli_fetch_array($hasil)) {
                                    ?>

                                  <tbody>
                                    <tr>
                                        <?php $no = $no+1;?> 
                                      <td><?php  echo $no;?></td>
                                      <td><?php  echo $soal['nim'];; ?></td>
                                      <td><?php  echo $soal['nama'];; ?></td>
                                      <td><?php  echo $soal['nilai'];; ?></td>
                                      <td><?php 
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
                                        <td>
                                        <?php if($soal['nilai'] > 29) :?>
                                          <?php
                                            echo 'Lulus';
                                          ?>
                                          <?php else: ?>
                                            <?php echo 'Tidak Lulus'; ?>
                                        <?php endif; ?>
                           
                                      </td>
                                
                                    </tr>
                                  </tbody>

                                <?php } ?>
                            </table>
                            </center>