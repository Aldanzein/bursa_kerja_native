<?php
include 'koneksi.php';
$data = $_GET['id'];
$username = $_POST ['username'];
$password = md5($_POST ['password']);
$confirm = md5($_POST ['password2']);

$query2 = mysql_query("SELECT nm_anggota, tgl_lahir, TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM t_anggota where id_anggota=$data");
 while ($data2 = mysql_fetch_array($query2)) {

	$umur = $data2['umur'];}

		switch ($password) {
        case "$confirm":

	$sql="update t_anggota set username='$username', password='$password', usia='$umur' where id_anggota=$data";
if (mysql_query($sql))
{
?><script language="javascript">alert('Data Telah Berhasil Dimasukan');
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

header("location:register2.php?id=$data");
}
