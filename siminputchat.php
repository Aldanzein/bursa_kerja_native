<html><head>
    <title>Siminput Data Anggota</title>
    <link rel="shortcut icon" href="icon.png" />
</head>

<?php     
include "koneksi.php";
$id = $_GET['id'];
$nama = $_POST['chat'];

$sql="insert into chat (id_anggota,chat)
values('$id','$nama')";


if (mysql_query($sql))
{
?><script language="javascript">alert('Data Telah Dimasukan');
document.location='paneluser.php?permintaan=Daftar+Permintaan'</script><?php
}
else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='paneluser.php'</script><?php
}


mysql_close($koneksi);

?>