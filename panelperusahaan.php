<?php
session_start();
include"koneksi.php";
$login=mysql_query("SELECT * FROM t_perusahaan WHERE username='$_SESSION[namauser]'
					AND password='$_SESSION[passuser]'");
$ketemu=mysql_num_rows($login);
if ($ketemu > 0){
 while ($data = mysql_fetch_array($login)) {
$data2 = $data['id_perusahaan'];}?>
<html>
<title>Panel Perusahaan</title>
<head>

<link href="lumino/css/bootstrap.min.css" rel="stylesheet">
<link href="lumino/css/datepicker3.css" rel="stylesheet">
<link href="lumino/css/bootstrap-table.css" rel="stylesheet">
<link href="lumino/css/styles.css" rel="stylesheet">
<link href="cssuser.css" rel="stylesheet" type="text/css" media="all" />
</head><?php
$query = mysql_query(" select * from t_perusahaan where username='$_SESSION[namauser]'");
				while ($data = mysql_fetch_array($query)) { ?>
<body background="<?php echo $data['background'];}?>">
<div id="headeratas" style="color: white;">
<img src="banner/banner.png" width="200px" height="60px" >
<?php include 'koneksi.php';
			
			$query = mysql_query(" select * from t_perusahaan where username='$_SESSION[namauser]' ");
				while ($data = mysql_fetch_array($query)) {?>
				Selamat datang <b><i><?php echo $data['username'];}
				?></i></b>
<form style="margin-left: 1200px; margin-top: -57px;" action="logout.php">
		<input type="submit" name="logout" value="Log Out"></form>
</div>
	<div id="wrapper">
	
		
		<div id="header">
			<div class="header1"><center>
			

				<?php include 'koneksi.php';
			
			$query = mysql_query(" select * from t_perusahaan where username='$_SESSION[namauser]'");
				while ($data = mysql_fetch_array($query)) {
				$data7 = $data['id_perusahaan'];
				?> 
		<table cellspacing="4px" border="0px" style="border:2px solid #9999FF; border-radius: 3px;" >
				<td> <img src="<?php echo $data['gambar'];?>" width="158px" height="153px"> </td>
				</table>
			<br>	
		<table cellspacing=10 style="font-size: 12px;" >
			<tr>
			<td><b>Nama Perusahaan<hr></td><td><b>:&nbsp<?php echo $data['nm_perusahaan'];?><hr></td></tr>
			<tr>
			<td><b>Jenis Usaha<hr></td><td><b>:&nbsp<?php echo $data['jenis_usaha'];?><hr></td></tr>
			<tr>
			<td><b>Alamat<hr></td><td><b>:&nbsp<?php echo $data['alamat'];?><hr></td></tr>
			<tr>
			<td><b>Bidang<hr></td><td><b>:&nbsp<?php echo $data['bidang'];?><hr></td></tr>
			<tr>
			<td><b>Nama Pemilik<hr></td><td><b>:&nbsp<?php echo $data['nm_pemilik'];}?><hr></td></tr>
			
			
			</table></center>
			</div>
			<div class="header2">
			
				<h2>Panel Perusahaan</h2>
				

			</div>
			
			</div>
			<div id="project">
			
			<form method="get" style="color: white; ">
					<input type="submit" name="inputpermintaan" value="Input Permintaan">
					<input type="submit" name="pesan" value="Pesan">
					<input type="submit" name="permintaan" value="Permintaan Terposting">
					<input type="submit" name="privasi" value="Edit Akun">
			
				</form>
			
			<?php
			if ($_GET ['inputpermintaan']) :
			include 'input_permintaan.php' ;
			endif;
			
			if ($_GET ['pesan']) :
			include 'lihat_pesan_perusahaan.php' ;
			endif; 
			
			if ($_GET ['privasi']) :
			include 'input_edit_akunperusahaan.php' ;
			endif; 
			
			if ($_GET ['permintaan']) :
			include 'lihat_permintaan_perusahaan_perusahaan.php' ;
			endif; 
			
			?>
			
			</div>
		
		
	</div>
	<div id="footer">
		<div >
					<div class="panel-heading dark-overlay">Aldanzein User Panel</div>
					<div class="panel-body">
						<center><p>Aldan User Panel ---- Web yang menghubungkan Jutaan calon karyawan dengan puluhan juta Lapangan Pekerjaan yang menunggu anda </p>
					</div>

		</div>



	</div>
		
						<center><p>Dadan S Nugraha</p>
				
</html>
<?php
}
else{ ?>

  <script language="javascript">alert('Anda Tidak Layak Untuk Masuk');
document.location='index.php'</script><?php
}
?>