<html><head>
    <title>Siminput Data Anggota</title>
    <link rel="shortcut icon" href="icon.png" />
</head>

<?php     
include "koneksi.php";
$nama = $_POST['nm_perusahaan'];
$alamat = $_POST ['jenis_usaha'];
$tanggal = $_POST ['alamat'];
$pendidikan = $_POST ['bidang'];
$komp = $_POST ['nm_pemilik'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$gambar = $_POST ['gambar'];
$folder = "gambar";
$tmp_name = $_FILES["gambar"]["tmp_name"];
$name = $folder."/".$_FILES["gambar"]["name"];

move_uploaded_file($tmp_name, $name);


$sql="insert into t_konfirmasi_perusahaan (nm_perusahaan,jenis_usaha,alamat,bidang,nm_pemilik)
values('$nama','$alamat','$tanggal','$pendidikan','$komp')";


if (mysql_query($sql))
{
$query = mysql_query("select * from t_konfirmasi_perusahaan");
 
    
    while ($data = mysql_fetch_array($query)) {

	$kampret = $data['id_konfirmasi'];}
	?><script language="javascript">alert('Data Telah Dimasukan');
document.location='register2perusahaan.php?id=<?php echo"$kampret";?>'</script><?php
}
else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='register.php'</script><?php
}


mysql_close($koneksi);

?>