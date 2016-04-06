<?php
$lahir = mktime(0, 0, 0, 1, 9, 2015);
$t = time();
$umur = ($lahir < 0) ? ( $t + ($lahir * -1) ) : $t - $lahir; 
$tahun = 60 * 60 * 24 * 365; 
$tahunlahir = $umur / $tahun;
$umursekarang=floor($tahunlahir) ;
 echo 'Umur anda ' .$umursekarang. ' tahun.'; ?>