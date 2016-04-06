<?php
	include 'koneksi.php';
$id = $_GET['data'];
$gambar = $_POST ['gambar'];
$folder = "gambar";
$tmp_name = $_FILES["gambar"]["tmp_name"];
$name = $folder."/".$_FILES["gambar"]["name"];

move_uploaded_file($tmp_name, $name);
 
//update data di database sesuai user_id
$query = mysql_query("update t_admin set gambar='$name' where username='$id'") or die(mysql_error());
 
if (mysql_query($sql))
{
?><script language="javascript">alert('Gagal Diupdate');
document.location='admin.php'</script><?php
}

else
{
?><script language="javascript">alert('Data Telah Diupdate');
document.location='admin.php'</script><?php
}
?> 