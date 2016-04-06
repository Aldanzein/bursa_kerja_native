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

move_uploaded_file($tmp_name, $name);
 
//update data di database sesuai user_id
$query = mysql_query("update t_anggota set nm_anggota='$nama', alamat='$alamat', tgl_lahir='$tgl', pendidikan='$pendidikan', kompetensi_keahlian='$komp', gambar='$name' where id_anggota='$id'") or die(mysql_error());
 
if (mysql_query($sql))
{
?><script language="javascript">alert('Gagal Diupdate');
document.location='paneluser.php?privasi=Edit+Akun'</script><?php
}

else
{
?><script language="javascript">alert('Data Telah Diupdate');
document.location='paneluser.php?privasi=Edit+Akun'</script><?php
}
?> 