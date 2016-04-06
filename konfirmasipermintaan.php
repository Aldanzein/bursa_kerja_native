<?php
$data = $_GET['id'];
	include 'koneksi.php';
	$sql="update t_pesan set konfirmasi='Y', pesan='Selamat Anda Telah Diterima Di Terima Di Perusahaan Ini' where id_pesan=$data";
	
	if (mysql_query($sql))
{
?><script language="javascript">alert('Permintaan Diterima');
document.location='panelperusahaan.php?pesan=Pesan'</script><?php
}

else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='panelperusahaan.php'</script><?php
}