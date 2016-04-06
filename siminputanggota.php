<html><head>
    <title>Siminput Data Anggota</title>
    <link rel="shortcut icon" href="icon.png" />
</head>

<?php     
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST ['alamat'];
$tanggal = $_POST ['tanggal'];
$pendidikan = $_POST ['pendidikan'];
$komp = $_POST ['jurusan'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$gambar = $_POST ['gambar'];
$folder = "gambar";
$tmp_name = $_FILES["gambar"]["tmp_name"];
$name = $folder."/".$_FILES["gambar"]["name"];

move_uploaded_file($tmp_name, $name);
 



$sql="insert into t_anggota (nm_anggota,alamat,tgl_lahir,pendidikan,kompetensi_keahlian)
values('$nama','$alamat','$tanggal','$pendidikan','$komp')";


if (mysql_query($sql))
{
$query = mysql_query("select * from t_anggota");
 
    
    while ($data = mysql_fetch_array($query)) {

	$kampret = $data['id_anggota'];}
	?><script language="javascript">alert('Data Telah Dimasukan');
document.location='register2.php?id=<?php echo"$kampret";?>'</script><?php
}
else
{
?><script language="javascript">alert('Data Gagal Dimasukan');
document.location='register.php'</script><?php
}


mysql_close($koneksi);

?>