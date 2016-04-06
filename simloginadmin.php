<?php
include "koneksi.php";

$username = ($_POST['username']);
$pass     = $_POST['password'];

$login=mysql_query("SELECT * FROM t_admin WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0){
  session_start();
  $_SESSION[namauser]     = $r['username'];
  $_SESSION[passuser]     = $r['password'];
  ?>
  <script language="javascript">alert('Selamat Datang Wahai Admin..!!');
document.location='admin.php?gambar=gambar'</script> <?php
}
else{ ?>
  <script language="javascript">alert('Username atau Password Salah besar');
document.location='login.php'</script> <?php 
}
?>