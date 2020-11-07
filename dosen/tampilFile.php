<?php
    $tampilFile = query("SELECT * FROM fileUpload");
?>
<div class="main">
        <h2>Interaksi Manusia Komputer</h2>
        <div class="pn">Ditulis oleh<a href="https://www.facebook.com/profile.php?id=100002093016520" target="-blank">
        YogiYaspranika</a>. Pada <?php echo date("l,d,M,Y")?> </div>

        <p>Interaksi manusia dan komputer adalah disiplin ilmu yang mempelajari hubungan antara 
                manusia dan komputer yang meliputi perancangan, evaluasi, dan implementasi antarmuka 
                pengguna komputer agar mudah digunakan oleh manusia. Ilmu ini berusaha menemukan cara yang 
                paling efisien untuk merancang pesan elektronik.</p>

        <p>Dengan kata lain Interaksi manusia dan komputer itu sendiri adalah serangkaian proses, 
                dialog dan kegiatan yang dilakukan oleh manusia untuk berinteraksi dengan komputer yang 
                keduanya saling memberikan masukan dan umpan balik melalui sebuah antarmuka untuk memperoleh 
                hasil akhir yang diharapkan. Interaksi manusia dan komputer meliputi ergonomic dan faktor 
                manusia.</p>

        <p>Ergonomi adalah memfokuskan pada karakteristik fisik mesin dan system dan melihat performance 
                dari user (seseorang yang terlibat dalam menyelesikkan tugas). Dengan kata lain ergonomic terjadi 
                dimana interaksi manusia-komputer berkaitan dengan bentuk fisik dari mesin. Faktor manusia adalah 
                studi tentang manusia dan tingkah lakunya.</p>
</div>

<div class="side-bar">
    <h3>List Materi</h3>
    <div class="colr1">
        
            <?php $i = 1;?>
            <?php foreach($tampilFile as $tampil1): ?>
                - <a href="?module=file&files=<?php echo $tampil1['namaData']; ?>&judul=<?php echo $tampil1['judul']; ?>">
                <?php echo $tampil1['judul']; ?>
                <?php echo '</br>'; ?>
                </a>
            <?php endforeach;?>
        
    </div>
</div>