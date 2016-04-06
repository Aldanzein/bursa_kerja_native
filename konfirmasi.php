 <?php
	include 'koneksi.php';
    $query = mysql_query("select * from t_konfirmasi_perusahaan");
 
    
    while ($data = mysql_fetch_array($query)) {
	
	$id = $data['id_konfirmasi'];
    $kampret =   $data['nm_perusahaan'];
    $kampret2 =  $data['jenis_usaha'];
	$kampret3 =	$data['alamat'];
	$kampret4 =	$data['bidang'];
	$kampret5 =	$data['nm_pemilik'];
	$kampret6 =	$data['username'];
	$kampret7 =	$data['password'];
			}
$sql1="insert into t_perusahaan (nm_perusahaan,jenis_usaha,alamat,bidang,nm_pemilik,username,password)
values('$kampret','$kampret2','$kampret3','$kampret4','$kampret5','$kampret6','$kampret7')";

$sql="delete from t_konfirmasi_perusahaan where id_konfirmasi='$id'";

if (mysql_query($sql1)) 
{
echo "sudah diinput"; 
}

if (mysql_query($sql))
{
?><script language="javascript">alert('Akun Berhasil Dikonfirmasi');
document.location='admin.php?konfirmasi=Konfirmasi+Perusahaan'</script><?php
}
else
{echo "Data tidak dapat dimasukkan";}


mysql_close($koneksi);
include "admin.php";
?>