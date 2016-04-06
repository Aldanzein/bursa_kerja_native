<html><head>
    <title>Siminput Data Anggota</title>
    <link rel="shortcut icon" href="icon.png" />
</head>

<?php     
include "koneksi.php";
$data  = $_GET['ida'];
$data2 = $_GET['idp'];
$data3 = $_GET['idp2'];


$sql="insert into t_pesan (id_anggota,id_perusahaan,id_permintaan)
values('$data','$data2','$data3')";

if (mysql_query($sql))
{
	?><script language="javascript">alert('Data Telah Terkirim');
document.location='paneluser.php?pesan=Pesan'</script><?php
}
else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='paneluser.php'</script><?php
}


mysql_close($koneksi);

?>
