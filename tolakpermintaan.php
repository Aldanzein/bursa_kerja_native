<?php
$data = $_GET['id'];
	include 'koneksi.php';
	$sql="update t_pesan set konfirmasi='X', pesan='Maaf Dengan Hormat Anda Tidak Diterima Di Perusahaan Ini' where id_pesan=$data";
	
	if (mysql_query($sql))
{
?><script language="javascript">alert('Data Telah Ditolak');
document.location='panelperusahaan.php?pesan=Pesan'</script><?php
}

else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='panelperusahaan.php'</script><?php
}