<?php 
	$lahir    =new DateTime('1996-10-08');
    $tgl      =new DateTime('2020-05-01');
    $umur = $tgl->diff($lahir);
    echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
?>