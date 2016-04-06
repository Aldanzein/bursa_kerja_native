<?php
include'koneksi.php';
 
//tangkap data dari form
$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];
$umur=$_POST['umur'];
$pendidikan=$_POST['pendidikan'];
$komp=$_POST['komp'];
$gambar = $_POST ['gambar'];
$folder = "gambar";
$tmp_name = $_FILES["gambar"]["tmp_name"];
$name = $folder."/".$_FILES["gambar"]["name"];


move_uploaded_file($tmp_name, $name );

 
//update data di database sesuai user_id
$query = mysql_query("update t_perusahaan set nm_perusahaan='$nama', jenis_usaha='$alamat', alamat='$tgl', bidang='$pendidikan', nm_pemilik='$komp', gambar='$name' where id_perusahaan='$id'") or die(mysql_error());
 
if (mysql_query($sql))
{
?><script language="javascript">alert('Gagal Diupdate');
document.location='panelperusahaan.php?privasi=Edit+Akun'</script><?php
}

else
{
?><script language="javascript">alert('Data Telah Diupdate');
document.location='panelperusahaan.php?privasi=Edit+Akun'</script><?php
}
?> 