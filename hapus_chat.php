<?php
include('koneksi.php');
 
$data = $_GET['id'];
 
$sql="delete from chat where id_chat='$data'";

 if (mysql_query($sql))
{
?><script language="javascript">alert('Data Telah Berhasil Dihapus');
document.location='admin.php?chat=Chat'</script><?php
}
else
{echo "Data tidak dapat dihapus";}


mysql_close($koneksi);
include "admin.php";
?>