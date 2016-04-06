<?php
include('koneksi.php');
 
$data = $_GET['id'];
 
$sql="delete from t_pesan where id_pesan='$data'";

 if (mysql_query($sql))
{
?><script language="javascript">alert('Data Telah Berhasil Dihapus');
document.location='paneluser.php?pesan=Pesan'</script><?php
}
else
{echo "Data tidak dapat dihapus";}


mysql_close($koneksi);
include "paneluser.php";
?>