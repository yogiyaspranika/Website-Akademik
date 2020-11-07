<?php
require 'functions.php';

$mhs = query("SELECT * FROM user");
$result = mysqli_query($link, "SELECT * FROM timer ORDER BY id DESC");
while($res = mysqli_fetch_array($result)) { 
$date = $res['date'];
$h = $res['h'];
$m = $res['m'];
$s = $res['s'];
}

if(isset($_POST['update']))
{	
$date=$_POST['date'];
$h= $_POST['h'];
$m= $_POST['m'];
$s= $_POST['s'];
		//updating the table
$result = mysqli_query($link, "UPDATE timer SET date='$date' WHERE id=1");
$result = mysqli_query($link, "UPDATE timer SET h='$h' WHERE id=1");
$result = mysqli_query($link, "UPDATE timer SET m='$m' WHERE id=1");
$result = mysqli_query($link, "UPDATE timer SET s='$s' WHERE id=1");	
//redirectig to the display page. In our case, 
echo "Timer updated";
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataBase ADMIN</title>
</head>
<body>
<form method="POST" action="#">
    Date*<input type="date" name="date" value="<?php echo $date;?>">
    H* <input type="number" name="h" value="<?php echo $h;?>">
    M* <input type="number" name="m" value="<?php echo $m;?>">
    S*<input type="number" name="s" value="<?php echo $s;?>">
    <button type="submit" name="update">Update</button>
</form>
</body>
</html>

<script>
 var countDownDate = <?php 
echo strtotime("$date $h:$m:$s" ) ?> * 1000;
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {
now = now + 1000;
// Find the distance between now an the count down date
var distance = countDownDate - now;
// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// Output the result in an element with id="demo"
document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
minutes + "m " + seconds + "s ";
// If the count down is over, write some text 
if (distance < 0) {
clearInterval(x);
 document.getElementById("demo").innerHTML = "EXPIRED";
}
    
}, 1000);

    </script>