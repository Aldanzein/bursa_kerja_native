<?php
$user="root";
$password="";
$server = "localhost";

$koneksi =mysql_connect("localhost","$user","$password") 
or die ("tidak dapat connect ke server");

mysql_select_db(bursa_kerja) or die ("database tidak dapat dibuka");
?>
