<?php
include('koneksi.php');
 
$data = $_GET['id'];
 
$sql="delete from t_konfirmasi_perusahaan where id_konfirmasi='$data'";

 if (mysql_query($sql))
{
?><script language="javascript">alert('Data Telah Berhasil Dihapus');
document.location='admin.php'</script><?php
}
else
{echo "Data tidak dapat dihapus";}


mysql_close($koneksi);
include "admin.php";
?>