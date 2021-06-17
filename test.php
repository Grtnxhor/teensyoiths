<?php
include("functions/init.php");

    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'account'";
	$rsl = query($sql);
	$row = mysqli_fetch_array($rsl);

	//get previous value 
	$a = $row['count'];
	
	//add 1 to it 
	$b = $a + 1;

	//update final value
	$ssl = "UPDATE `linkcount` SET `count` = '$b' WHERE `link` = 'account'";
	$res = query($ssl);

	echo $b;