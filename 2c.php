<?php
	$tgl1    = "2020-05-01";
	$tgl2    = date('Y-m-d', strtotime('+6 months', strtotime($tgl1))); 
	echo $tgl2;
 ?>