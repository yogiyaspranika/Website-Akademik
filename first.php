<?php
    session_start();
    require 'functions.php';
    $waktu="";
    $res = mysqli_query($link, "SELECT * FROM timer");
    while($row=mysqli_fetch_array($res)){
        $duration=$row["waktu"];
    }

    $_SESSION["waktu"]=$waktu;
    $_SESSION["start_time"]= date("Y-m-d H:i:s");

    $end_time= $end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION['waktu'].'minutes', strtotime($_SESSION["start_time"])));
    $_SESSION["end_time"]=$end_time;
?>

<script type="text/javascript">
    window.location="time.php";
</script>