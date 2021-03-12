<?php
include("functions/init.php");
//$a = md5("securitysecured");

//$sql = "UPDATE admin SET `password` = '$a' WHERE `user` = 'teenstoyouth'";
//$res = query($sql);

$_SESSION['cousn'] = '<p id="demo"></p>';
echo $_SESSION['cousn'];
 ?>

<script>
document.getElementById("demo").innerHTML = 5 + 6;
</script>