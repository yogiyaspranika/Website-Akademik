<?php 
    session_start();
?>

<div class="response"></div>

<script type="text/javascript">
    setInterval(function()
        var xmlhttp=new XMLHttp.Request();
        XMLHttp.Request.open("GET","response.php", false);
        xmlhttp.send(null);
        document.getElementById("response").innerHTML=xmlhttp.responseText;
    ),1000);
</script>