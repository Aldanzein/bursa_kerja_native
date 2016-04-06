<?php
include 'koneksi.php';
$data = $_GET['id'];
$username = $_POST ['username'];
$password = md5($_POST ['password']);
$confirm = md5($_POST ['password2']);

		switch ($password) {
        case "$confirm":

	$sql="update t_konfirmasi_perusahaan set username='$username', password='$password' where id_konfirmasi=$data";
if (mysql_query($sql))
{
?><script language="javascript"> alert('Data Telah Berhasil Dimasukan, Tunggu Hingga Admin mengkonfirmasi permintaan Akun anda, Info lebih lanjut kontak langsung admin, semoga harimu menyenangkan =)');
document.location='index.php'</script><?php
}

else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='register.php'</script><?php
}

 break;
 
 }

if ($password != $confirm)
{

header("location:register2perusahaan.php?id=$data");
}
?>