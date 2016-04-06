<html><head>
    <title>Siminput Data Anggota</title>
    <link rel="shortcut icon" href="icon.png" />
</head>

<?php     
include "koneksi.php";
$data = $_GET['id'];
$pendidikan = $_POST ['pendidikan'];
$usia = $_POST ['usia'];
$kompetensi_keahlian = $_POST ['kompetensi'];
$gaji = $_POST ['gaji'];
$informasi = $_POST ['informasi'];





$sql="insert into t_permintaan_perusahaan (id_perusahaan,pendidikan,usia,kompetensi_keahlian,gaji,informasi)
values('$data','$pendidikan','$usia','$kompetensi_keahlian','$gaji','$informasi')";


if (mysql_query($sql))
{
	?><script language="javascript">alert('Data Telah Dimasukan');
document.location='panelperusahaan.php?permintaan=Permintaan+Terposting'</script><?php
}
else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='panelperusahaan.php'</script><?php
}


mysql_close($koneksi);

?>