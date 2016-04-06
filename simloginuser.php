<?php
include "koneksi.php";

$username = ($_POST['username']);
$pass     = md5($_POST['password']);



$login=mysql_query("SELECT * FROM t_anggota WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0){
  session_start();
  $_SESSION[namauser]     = $r['username'];
  $_SESSION[passuser]     = $r['password'];
  ?>
  <script language="javascript">alert('Selamat Datang Wahai Para Pencari Kerja..!!');
document.location='paneluser.php?permintaan=Daftar+Permintaan?id=<?php echo md5("$username"); ?>'</script> <?php
}
else{ 

$login=mysql_query("SELECT * FROM t_perusahaan WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0){
  session_start();
  $_SESSION[namauser]     = $r['username'];
  $_SESSION[passuser]     = $r['password'];
  ?>
  
  <script language="javascript">alert('Selamat Datang Wahai Pencari Karyawan..!!');
document.location="panelperusahaan.php?inputpermintaan=Input+Permintaan?id=<?php echo md5("$username"); ?>"</script> <?php

}
else{ ?>
  <script language="javascript">alert('Username atau Password Salah besar');
document.location='index.php'</script> <?php 
}}
?>

